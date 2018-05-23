@extends ('layout') @section ('header')

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
                <!-- For desktop -->
                <input class="visible-xs autocomplete" type="text" placeholder="Search...">
                <!-- For mobile -->
                <div class="search__type">
                    <button class="btn btn-primary not-show">Search</button>
                </div>
            </form>
        </div>

        <div class="action-header__item action-header__views hidden-xs">
            <a href="/rentals/grid/{{ $sort }}/search?{{ $urlParameters }}" class="zmdi zmdi-apps"></a>
            <a href="/rentals/list/{{ $sort }}/search?{{ $urlParameters }}" class="zmdi zmdi-view-list"></a>
            <a href="/rentals/maps/{{ $sort }}/search?{{ $urlParameters }}" class="zmdi zmdi-map active"></a>
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
    <div class="row">
        <div class="col-sm-8 listings-list">
            <div id="map"></div>
        </div>
        <aside class="col-sm-4 hidden-xs">
            <div class="card subscribe mdc-bg-light-blue">
                <div class="subscribe__icon">
                    <i class="zmdi zmdi-email"></i>
                </div>

                <h2>Subscribe for Newsletters</h2>
                <small>Curabitur blandit tempus porttitor adipiscing maecenas faucibus mollis interdum</small>

                <form>
                    <div class="form-group form-group--light form-group--float">
                        <input type="text" class="form-control text-center" placeholder="Email Address">
                        <i class="form-group__bar"></i>
                    </div>

                    <button class="btn btn--circle">
                        <i class="zmdi zmdi-check mdc-text-light-blue"></i>
                    </button>
                </form>
            </div>
        </aside>
        @include('components.side-search');
    </div>
</div>
<script>
    function initMap() {

        $.ajax({
            type: "GET",
            url: 'http://aptsource.dotgital.com/rentals/api/1/search',
            data: {
                "location": "",
                "pagecount": 100,
                "picture": "Y",
            },
            success: function (data) {

                console.log(data);

                var listings = data;
                var map;
                var marker;

                var bounds = new google.maps.LatLngBounds();

                var mapOptions = {
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                //Display the map in the DOM
                map = new google.maps.Map(document.getElementById("map"), mapOptions);

                //close Info windows when click any part of the map
                google.maps.event.addListener(map, "click", function (event) {
                    infowindow.close();
                });


                var properties = [];
                var markers = [];
                var coordinatesArr = [];

                //loop over all properties
                for (i = 0; i < listings['Listings']['Listing'].length; i++) {
                    var listingId = listings['Listings']['Listing'][i]['ID'];
                    var streetNumber = listings['Listings']['Listing'][i]['StreetNumber'];
                    var streetName = listings['Listings']['Listing'][i]['StreetName'];
                    var unit = listings['Listings']['Listing'][i]['Unit'];
                    var city = listings['Listings']['Listing'][i]['City'];
                    var state = listings['Listings']['Listing'][i]['State'];
                    var zip = listings['Listings']['Listing'][i]['Zip'];
                    var title = listings['Listings']['Listing'][i]['Title'];
                    var beds = listings['Listings']['Listing'][i]['Beds'];
                    var baths = listings['Listings']['Listing'][i]['Baths'];
                    var picture = listings['Listings']['Listing'][i]['Photos'];
                    if (picture === undefined) {
                        picture = "https://placeholdit.imgix.net/~text?&w=400&h=266";
                    } else {
                        picture = listings['Listings']['Listing'][i]['Photos']['Photo']['0'];
                    }  

                    var lat = parseFloat(listings['Listings']['Listing'][i]['Latitude']);                    
                    var lng = parseFloat(listings['Listings']['Listing'][i]['Longitude']);

                    

                    
                    var addressInput = streetNumber + " " + streetName + " " + unit + " " + city + " " + state + " " + zip;
                    var price = listings['Listings']['Listing'][i]['Price'];

                    
                    var contentString = '<div class="infowindow">' +
                        '<div class="listings-grid__item">' +
                        '<a href="/rental/details/' + listingId + '">' +
                        '<div class="listings-grid__maps">' +
                        '<img src="' + picture + '" alt="">' +
                        '</div>' +

                        '<div class="listings-grid__body">' +
                        '<small>$' + price + '</small>' +
                        '<small>' + addressInput + '</small>' +
                        '</div>' +

                        '<ul class="listings-grid__attrs">' +
                        '<li><i class="listings-grid__icon listings-grid__icon--bed"></i> ' + beds + ' </li>' +
                        '<li><i class="listings-grid__icon listings-grid__icon--bath"></i> ' + baths + 'com</li>' +
                        '</ul>' +
                        '</a>' +
                        '</div>' +
                        '</div>';
                    
                    properties.push(contentString);

                    infowindow = new google.maps.InfoWindow();


                            var coordinates = {lat: lat,lng: lng};

                            bounds.extend(coordinates);
                            marker = new google.maps.Marker({
                                //map: map,
                                position: coordinates,
                            });
                            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                return function () {
                                    infowindow.setContent(properties[i]);
                                    infowindow.setOptions({maxWidth: 180});
                                    infowindow.open(map, marker);
                                }
                            })(marker, i));

                            console.log(coordinatesArr);
                            console.log(coordinates);
                            console.log(coordinatesArr.includes(coordinates));
                            
                            map.fitBounds(bounds);
                            markers.push(marker);
                            coordinatesArr.push(coordinates);


                }
                var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: '/images/m'});
            

            },
            error: function () {
                console.log('API request fail');
            },
        });

    }
</script>
    <script src="/js/markerclusterer.js">
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbHsbSThuJHEQpfVqp91y3CRS5KiXxS-4&callback=initMap">
</script>

@endsection