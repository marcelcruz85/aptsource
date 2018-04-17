@extends ('layout') @section ('header')

<header id="header" class="header--minimal">
    @include ('components.top-header') @include ('components.main-header')
</header>

@endsection @section ('action-header')

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
            <a href="/rentals/grid/search?{{ $urlParameters }}" class="zmdi zmdi-apps"></a>
            <a href="/rentals/list/search?{{ $urlParameters }}" class="zmdi zmdi-view-list  active"></a>
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

@endsection @section ('content')
<div id="map"></div>
<div id="properties"></div>
<script>
    function initMap() {

        $.ajax({
            type: "GET",
            url: 'http://aptsource.dotgital.com/rentals/api/search',
            data: {
                "location": ""
            },
            success: function (data) {

                console.log(data);

                var listings = data;
                var map;
                var marker;


                function initialize() {

                    var mapOptions = {
                        center: new google.maps.LatLng(41.942463, -87.652900),
                        zoom: 11,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    map = new google.maps.Map(document.getElementById("map"), mapOptions);

                }

                google.maps.event.addDomListener(window, 'load', initialize);


                function searchAddress() {

                    var addressInput = '1025 Randolph St Unit 113 oak park, il 60302';

                    var geocoder = new google.maps.Geocoder();

                    geocoder.geocode({
                        address: addressInput
                    }, function (results, status) {

                        if (status == google.maps.GeocoderStatus.OK) {

                            var myResult = results[0].geometry.location;

                            createMarker(myResult);

                            map.setCenter(myResult);

                            map.setZoom(17);
                        }
                    });

                }

                var contentString = '<div id="content">' +
                    '<div id="siteNotice">' +
                    '</div>' +
                    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
                    '<div id="bodyContent">' +
                    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                    'sandstone rock formation in the southern part of the ' +
                    'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
                    'south west of the nearest large town, Alice Springs; 450&#160;km ' +
                    '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
                    'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
                    'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
                    'Aboriginal people of the area. It has many springs, waterholes, ' +
                    'rock caves and ancient paintings. Uluru is listed as a World ' +
                    'Heritage Site.</p>' +
                    '</div>' +
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                function createMarker(latlng) {


                    if (marker != undefined && marker != '') {
                        marker.setMap(null);
                        marker = '';
                    }

                    marker = new google.maps.Marker({
                        map: map,
                        position: latlng
                    });
                    marker.addListener('click', function () {
                                infowindow.open(map, marker);
                    });
                }



                for (i = 0; i < listings['Listings']['Listing'].length; i++) {
                    var lat = listings['Listings']['Listing'][i]['Latitude'];
                    var lng = listings['Listings']['Listing'][i]['Longitude'];


                }

            },
            error: function () {
                console.log('API request fail');
            },
        });

    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbHsbSThuJHEQpfVqp91y3CRS5KiXxS-4&callback=initMap">
</script>

@endsection