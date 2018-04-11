<div class="header__search container">
    <form id="index-search" action="/rentals/list/search" method="get">
    {{-- {{ csrf_field() }} --}}
        <div class="search">
            <div class="search__type dropdown">
                <a href="" data-toggle="dropdown">SEARCH</a>

                <div class="dropdown-menu not-show">
{{--                     <div>
                        <input type="radio" name="property-type" value="rent">
                        <span>Rent</span>
                    </div>
                       <div>
                        <input type="radio" name="property-type" value="buy">
                        <span>Buy</span>
                    </div>    --}}
                </div>
            </div>

            <div class="search__body">
                <input type="text" name="location" value="" class="form-control search__input autocomplete" placeholder="Enter any Neighorhood or Zip Code" data-rmd-action="advanced-search-open">

                <div class="search__advanced">
                    {{-- <div class="col-sm-6">
                        <div class="form-group form-group--float">
                            <input type="text" class="form-control" value="New York, NY">
                            <label>Location</label>
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Ownership Type</label>

                            <select class="select2">
                                <option value="">Single Family Home</option>
                                <option value="">Condo</option>
                                <option value="">Townhome</option>
                                <option value="">Apartment Community</option>
                                <option value="">Room</option>
                            </select>
                        </div>
                    </div> --}}

                    <div class="col-sm-6">
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
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-group--range">
                            <label>Area Size (sqft)</label>
                            <div class="input-slider-values clearfix">
                                <div class="pull-left" id="property-area-upper"></div>
                                <input id="min-size" name="min-size" type="hidden" value="0">
                                <div class="pull-right" id="property-area-lower"></div>
                                <input id="max-size" name="max-size" type="hidden" value="0">
                            </div>
                            <div id="property-area-range"></div>
                        </div>
                    </div>

                    <div class="col-sm-6">
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
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Bathrooms</label>
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn">
                                    <input type="checkbox" class="baths" value="1" id="bath1">1
                                </label>
                                <label class="btn">
                                    <input type="checkbox" class="baths" value="2" id="bath2">2
                                </label>
                                <label class="btn">
                                    <input type="checkbox" class="baths" value="3" id="bath3">3
                                </label>
                                <label class="btn">
                                    <input type="checkbox" class="baths" value="4" id="bath4">4
                                </label>
                                <label class="btn">
                                    <input type="checkbox" class="baths" value="5,6,7,8,9,10" id="bath5">4+
                                </label>

                                <input id="baths" name="baths" type="hidden" value="0">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 m-t-10">
                        <button class="btn btn-primary">Search</button>
                        <button class="btn btn-link" data-rmd-action="advanced-search-close">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>