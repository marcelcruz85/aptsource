@extends ('layout') 

@section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') 
    @include ('components.main-header')
</header>

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
                                <li class="rmd-contact-list__title"><i class="zmdi zmdi-home"></i>Apartment Source Chicago</li>
                                <li><i class="zmdi zmdi-pin"></i>2638 N. Halsted Street Chicago, <br>IL 60614</li>
                                <li><i class="zmdi zmdi-phone"></i>773-404-9900</li>
                                <li><i class="zmdi zmdi-email"></i>info@apartmentsourcechicago.com</li>
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
                        <form class="contact__form" action="email">
                            <div class="form-group form-group--light form-group--float">
                                <input type="text" name="name" class="form-control">
                                <label>Name</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--light form-group--float">
                                <input type="text" name="email" class="form-control">
                                <label>Email Address</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--light form-group--float">
                                <input type="text" name="phone" class="form-control">
                                <label>Contact Number</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--light form-group--float">
                                <textarea name="text" class="form-control textarea-autoheight"></textarea>
                                <label>Message</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <small class="mdc-text-white-darker">By sending us your information, you agree to Apartment Source Terms of Use & Privacy Policy.</small>

                            <div class="m-t-30">
                                <button type="submit" class="btn brn-sm btn-default btn-static">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function initMap() {
                  var uluru = {lat: 41.930246, lng: -87.649115};
                  var map = new google.maps.Map(document.getElementById('listing-map'), {
                    zoom: 15,
                    center: uluru
                  });
                  var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                  });
                }
              </script>
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbHsbSThuJHEQpfVqp91y3CRS5KiXxS-4&callback=initMap">
        </script>
@endsection