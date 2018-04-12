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

@endsection 

@section ('content') 

@if ($listings == 0)
<div class="container">    
        <div class="row">
                <div class="col-sm-8 listings-list">
            <header class="section__title">
                <h2>No Properties found</h2>
                <small>Vestibulum id ligula porta felis euismod semper</small>
            </header>
        </div>        
@else
        <div class="container">
            <header class="section__title">
                <h2>Duis mollisest non commodo luctus nisierat porttito</h2>
                <small>Vestibulum id ligula porta felis euismod semper</small>
            </header>
            <div class="row">
                <div class="col-sm-8 listings-list">
                    @foreach ($listings as $listing)
                    <div class="listings-grid__item">
                    <a href="/rental/details/{{ $listing['ID'] }}"  class="media">
                            <div class="listings-grid__main list pull-left">
                                @if (is_array($listing) and array_key_exists('Photos', $listing) )
                                <img src="{{ $listing['Photos']['Photo']['0']}}" alt=""> @else
                                <img src="/img/nophoto.png" alt=""> @endif
                                <div class="listings-grid__price">{{ $listing['Price'] }}</div>
                            </div>

                            <div class="media-body">
                                <div class="listings-grid__body">
                                    <small>{{ $listing['StreetNumber'] }} {{ $listing['StreetName'] }} {{ $listing['City'] }}, {{
                                        $listing['State'] }} {{ $listing['Zip'] }}</small>

                                    @if (is_array($listing) and array_key_exists('Title', $listing) )
                                    <h5>{{ $listing['Title'] }}</h5>
                                    @endif
                                    <small>Available:
                                        <i class="zmdi zmdi-calendar-check"></i>
                                        <span class="availableDate">{{ $listing['AvailableDate'] }}</span>
                                    </small>
                                </div>
                                <ul class="listings-grid__attrs">
                                    <li class="number">
                                        <i class="listings-grid__icon listings-grid__icon--bed"></i> {{ $listing['Beds'] }} </li>
                                    <li class="number">
                                        <i class="listings-grid__icon listings-grid__icon--bath"></i> {{ $listing['Baths'] }}</li>
                                    <!-- <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 00</li> -->
                                </ul>
                            </div>
                        </a>

                        <div class="actions listings-grid__favorite">
                            {{--
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach

                    <nav class="text-center">
                        <ul class="pagination">

                        </ul>
                    </nav>
                </div>
@endif
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

        <div class=no-show>
            <div class="pageindex">{{ $location }}</div>
            <div class="pageindex">{{ $pageIndex }}</div>
            <div class="pages">{{ $pages }}</div>
            <div class="view">{{ $view }}</div>
            <div class="sort">{{ $sort }}</div>
            <div class="urlparameters ">{{ $urlParameters }}</div>
        </div>
        @endsection