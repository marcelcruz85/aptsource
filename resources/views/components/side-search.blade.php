        <!-- Advanced Listing Search -->
        <button class="btn btn--action btn--circle" data-rmd-action="block-open" data-rmd-target="#advanced-search">
            <i class="zmdi zmdi-search-for"></i>
        </button>

        <aside id="advanced-search" class="rmd-sidebar">
            <form class="card form-search">
                <div class="card__header">
                    <h2>Advanced Property Search</h2>

                     <!-- <div class="dropdown m-t-5">
                        <a data-toggle="dropdown" href="" class="text-muted">05 Saved Searches <i class="caret"></i></a>

                        <ul class="dropdown-menu">
                            <li><a href="">2012/05/01 - 1</a></li>
                            <li><a href="">2012/05/01 - 2</a></li>
                            <li><a href="">2012/06/12</a></li>
                            <li><a href="">2012/08/19</a></li>
                            <li><a href="">2012/08/20</a></li>
                        </ul>
                    </div>  -->
                </div>

                <div class="card__body m-t-20">
                    <div class="form-group form-group--float">
                    <input type="text" name="location" value="{{ $location }}" class="form-control search-location advance-search search__input autocomplete" placeholder="Enter any Neighorhood or Zip Code" data-rmd-action="advanced-search-open">

                        <i class="form-group__bar"></i>
                    </div>

                     <!-- <div class="form-group">
                        <label>Listing Type</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn active">
                                <input type="radio" name="advanced-search-beds" id="rent" checked>Rent
                            </label>
                            <label class="btn">
                                <input type="radio" name="advanced-search-beds" id="buy">Buy
                            </label>
                        </div>
                    </div>  -->

                    <!-- <div class="form-group">
                        <label>Ownership Type</label>

                        <select class="select2">
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                        </select>
                    </div> -->

                    <div class="form-group form-group--range">
                        <label>Price Range</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left">
                                <span>$</span>
                                <span id="property-price-upper"></span>
                                <input id="min-rent" name="min-rent" type="hidden" value="0">
                            </div>
                            <div class="pull-right">
                                <span>$</span>
                                <span id="property-price-lower"></span>
                                <input id="max-rent" name="max-rent" type="hidden" value="0">
                            </div>
                        </div>
                        <div id="property-price-range"></div>
                    </div>

                    <div class="form-group form-group--range">
                            <label>Avialable</label>
                            <div class="input-slider-values clearfix">
                                <div class="pull-left" id="available-date-upper"></div>
                                <input id="available-after" name="available-after" type="hidden" value="">
                                <div class="pull-right" id="available-date-lower"></div>
                                <input id="available-before" name="available-before" type="hidden" value="">
                            </div>
                            <div id="available-date-range"></div>
                    </div>
                    <!-- <div class="form-group form-group--range">
                        <label>Area Size (sqft)</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-area-upper"></div>
                            <input id="min-size" name="min-size" type="hidden" value="0">
                            <div class="pull-right" id="property-area-lower"></div>
                            <input id="max-size" name="max-size" type="hidden" value="0">
                        </div>
                        <div id="property-area-range-advance"></div>
                    </div> -->

                    <div class="form-group">
                        <label>Bedrooms</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" class="beds" value="1" id="bed1">1
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="2" id="bed2">2
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="3" id="bed3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="4" id="bed4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="5,6,7,8,9,10" id="bed5">4+
                            </label>

                            <input id="beds" name="beds" type="hidden" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Bathrooms</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" class="beds" value="1" id="bed1">1
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="2" id="bed2">2
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="3" id="bed3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="4" id="bed4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" class="beds" value="5,6,7,8,9,10" id="bed5">4+
                            </label>

                            <input id="beds" name="beds" type="hidden" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Parking</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage1">1
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage2">2
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage5">4+
                            </label>
                        </div>
                    </div>

                    <!-- <div class="form-group form-group--range">
                        <label>Area Size</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-area-upper"></div>
                            <input id="min-size" name="min-size" type="hidden" value="0">
                            <div class="pull-right" id="property-area-lower"></div>
                            <input id="max-size" name="max-size" type="hidden" value="0">
                        </div>
                        <div id="property-area-range"></div>
                    </div> -->
                </div>

                <div class="card__footer">
                    <button class="btn btn-sm btn-primary">Search</button>
                    <!-- <a href="" class="btn btn-sm btn-link" data-rmd-action="block-close" data-rmd-target="#advanced-search">Save</a> -->
                    <a href="" class="btn btn-sm btn-link" data-rmd-action="block-close" data-rmd-target="#advanced-search">Cancel</a>
                </div>
            </form>
        </aside>