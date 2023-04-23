<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Title <span class="text-danger">*</span></label>
		<div class="col-sm-8">
			{{ Form::text('title', old('title'), ['class' => 'form-control', 'required' ]) }}
		<span class='text-danger'>{{ $errors->first('title') }}</span>
		</div>
	</div>
</div>
<livewire:category-option-attribute :categoryId="isset($data) ? $data['category_id'] : false"/>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Main Image <span class="text-danger">*</span></label>
		<div class="col-sm-2">
			{{ Form::file('main_image', ['class' => '' ]) }}
			<span class='text-danger'>{{ $errors->first('main_image') }}</span>
		</div>
		@if(isset($data) && $data['main_image'])
			<div class="image-area">
				<img src="{{ $data['main_image'] }}" height="100" width="100" alt="Preview">
				<!-- <a onclick="removeProfile({{ $data['image'] }})" class="remove-image" href="#" style="display: inline;">&#215;</a> -->
			</div>
		@endif
	</div>
</div>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Other Images</label>
		<div class="col-sm-8">
			{{ Form::file('other_images[]', ['class' => '', 'multiple' => true ]) }}
			<span class='text-danger'>{{ $errors->first('other_images') }}</span>
			<!-- @if(isset($data) && $data['image'])
				<div class="image-area">
					<img src="{{ $data['image'] }}" height="100" width="100" alt="Preview">
					<a onclick="removeProfile({{ $data['image'] }})" class="remove-image" href="#" style="display: inline;">&#215;</a>
				</div>
			@endif -->
		</div>
	</div>
</div>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Price <span class="text-danger">*</span></label>
		<div class="col-sm-8">
			{{ Form::number('price', old('price'), ['class' => 'form-control', 'required' ]) }}
		<span class='text-danger'>{{ $errors->first('price') }}</span>
		</div>
	</div>
</div>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Discount Price <span class="text-danger">*</span></label>
		<div class="col-sm-8">
			{{ Form::number('discounted_price', old('discounted_price'), ['class' => 'form-control', 'required' ]) }}
		<span class='text-danger'>{{ $errors->first('discounted_price') }}</span>
		</div>
	</div>
</div>
<div class="box-body pad">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Product Details</label>
		<div class="col-sm-8">
			{{ Form::textarea('details', old('details'), ['class' => 'form-control', 'id' => 'product_details', 'required' ]) }}
		<span class='text-danger'>{{ $errors->first('details') }}</span>
		</div>
	</div>
</div>
<div class="box-body pad">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Description <span class="text-danger">*</span></label>
		<div class="col-sm-8">
			{{ Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'product_description', ]) }}
		<span class='text-danger'>{{ $errors->first('description') }}</span>
		</div>
	</div>
</div>
<div class="box-body pad">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Other Details</label>
		<div class="col-sm-8">
			{{ Form::textarea('description_2', old('description_2'), ['class' => 'form-control', 'id' => 'product_other_details', ]) }}
		<span class='text-danger'>{{ $errors->first('description_2') }}</span>
		</div>
	</div>
</div>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Status</label>
		<div class="col-sm-8" style="padding-top: 10px;">
		{{ Form::checkbox('status', old('status')) }}
		<span class='text-danger'>{{ $errors->first('sort') }}</span>
		</div>
	</div>
</div>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Best Seller</label>
		<div class="col-sm-8" style="padding-top: 10px;">
		{{ Form::checkbox('best_seller', old('best_seller')) }}
		<span class='text-danger'>{{ $errors->first('best_seller') }}</span>
		</div>
	</div>
</div>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Popular Product</label>
		<div class="col-sm-8" style="padding-top: 10px;">
		{{ Form::checkbox('popular_product', old('popular_product')) }}
		<span class='text-danger'>{{ $errors->first('popular_product') }}</span>
		</div>
	</div>
</div>
<div class="box-body">
	<div class="form-group">
		<label for="" class="col-sm-2 control-label">Sort</label>
		<div class="col-sm-2">
			{{ Form::number('sort', old('sort'), ['class' => 'form-control' ]) }}
		<span class='text-danger'>{{ $errors->first('sort') }}</span>
		</div>
	</div>
</div>
<div class="box-body">
</div>
<div class="box-footer text-center">
	<a type="button" href="{{ route('admin.categories.index') }}" class="btn btn-flat btn-default">Cancel</a>
	<button type="submit" class="btn btn-flat btn-primary">Save</button>
</div>

