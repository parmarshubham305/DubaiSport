<div class="col-md-3">
    <div id="filter-sidebar">
        <div class="filter_side_bar card border-0">
            <div class="card-header bg-primary border border-primary">
                <h4 class="mb-0 text-white fs-5">Filter</h4>
            </div>
            <div class="card-body border">
                <!-- <div class="accordion border-bottom py-2" id="accordion_for_sidebar_first">
                    <div class="accordion-item bg-transparent border-0">
                        <h2 class="accordion-header" id="headingOne">
                            <button aria-controls="categoriesgrp" aria-expanded="true"
                                class="accordion-button border-0 p-2 fw-semibold bg-transparent text-dark"
                                data-bs-target="#categoriesgrp" data-bs-toggle="collapse"
                                type="button">Categories Group</button>
                        </h2>
                        <div aria-labelledby="headingOne"
                            class="accordian-main-filter accordion-collapse collapse show"
                            data-bs-parent="#productlistgroup" id="categoriesgrp">
                            <div class="accordion-body p-0">
                                <ul class="list-unstyled">
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="cardio" checked>
                                            <label for="cardio"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Cardio
                                            </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="Strengh">
                                            <label for="Strengh"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">
                                                Strengh & Free Weights </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="Benches">
                                            <label for="Benches"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Benches
                                            </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="Flooring">
                                            <label for="Flooring"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Flooring
                                            </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="Accessories">
                                            <label for="Accessories"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Accessories
                                            </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Locker">
                                            <label for="Locker"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Locker
                                                & Benches </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sauna">
                                            <label for="sauna"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">sauna
                                                & stems </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="Outdoor">
                                            <label for="Outdoor"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Outdoor
                                                Fitness Equipments</label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Kids">
                                            <label for="Kids"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Kids
                                                Play </label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="multiple">
                                            <label for="multiple"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">multiple-courts</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
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
                                            <input class="form-check-input" type="checkbox" wire:model="selectedCategories" value="{{ $category['id'] }}" id="{{ $category['title'] }}">
                                            <label for="{{ $category['title'] }}"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">{{ $category['title'] }}</label>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($masterOptions as $masterOption)
                <div class="accordion border-bottom py-2" id="accordion_for_sidebar_second">
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
                <!-- <div class="accordion border-bottom py-2" id="accordion_for_sidebar_four">
                    <div class="accordion-item bg-transparent  border-0">
                        <h2 class="accordion-header" id="headingthree_Weight">
                            <button aria-controls="Weight" aria-expanded="false"
                                class="accordion-button p-2 fw-semibold collaps bg-transparent text-dark"
                                data-bs-target="#Weight" data-bs-toggle="collapse" type="button">User
                                Weight</button>
                        </h2>
                        <div aria-labelledby="headingthree_Weight"
                            class="accordian-main-filter accordion-collapse collapse show"
                            data-bs-parent="#productlistgroup" id="Weight">
                            <div class="accordion-body p-0">
                                <ul class="list-unstyled">
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="239">
                                            <label for="239"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">230
                                                - 239 Kg</label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="229">
                                            <label for="229"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">220
                                                - 229 Kg</label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="209">
                                            <label for="209"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">200
                                                - 209 Kg</label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="199">
                                            <label for="199"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">190
                                                - 199 Kg</label>
                                        </div>
                                    </li>

                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="189">
                                            <label for="189"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">180
                                                - 189 Kg</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion border-bottom py-2" id="accordion_for_sidebar_fiver">
                    <div class="accordion-item bg-transparent  border-0">
                        <h2 class="accordion-header" id="headingthree_Speed">
                            <button aria-controls="Speed" aria-expanded="false"
                                class="accordion-button p-2 fw-semibold collaps bg-transparent text-dark"
                                data-bs-target="#Speed" data-bs-toggle="collapse" type="button">Top
                                Speed</button>
                        </h2>
                        <div aria-labelledby="headingthree_Speed"
                            class="accordian-main-filter accordion-collapse collapse show"
                            data-bs-parent="#productlistgroup" id="Speed">
                            <div class="accordion-body p-0">
                                <ul class="list-unstyled">
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Below">
                                            <label for="Below"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Below
                                                10 Kph</label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Above">
                                            <label for="Above"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">Above
                                                20 Kph</label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="20">
                                            <label for="20"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">20
                                                Kph</label>
                                        </div>
                                    </li>
                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="16">
                                            <label for="16"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">16
                                                Kph</label>
                                        </div>
                                    </li>

                                    <li class="pt-2 ps-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="15">
                                            <label for="15"
                                                class="form-check-label ps-1 cursor-pointer categorie_label">10
                                                - 15 Kph</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="accordion position-relative" id="accordion_for_sidebar_five">
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
                </div>
            </div>
        </div>
    </div>
</div>
