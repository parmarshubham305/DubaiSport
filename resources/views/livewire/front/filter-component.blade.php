<div class="col-md-3">
    <div id="filter-sidebar">
        <div class="filter_side_bar card border-0">
            <div class="card-header bg-primary border border-primary">
                <h4 class="mb-0 text-white fs-5">Filter</h4>
            </div>
            <div class="card-body border">
                <!-- Product List Container -->
                <div class="accordion border-bottom py-2" id="accordion_for_sidebar_second">
                    <div class="accordion-item bg-transparent border-0">
                        <h2 class="accordion-header" id="headingTwo">
                            <button aria-controls="Category_accordion" aria-expanded="false"
                                class="accordion-button p-2 fw-semibold collaps bg-transparent text-dark"
                                data-bs-target="#Category_accordion" data-bs-toggle="collapse"
                                type="button">{{ \Str::upper('Categories') }}</button>
                        </h2>
                        <div aria-labelledby="headingTwo" class="accordion-collapse collapse show"
                            data-bs-parent="#Categorylistgroup" id="Category_accordion">
                            <div class="accordion-body p-0">
                                <ul class="list-unstyled">
                                    @foreach($categories as $category)
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model="selectedCategories" value="{{ $category['id'] }}">
                                            <label class="form-check-label ps-1 cursor-pointer categorie_label">{{ $category['title'] }}</label>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($masterOptions as $key => $masterOption)
                <div class="accordion @if(array_key_last($masterOptions) != $key) border-bottom @endif py-2" id="accordion_for_sidebar_second">
                    <div class="accordion-item bg-transparent border-0">
                        <h2 class="accordion-header" id="{{ $masterOption['id'] }}_{{ \Str::snake($masterOption['name']) }}">
                            <button aria-controls="{{ $masterOption['id'] }}_{{ \Str::snake($masterOption['name']) }}_accordion" aria-expanded="false"
                                class="accordion-button p-2 fw-semibold collaps bg-transparent text-dark"
                                data-bs-target="#{{ $masterOption['id'] }}_{{ \Str::snake($masterOption['name']) }}_accordion" data-bs-toggle="collapse"
                                type="button">{{ \Str::upper($masterOption['name']) }}</button>
                        </h2>
                        <div aria-labelledby="{{ $masterOption['id'] }}_{{ \Str::snake($masterOption['name']) }}" class="accordion-collapse collapse show"
                            data-bs-parent="#Categorylistgroup" id="{{ $masterOption['id'] }}_{{ \Str::snake($masterOption['name']) }}_accordion">
                            <div class="accordion-body p-0">
                                <ul class="list-unstyled">
                                    @foreach($masterOption['attribute_values'] as $attribute_value)
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model="selectedOptions.{{ $masterOption['id'] }}" value="{{ $attribute_value['id'] }}" id="{{ $attribute_value['value'] }}">
                                            <label for="{{ $attribute_value['value'] }}"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">{{ $attribute_value['value'] }}</label>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="accordion position-relative" id="accordion_for_sidebar_five">
                    <div class="accordion-item bg-transparent  border-0">
                        <h2 class="accordion-header" id="headingsix"><button aria-controls="Price"
                                aria-expanded="false"
                                class="accordion-button px-2 pt-3 pb-2 fw-semibold  collaps bg-transparent text-dark"
                                data-bs-target="#Price" data-bs-toggle="collapse"
                                type="button">Price</button>
                        </h2>
                        <div aria-labelledby="headingsix" class="accordion-collapse collapse show"
                            data-bs-parent="#productlistgroup" id="Price">
                            <div class="accordion-body p-0 my-2 px-2">
                                <div class="price-input">
                                    <div class="field">
                                        <span>Min</span>
                                        <input type="number" class="input-min" wire:model="minPrice">
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                        <span>Max</span>
                                        <input type="number" class="input-max" wire:model="maxPrice">
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" wire:change="priceChange" min="0" max="50000" wire:model="minPrice" step="100">
                                    <input type="range" class="range-max" wire:change="priceChange" min="0" max="50000" wire:model="maxPrice" step="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
