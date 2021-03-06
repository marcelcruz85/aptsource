@extends ('layout')

@section ('head-scripts')

  <!-- ... -->
  <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/vendors/bower_components/moment/min/moment.min.js"></script>
@endsection

@section ('header')

<header id="header" class="header--minimal__index">
        @include ('components.top-header') 
        @include ('components.main-header-front') 
        @include ('components.search-header') 
</header>

@endsection

@section ('content')
<div class="container">
        <header class="section__title">
            <h2>Discover Over 10,000 apartments for rent</h2>
            {{-- <small>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</small> --}}
        </header>

        <div class="row listings-grid">
            
                
            @foreach ($listings as $listing)
            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                        <a href="/rental/details/{{ $listing['ID'] }}">
                        <div class="listings-grid__main grid">
                            @if (is_array($listing) and array_key_exists('Photos', $listing) )
                                
                                @if (is_array($listing['Photos']['Photo']))
                                        <img src="{{ $listing['Photos']['Photo']['0']}}" alt=""> 
                                    @else                                    
                                        <img src="{{ $listing['Photos']['Photo']}}" alt=""> 
                                    @endif
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
                                <small>Available: <i class="zmdi zmdi-calendar-check"></i> <span class="availableDate">{{ $listing['AvailableDate']  ?? "" }}</span></small>    
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
<p>Are you looking to rent out your property? Apartment Source is your destination!</p>

<a href="/submit">List your property</a>
</section>



{{-- <section class="section info-box">
<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-trending-up info-box__icon"></i>
    
                    <h3>New Units Daily</h3>
                    <p>We are constantly uptading our listing, We have new properties every day, come and check frequently or subscribe to get information about new properties.</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-search info-box__icon"></i>
    
                    <h3>Easy to find your new place</h3>
                    <p>With apartment source is easy to find your new place, our website have all you need from new properties to less expensive places.</p>
                </div>
            </div>
    
            <div class="col-sm-4">
                <div class="info-box__item">
                    <i class="zmdi zmdi-globe info-box__icon"></i>
    
                    <h3>Professional</h3>
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
</section>--}}

<script>
$(document).ready(function() {
    $(document).scrollTop(0);
    docWidth = $( document ).width();
});
$(function(){
  $('#header_nav').data('size','big');
});

$(window).scroll(function(){

  if($(document).scrollTop() > 0 && docWidth > 978)
{
    if($('#header_nav').data('size') == 'big')
    {
        $('#header_nav').data('size','small');
        $('#header_nav').stop().animate({
            height:'100px',
            top: '0px',
            backgroundColor: '#fff'
        },200);
        $('.logo-front .img-animate').stop().animate({
            width: '150px',
            marginTop: '-20px',
            marginLeft: '110px'
        },200);
    }
}
else
  {
    if($('#header_nav').data('size') == 'small')
      {
        $('#header_nav').data('size','big');
        $('#header_nav').stop().animate({
            height:'100px',
            top: '35px',
            backgroundColor: 'transparent'
        },200);

        $('.logo-front .img-animate').stop().animate({
            width: '320px',
            marginTop: '60px',
            marginLeft: '10px'
        },200);
      }  
  }
});
</script>
@endsection