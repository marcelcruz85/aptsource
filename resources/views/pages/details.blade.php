@extends ('layout')

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') 
    @include ('components.main-header')
</header>

@endsection 

@section ('content')
<section class="section">
        <div class="container">
            <header class="section__title section__title-alt">
                <h2>Duis mollisest non commodo luctus nisierat porttito</h2>
                <small>The Villa, Murano Hill, Manhattan, NY, 90082</small>

                <div class="actions actions--section">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>


                    
                    <a href="" data-rmd-action="print"><i class="zmdi zmdi-print"></i></a>
                    <div class="dropdown actions__email">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>

                        <div class="dropdown-menu stop-propagate">
                            <form>
                                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>

                                <div class="clearfix"></div>

                                <div class="form-group form-group--float m-t-10">
                                    <input type="text" class="form-control">
                                    <label>Recipient Email Address</label>
                                    <i class="form-group__bar"></i>
                                </div>
                                <div class="form-group form-group--float">
                                    <textarea class="form-control textarea-autoheight">I came across this listing from Roost and thought of sharing with you.</textarea>
                                    <label>Message (optional)</label>
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="clearfix"></div>

                                <div class="m-t-15">
                                    <button class="btn btn-primary">Send</button>
                                    <a href="email/listing-mail.html" target="_blank" class="btn btn-link">View Email</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-share"></i></a>

                        <div class="dropdown-menu pull-right rmd-share">
                            <div></div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="detail-media">
                            <div class="tab-content">
                                <div class="tab-pane fade in active light-gallery" id="detail-media-images">
                                    <a href="img/demo/listing/16.jpg">
                                        <img src="https://placeholdit.imgix.net/~text?&w=960&h=600" alt="">
                                    </a>
                                    <a href="img/demo/listing/1.jpg">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    </a>
                                    <a href="img/demo/listing/2.jpg">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    </a>
                                    <a href="img/demo/listing/3.jpg">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    </a>
                                    <a href="img/demo/listing/4.jpg">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    </a>
                                </div>
                                <div class="tab-pane fade light-gallery" id="detail-media-floorplan">
                                    <a href="img/demo/floor-plan.png">
                                        <img src="https://placeholdit.imgix.net/~text?&w=1000&h=464" alt="">
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="detail-media-map">
                                    <div id="listing-map"></div>
                                </div>
                            </div>

                            <ul class="detail-media__nav hidden-print">
                                <li class="active"><a href="#detail-media-images" data-toggle="tab"><i class="zmdi zmdi-collection-image"></i></a></li>
                                <li><a href="#detail-media-floorplan" data-toggle="tab"><i class="zmdi zmdi-view-dashboard"></i></a></li>
                                <li><a href="#detail-media-map" data-toggle="tab"><i class="zmdi zmdi-map"></i></a></li>
                            </ul>
                        </div>

                        <div class="detail-info">
                            <div class="detail-info__header clearfix">
                                <strong>$1,175,000</strong>
                                <small>Est. Mortgage: $5,328/month</small>

                                <span>For Sale</span>
                            </div>

                            <ul class="detail-info__list clearfix">
                                <li>
                                    <span>Ownership Type</span>
                                    <span>Villa</span>
                                </li>
                                <li>
                                    <span>Property Area</span>
                                    <span>2435+ sqft</span>
                                </li>
                                <li>
                                    <span>Garages</span>
                                    <span>04</span>
                                </li>
                                <li>
                                    <span>Floors</span>
                                    <span>03</span>
                                </li>
                                <li>
                                    <span>Bedrooms</span>
                                    <span>06</span>
                                </li>
                                <li>
                                    <span>Bathrooms</span>
                                    <span>06</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card detail-amenities">
                        <div class="card__header">
                            <h2>Amenities</h2>
                            <small>Maecenas seddiam eget risus varius blandit sitamet nonmagna</small>
                        </div>

                        <div class="card__body">
                            <ul class="detail-amenities__list">
                                <li class="mdc-bg-red-300">Full-Time Doorman</li>
                                <li class="mdc-bg-purple-300">River Views</li>
                                <li class="mdc-bg-pink-300">Common Roof Deck</li>
                                <li class="mdc-bg-light-blue-500">City Views</li>
                                <li class="mdc-bg-amber-400">Gym</li>
                                <li class="mdc-bg-teal-400">Sauna</li>
                                <li class="mdc-bg-light-green-500">Open Views</li>
                                <li class="mdc-bg-brown-400">Basketball Court</li>
                                <li class="mdc-bg-blue-grey-400">Pool</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__header">
                            <h2>Property Overview</h2>
                        </div>
                        <div class="card__body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                            <p>Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                    </div>
                </div>

                <div id="inquire" class="col-md-4 rmd-sidebar-mobile">
                    <form class="card hidden-print">
                        <div class="card__header">
                            <h2>Inquire this Proeprty</h2>
                            <small>Call us now or send us your information</small>
                        </div>

                        <div class="card__body">
                            <div class="inquire__number">
                                <i class="zmdi zmdi-phone"></i>
                                +1-541-754-3010
                            </div>

                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <label>Name</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <label>Email Address</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <label>Contact Number</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <textarea class="form-control textarea-autoheight">Hi there, I am interested in 35 West 33rd Street, Unit 14B</textarea>
                                <label>Message</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <small class="text-muted">By sending us your information, you agree to Roost’s Terms of Use & Privacy Policy.</small>
                        </div>

                        <div class="card__footer">
                            <button type="submit" class="btn btn-primary">Request Information</button>
                            <button class="btn btn-link hidden-lg hidden-md" data-rmd-action="block-close" data-rmd-target="#inquire">Cancel</button>
                        </div>
                    </form>

                    <div class="card hidden-xs hidden-sm hidden-print">
                        <div class="card__header">
                            <h2>Agents representing</h2>
                            <small>Etiam porta sem malesuada magna mollis</small>
                        </div>
                        <div class="list-group">
                            <a class="list-group-item media" href="">
                                <div class="pull-left">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Sarah Zelermyer Diaz</strong>
                                    <small class="list-group__text">+1-202-555-0121</small>
                                    <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                </div>
                            </a>

                            <a class="list-group-item media" href="">
                                <div class="pull-left">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Malinda Hollaway</strong>
                                    <small class="list-group__text">+1-202-555-0188</small>
                                    <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                </div>
                            </a>

                            <div class="p-10"></div>
                        </div>
                    </div>

                    <div class="card hidden-xs hidden-sm hidden-print">
                        <div class="card__header">
                            <h2>You may also like...</h2>
                            <small>Morbi risus porta consectetur vestibulum ateros</small>
                        </div>

                        <div class="list-group">
                            
                            @foreach ($nearby as $listing)
                            <a href="/rental/details/{{ $listing['ID'] }}" class="list-group-item media">
                                <div class="pull-left">
                                    @if (is_array($listing) and array_key_exists('Photos', $listing) )
                                        <img src="{{ $listing['Photos']['Photo']['0']}}"  alt="" class="list-group__img" width="65"> 
                                    @else
                                        <img src="/img/nophoto.png"  alt="" class="list-group__img" width="65"> 
                                    @endif                                </div>
                                <div class="media-body list-group__text">
                                    <strong>{{ $listing['StreetNumber'] }} {{ $listing['StreetName'] }} {{ $listing['City'] }}</strong>
                                    <div class="listings-grid__item">
                                        
                                        <ul class="listings-grid__attrs">       
                                            <li class="number"><i class="zmdi zmdi-money"></i>{{ $listing['Price'] }}</li>                         
                                            <li class="number"><i class="listings-grid__icon listings-grid__icon--bed"></i> {{ $listing['Beds'] }}</li>
                                            <li class="number"><i class="listings-grid__icon listings-grid__icon--bath"></i> {{ $listing['Baths'] }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                            @endforeach

                            <div class="p-10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection

    @section('script')
    
    <!-- Jquery Light Gallery -->    
    <script src="/vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>
    
    <!-- Jquery Autosize -->
    <script src="/vendors/bower_components/autosize/dist/autosize.min.js"></script>

    <!-- rateYo - Ratings -->
    <script src="/vendors/bower_components/rateYo/src/jquery.rateyo.js"></script>

    <!-- jsSocials - Social link sharing -->
    <script src="/vendors/bower_components/jssocials/dist/jssocials.min.js"></script>

    @endsection