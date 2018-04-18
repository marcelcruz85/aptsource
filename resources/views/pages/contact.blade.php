@extends ('layout') 

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') 
    @include ('components.main-header')
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
                <h2>Duis mollisest non commodo luctus nisierat porttito</h2>
                <small>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit liberopharetra augueullamcorper nulla non metus auctor fringillaet magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>
            </header>

            <div class="contact">
                <div class="contact__map">
                    <div id="listing-map"></div>
                </div>

                <div class="contact__inner clearfix">
                    <div class="col-sm-6">
                        <div class="contact__info">
                            <ul class="rmd-contact-list">
                                <li class="rmd-contact-list__title"><i class="zmdi zmdi-home"></i>New York Office</li>
                                <li><i class="zmdi zmdi-pin"></i>5470 Madison Street Severna Park, <br>MD 21146</li>
                                <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                                <li><i class="zmdi zmdi-email"></i>new-york@Roost.estate</li>
                            </ul>

                            <ul class="rmd-contact-list">
                                <li class="rmd-contact-list__title"><i class="zmdi zmdi-home"></i>San Jose Office</li>
                                <li><i class="zmdi zmdi-pin"></i>7094 Leeton Ridge Mountain View, <br>CA 94043</li>
                                <li><i class="zmdi zmdi-phone"></i>702-210-6015</li>
                                <li><i class="zmdi zmdi-email"></i>san-jose@Roost.estate</li>
                            </ul>

                            <div class="contact__social">
                                <a href="" class="zmdi zmdi-facebook mdc-bg-indigo-300"></a>
                                <a href="" class="zmdi zmdi-twitter mdc-bg-cyan-300"></a>
                                <a href="" class="zmdi zmdi-google mdc-bg-red-300"></a>
                                <a href="" class="zmdi zmdi-instagram mdc-bg-blue-grey-400"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <form class="contact__form">
                            <div class="form-group form-group--light form-group--float">
                                <input type="text" class="form-control">
                                <label>Name</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--light form-group--float">
                                <input type="text" class="form-control">
                                <label>Email Address</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--light form-group--float">
                                <input type="text" class="form-control">
                                <label>Contact Number</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--light form-group--float">
                                <textarea class="form-control textarea-autoheight"></textarea>
                                <label>Message</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <small class="mdc-text-white-darker">By sending us your information, you agree to Roost’s Terms of Use & Privacy Policy.</small>

                            <div class="m-t-30">
                                <button type="submit" class="btn brn-sm btn-default btn-static">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection