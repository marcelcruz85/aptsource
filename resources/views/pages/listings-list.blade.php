@extends ('layout') 

@section ('action-header')

<div class="action-header">
    <div class="container">
        <div class="action-header__item action-header__item--search">
            <form>
                <input class="hidden-xs" type="text" placeholder="Search by neighborhood, city, zip or address...">
                <!-- For desktop -->
                <input class="visible-xs" type="text" placeholder="Search...">
                <!-- For mobile -->
            </form>
        </div>

        <div class="action-header__item action-header__views hidden-xs">
            <a href="listings-grid" class="zmdi zmdi-apps"></a>
            <a href="listings-list" class="zmdi zmdi-view-list active"></a>
        </div>

        <div class="action-header__item action-header__item--sort hidden-xs">
            <span class="action-header__small">Sort by :</span>

            <select class="select2">
                <option>Featured listings</option>
                <option>Newest to oldest</option>
                <option>Oldest to Newest</option>
                <option>Price hight to low</option>
                <option>Price low to high</option>
                <option>Newest to Oldest</option>
                <option>No. of photos</option>
            </select>
        </div>
    </div>
</div>

@endsection 

@section ('content')

<div class="container">
    <header class="section__title">
        <h2>Duis mollisest non commodo luctus nisierat porttito</h2>
        <small>Vestibulum id ligula porta felis euismod semper</small>
    </header>

    <div class="row">
        <div class="col-sm-8 listings-list">

            @foreach ($listings as $listing)
            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="listings-grid__main pull-left">
                        @foreach ($Photos as $photo)
                            <img src={{ $photo }} alt="">
                        @endforeach
                        <div class="listings-grid__price">{{ $listing->Price }}</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>{{ $listing->StreetNumber }} {{ $listing->StreetName }} {{ $listing->City }}, {{ $listing->State }} {{ $listing->Zip }}</small>
                            <h5>Nullam iddolor idnibh ultricies vehicula</h5>
                        </div>
                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 00</li>
                        </ul>
                    </div>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>
            @endforeach

            <nav class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <i class="zmdi zmdi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#" aria-label="Next">
                            <i class="zmdi zmdi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
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
    </div>
</div>

@endsection