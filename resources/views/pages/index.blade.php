@extends ('layout')

@section ('search')
<div class="header__search container">
    <form>
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
                <input type="text" class="form-control search__input" placeholder="Enter any Neighorhood, Feature, Zip Code" data-rmd-action="advanced-search-open">

                <div class="search__advanced">
                    <div class="col-sm-6">
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
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-group--range">
                            <label>Price Range</label>
                            <div class="input-slider-values clearfix">
                                <div class="pull-left">
                                    <span>$</span>
                                    <span id="property-price-upper"></span>
                                </div>
                                <div class="pull-right">
                                    <span>$</span>
                                    <span id="property-price-lower"></span>
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
                                <div class="pull-right" id="property-area-lower"></div>
                            </div>
                            <div id="property-area-range"></div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Bedrooms</label>
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-beds" id="bed1">1
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-beds" id="bed2">2
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-beds" id="bed3">3
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-beds" id="bed4">4
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-beds" id="bed5">4+
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Bathrooms</label>
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-baths" id="bath1">1
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-baths" id="bath2">2
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-baths" id="bath3">3
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-baths" id="bath4">4
                                </label>
                                <label class="btn">
                                    <input type="checkbox" name="advanced-search-baths" id="bath5">4+
                                </label>
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
@endsection

@section ('content')
<div class="container">
        <header class="section__title">
            <h2>Our Featured Exclusives</h2>
            <small>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</small>
        </header>

        <div class="row listings-grid">
            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,175,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>21 Shop St, San Francisco</small>
                            <h5>Integer tempor luctus maximus</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,200,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Beverly Hills, CA 90210</small>
                            <h5>Duis sollicitudin ante bibendum</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$910,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>132 04th St, San Francisco</small>
                            <h5>Fusce quis libero nonorcious</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$2,542,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>132 Lockslee, San Francisco</small>
                            <h5>Pellentesque habitant</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$823,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>San Francisco, CA 900212 </small>
                            <h5>Maecenas sed purus lorem aliquet cursus</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,120,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>21120 Broadway St, San Fransisco</small>
                            <h5>Maecenas sed purus at lorem</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$3,000,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>San Francisco, CA 937202</small>
                            <h5>Nullam finibus libero at hendrerit</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xol-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,175,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>4313 Beverly Hills, CA 90210</small>
                            <h5>1358 Ligula Street, Unit 12</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection