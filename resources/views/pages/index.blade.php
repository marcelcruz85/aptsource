@extends ('layout')

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
            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,175,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>21 Shop St, San Francisco</small>
                            <h5>Integer tempor luctus maximus</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,200,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Beverly Hills, CA 90210</small>
                            <h5>Duis sollicitudin ante bibendum</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$910,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>132 04th St, San Francisco</small>
                            <h5>Fusce quis libero nonorcious</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$2,542,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>132 Lockslee, San Francisco</small>
                            <h5>Pellentesque habitant</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$823,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>San Francisco, CA 900212 </small>
                            <h5>Maecenas sed purus lorem aliquet cursus</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,120,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>21120 Broadway St, San Fransisco</small>
                            <h5>Maecenas sed purus at lorem</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$3,000,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>San Francisco, CA 937202</small>
                            <h5>Nullam finibus libero at hendrerit</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xol-sm-4 col-md-3">
                <div class="listings-grid__item">
                    <a href="listing-detail.html">
                        <div class="listings-grid__main">
                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                            <div class="listings-grid__price">$1,175,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>4313 Beverly Hills, CA 90210</small>
                            <h5>1358 Ligula Street, Unit 12</h5>
                        </div>

                        <ul class="listings-grid__attrs">
                            <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                            <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                            <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                        </ul>
                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section submit-ticker"> 
<p>Are you looking to sell your valuable property or rent out? Roost is your destination!</p>

<a href="submit-property.html">Submit your property</a>
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