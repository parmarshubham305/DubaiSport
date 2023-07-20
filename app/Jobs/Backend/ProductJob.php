<?php

namespace App\Jobs\Backend;

use App\Models\Product;
use App\Models\ProductSpecification;

class ProductJob
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!isset($this->data['id'])) {
            $this->data['id'] = null;
        }
        
        $data = Product::firstOrNew(['id' => $this->data['id']]);

        $oldMainImage = $data['main_image'];
        $oldOtherImages = $data['other_images'];

        if(!isset($this->data['status'])) {
            $this->data['status'] = '0';
        } else {
            $this->data['status'] = '1';
        }

        if(!isset($this->data['popular_product'])) {
            $this->data['popular_product'] = '0';
        } else {
            $this->data['popular_product'] = '1';
        }

        if(!isset($this->data['best_seller'])) {
            $this->data['best_seller'] = '0';
        } else {
            $this->data['best_seller'] = '1';
        }
        
        $data->fill($this->data);
        
        $folderName = time();
        if($this->data['id'] == null) {
            $data->image_prefix_folder = $folderName;
        } else {
            $folderName = $data->image_prefix_folder;
        }
        
        $data->discounted_price = ($this->data['price'] - ( $this->data['price'] * $this->data['discount_percentage'] ) / 100);
        
        if(isset($this->data['main_image'])) {
            if($this->data['main_image'] && !empty($this->data['_method']) && $this->data['_method'] == 'PATCH') {
                if(file_exists(public_path(str_replace(env('APP_URL'),'',$oldMainImage)))) {
                    unlink(public_path(str_replace(env('APP_URL'),'',$oldMainImage)));
                }
            }
            $mainImage = $this->data['main_image'];
            $name = time(). '.' . $mainImage->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/products/'.$folderName);
            $mainImage->move($destinationPath, $name);
            $fileName = 'uploads/products/'.$folderName.'/'.$name;
            $data->main_image = $fileName;
        }

        if(isset($this->data['other_images'])) {
            $otherImagesArray = [];
            
            foreach ($this->data['other_images'] as $key => $otherImage) {
                $name = time().'_'.$key.'.' . $otherImage->getClientOriginalExtension();
                $destinationPath = public_path('uploads/products/'.$folderName);
                $otherImage->move($destinationPath, $name);
                $fileName = 'uploads/products/'.$folderName.'/'.$name;
                $otherImagesArray[] = $fileName;
            }
            $oldOtherImages = json_decode($oldOtherImages, true);
            if(is_array($oldOtherImages)) {
                $otherImagesArray = array_merge($oldOtherImages, $otherImagesArray);
            }
            $data->other_images = json_encode($otherImagesArray);
        }

        $data->save();
        
        //--- Specification
        $optionKeys = array_keys($this->data);
        
        foreach ($optionKeys as $key => $value) {
            if(strpos($value, 'option_') === 0) {
                $attributeOption = $this->data[$value];

                ProductSpecification::updateOrCreate([
                    'product_id' => $data['id'],
                    'option_id' => explode('_',$attributeOption)[0],
                ],[
                    'product_id' => $data['id'],
                    'option_id' => explode('_',$attributeOption)[0],
                    'option_attribute_id' => explode('_',$attributeOption)[1]
                ]);
            }
        }
        
        
    }
}
