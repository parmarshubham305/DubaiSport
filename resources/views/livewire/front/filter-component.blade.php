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
                <!-- <div class="accordion position-relative" id="accordion_for_sidebar_five">
                    <div class="accordion-item bg-transparent  border-0">
                        <h2 class="accordion-header" id="headingsix"><button aria-controls="Price"
                                aria-expanded="false"
                                class="accordion-button pt-3 pb-2 fw-semibold  collaps bg-transparent text-dark"
                                data-bs-target="#Price" data-bs-toggle="collapse"
                                type="button">Price</button>
                        </h2>
                        <div aria-labelledby="headingsix" class="accordion-collapse collapse show"
                            data-bs-parent="#productlistgroup" id="Price">
                            <div class="accordion-body p-0 my-2 px-2">
                                <div class="price-range-slider">
                                    <p class="range-value"><input id="filter_min_price"
                                            name="filter.price[]" readonly="readonly" type="hidden"
                                            value="1" disabled=""><input id="filter_max_price"
                                            name="filter.price[]" readonly="readonly" type="hidden"
                                            value="1000" disabled=""></p>
                                    <div class="d-flex justify-content-between mb-1"><span
                                            class="price-range-min value start-0">$1</span><span
                                            class="price-range-max value end-0">$1000</span></div>
                                    <div class="range-bar ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                        id="slider-range">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 0%; width: 100%;"></div><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;"></span><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 100%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
