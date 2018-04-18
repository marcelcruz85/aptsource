@extends ('layout')

@section ('head-scripts')

  <!-- ... -->
  <script type="text/javascript" src="/vendors/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

@endsection

@section ('header')

<header id="header" class="header--minimal__index">
        @include ('components.top-header') 
        @include ('components.main-header') 
        @include ('components.search-header') 
</header>

@endsection

@section ('content')
<div class="container">
        <header class="section__title">
            <h2>Our Featured Exclusives</h2>
            <small>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</small>
        </header>

        <div class="row listings-grid">
            
                
            @foreach ($listings as $listing)
            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                        <a href="/rental/details/{{ $listing['ID'] }}">
                        <div class="listings-grid__main grid">
                            @if (is_array($listing) and array_key_exists('Photos', $listing) )
                                <img src="{{ $listing['Photos']['Photo']['0']}}" alt=""> 
                            @else
                                <img src="/img/nophoto.png" alt=""> 
                            @endif

                            <div class="listings-grid__price">{{ $listing['Price'] }}</div>
                        </div>

                        <div class="listings-grid__body">
                                <small>{{ $listing['StreetNumber'] }} {{ $listing['StreetName'] }} {{ $listing['City'] }}, {{ $listing['State'] }} {{ $listing['Zip'] }}</small>
                                @if (is_array($listing) and array_key_exists('Title', $listing) )
                                    <h5>{{ $listing['Title'] }}</h5>
                                @else
                                    <h5>Click for details</h5>
                                @endif
                                <small>Available: <i class="zmdi zmdi-calendar-check"></i> <span class="availableDate">{{ $listing['AvailableDate'] }}</span></small>    
                        </div>

                        <ul class="listings-grid__attrs">
                                <li class="number"><i class="listings-grid__icon listings-grid__icon--bed"></i> {{ $listing['Beds'] }}</li>
                                <li class="number"><i class="listings-grid__icon listings-grid__icon--bath"></i> {{ $listing['Baths'] }}</li>
                                <!-- <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 00</li> -->
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
{{--                         <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section submit-ticker"> 
<p>Are you looking to sell your valuable property or rent out? Roost is your destination!</p>

<a href="/submit">Submit your property</a>
</section>


<section class="section info-box">
<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-trending-up info-box__icon"></i>
    
                    <h3>Sed posuere consectetur</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-search info-box__icon"></i>
    
                    <h3>Donec ullamcorper nulla</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-globe info-box__icon"></i>
    
                    <h3>Integer posuere erat</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-flower info-box__icon"></i>
    
                    <h3>Nulla vitae elit</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-pin info-box__icon"></i>
    
                    <h3>Libero pharetra augue</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-sun info-box__icon"></i>
    
                    <h3>Aenean lacinia bibendum</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection