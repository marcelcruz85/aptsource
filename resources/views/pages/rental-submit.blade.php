@extends ('layout')

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') @include ('components.main-header')
</header>

@endsection 

@section ('action-header')

<div class="action-header">
        <div class="container">
            <div class="action-header__item action-header__item--search">
                <form>
                    <input class="hidden-xs top-search autocomplete" type="text" name="location" value="{{ $location }}" placeholder="Search by neighborhood, city, zip or address...">
                    <input class="visible-xs autocomplete" type="text" placeholder="Search..."><!-- For mobile -->
                    
                    <div class="search__type hidden-xs ">
                        <button class="btn btn-primary not-show">Search</button>
                    </div>
                </form>
            </div>

            <div class="action-header__item action-header__views hidden-xs">
            <a href="/rentals/grid/search?{{ $urlParameters }}" class="zmdi zmdi-apps active"></a>
            <a href="/rentals/list/search?{{ $urlParameters }}" class="zmdi zmdi-view-list"></a>
            </div>

            <div class="action-header__item action-header__item--sort hidden-xs">
                <span class="action-header__small">Sort by :</span>

                <select class="select2">
                <option></option>
                <option value="updateDate-desc">Last Updated</option>
                <option value="rent-desc">Price hight to low</option>
                <option value="rent-asc">Price low to high</option>
                <option value="beds-asc">Beds Asc</option>
                <option value="beds-desc">Beds Desc</option>
                <option value="baths-asc">Baths Asc</option>
                <option value="baths-desc">Baths Desc</option>
                </select>
            </div>
        </div>
    </div>


@endsection
@section ('content')

<div class="container">
        <header class="section__title">
            <h2>Submit your property</h2>
            <small>Praesent commodo cursus magnavel sceleris quenisl consecte turet</small>
        </header>

        <div class="submit-property">
            <ul class="submit-property__steps">
                <li class="active"><a href="#submit-property-1"  data-toggle="tab">1</a></li>
                <li><a href="#submit-property-2" data-toggle="tab">2</a></li>
                <li><a href="#submit-property-3" data-toggle="tab">3</a></li>
                <li><a href="#submit-property-4" data-toggle="tab">4</a></li>
                <li><a href="#submit-property-5" data-toggle="tab">5</a></li>

                <li class="submit-property__caret"></li>
            </ul>

            <div class="tab-content submit-property__content">
                <div class="tab-pane fade in active" id="submit-property-1">
                    <div class="card">
                        <div class="card__header">
                            <h2>Property Location</h2>
                            <small>Aenean lacinia bibendum nulla sed consectetur</small>
                        </div>

                        <form class="card__body">
                            <div class="form-group form-group--float m-b-5">
                                <input type="text" class="form-control">
                                <i class="form-group__bar"></i>
                                <label>Address</label>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <i class="input-helper"></i>
                                        Hide Street number on listing
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group--float m-b-5">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Unit/Floor/Block</label>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <i class="input-helper"></i>
                                        Hide U/Floor/Block on listing
                                    </label>
                                </div>
                            </div>

                            <a href="#submit-property-2" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-2">
                    <div class="card">
                        <div class="card__header">
                            <h2>Contact Information</h2>
                            <small>Curabitur blandit tempus porttitor ligula malesuada</small>
                        </div>

                        <form class="card__body">
                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Full Name</label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Organization Name (Opt.)</label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center m-b-5">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Email Address</label>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <i class="input-helper"></i>
                                        Hide Email Address on listing
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Contact Number</label>
                            </div>

                            <a href="#submit-property-3" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-3">
                    <div class="card">
                        <div class="card__header">
                            <h2>Sale Information</h2>
                            <small>Nullam iddolor dnibh ultricies vehicula utielit</small>
                        </div>

                        <form class="card__body">
                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Askin Price</label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Maintenance amount per month</label>
                            </div>

                            <div class="form-group">
                                <label>Owner Information</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="advanced-search-beds" checked>Agent
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="advanced-search-beds">Owner
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="advanced-search-beds">Other
                                    </label>
                                </div>
                            </div>

                            <a href="#submit-property-4" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-4">
                    <div class="card">
                        <div class="card__header">
                            <h2>Property Information</h2>
                            <small>Sed posuere consectetur estat lobortis ultricies</small>
                        </div>

                        <form class="card__body">
                            <div class="form-group">
                                <label>Property Type</label>

                                <select class="select2">
                                    <option value="">Single Family Home</option>
                                    <option value="">Condo</option>
                                    <option value="">Townhome</option>
                                    <option value="">Apartment Community</option>
                                    <option value="">Room</option>
                                </select>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Property title</label>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <textarea class="form-control text-center textarea-autoheight"></textarea>
                                <i class="form-group__bar"></i>
                                <label>Description</label>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Square Feet</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Lot Size</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group--float form-group--float-center">
                                <input type="text" class="form-control text-center">
                                <i class="form-group__bar"></i>
                                <label>Year Built</label>
                            </div>

                            <div class="form-group">
                                <label>Bedrooms</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">1
                                    </label>
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds" checked>2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Bathrooms</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">1
                                    </label>
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds" checked>2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>No. of Floors</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">1
                                    </label>
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds" checked>2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">4+
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Parking Space</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">1
                                    </label>
                                    <label class="btn active">
                                        <input type="radio" name="inner-search-beds" checked>2
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="inner-search-beds">3+
                                    </label>
                                </div>
                            </div>

                            <a href="#submit-property-5" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="submit-property-5">
                    <div class="card">
                        <div class="submit-property__success">
                            <i class="zmdi zmdi-check"></i>

                            <h2>Successful!</h2>
                            <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection