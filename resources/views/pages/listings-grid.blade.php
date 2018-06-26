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
            <a href="/rentals/grid/{{ $sort }}/search?{{ $urlParameters }}" class="zmdi zmdi-apps active"></a>
            <a href="/rentals/list/{{ $sort }}/search?{{ $urlParameters }}" class="zmdi zmdi-view-list"></a>
            <a href="/rentals/maps/{{ $sort }}/search?{{ $urlParameters }}" class="zmdi zmdi-map"></a>
            </div>

            <div class="action-header__item action-header__item--sort hidden-xs">
                <span class="action-header__small">Sort by :</span>

                <select class="select2">
                <option></option>
                <option value="updateDate-desc">Last Updated</option>
                <option value="rent-desc">Price high to low</option>
                <option value="rent-asc">Price low to high</option>
                <option value="beds-asc">Beds Ascending</option>
                <option value="beds-desc">Beds Descending</option>
                <option value="baths-asc">Baths Ascending</option>
                <option value="baths-desc">Baths Descending</option>
                </select>
            </div>
        </div>
    </div>


@endsection
@section ('content')



@if ($listings == 0)
<div class="container">    
            <header class="section__title">
                <h2>No Properties found</h2>
                <!-- <small>Vestibulum id ligula porta felis euismod semper</small> -->
            </header>
        </div>        
@else
<div class="container">
        <header class="section__title">
            <!-- <h2>Duis mollisest non commodo luctus nisierat porttito</h2>
            <small>Vestibulum id ligula porta felis euismod semper</small> -->
        </header>

        <div class="row listings-grid">
            @foreach ($listings as $listing)
            <div class="col-sm-6 col-md-3">

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
        <nav class="text-center">
                <ul class="pagination">
                    
                </ul>
        </nav>
    </div>
@endif   
    @include('components.side-search');

<div class=no-show>
    <div class="pageindex">{{ $now }}</div>
    <div class="pageindex">{{ $available }}</div>
    <div class="pageindex">{{ $pageIndex }}</div>
    <div class="pages">{{ $pages }}</div>
    <div class="view">{{ $view }}</div>
    <div class="sort">{{ $sort }}</div>
    <div class="urlparameters">{{ $urlParameters }}</div>
</div>
@endsection