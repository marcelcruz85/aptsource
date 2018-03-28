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
            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="listings-grid__main pull-left">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$1,200,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>304 East Wenatchee, WA 98801</small>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$1,175,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>21 Shop St, San Francisco</small>
                            <h5>Integer tempor luctus maximus</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$1,200,000</div>
                    </div>
                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>Beverly Hills, CA 90210</small>
                            <h5>Duis sollicitudin ante bibendum</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$910,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>132 04th St, San Francisco</small>
                            <h5>Fusce quis libero nonorcious</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$2,542,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>132 Lockslee, San Francisco</small>
                            <h5>Pellentesque habitant</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$823,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>San Francisco, CA 900212 </small>
                            <h5>Maecenas sed purus lorem aliquet cursus</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$1,120,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>21120 Broadway St, San Fransisco</small>
                            <h5>Maecenas sed purus at lorem</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$3,000,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>San Francisco, CA 937202</small>
                            <h5>Nullam finibus libero at hendrerit</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$1,175,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>4313 Beverly Hills, CA 90210</small>
                            <h5>Donec ullamcorper nulla non metus auctor fringilla</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$2,675,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>121 Hickory Mount, MD 21771</small>
                            <h5>Integer posuere eratante venenatis</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$575,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>677 Morris Lemont, IL 60439</small>
                            <h5>Praesent commodo cursus scelerisque consectetur</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$4299,000</div>

                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>451 Henry Livingston, NJ 07039</small>
                            <h5>Morbi leorisus consectetur vestibulum</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 06</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$2,329,980</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>722 Chestnut Dublin, GA 31021</small>
                            <h5>Curabitur blandit tempus porttitor</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 04</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 04</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 04</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$1,100,900</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>409 Magnolia Mansfield, MA 02048</small>
                            <h5>Aenean Pellentesque lacinia quam venenatis vestibulum</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$3,400,110</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>277 Elm Avenue, TN 37128</small>
                            <h5>Cras mattis consectetur purus sit amet fermentum</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </div>
                </a>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">$1,200,000</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>304 East Wenatchee, WA 98801</small>
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

            <div class="listings-grid__item">
                <a href="listing-detail.html" class="media">
                    <div class="pull-left listings-grid__main">
                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                        <div class="listings-grid__price">900,900</div>
                    </div>

                    <div class="media-body">
                        <div class="listings-grid__body">
                            <small>735 San Angelo, TX 76901</small>
                            <h5>Cras justo odio dapibus facilisis egestas</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li>
                                <i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
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