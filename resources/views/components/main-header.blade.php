
<div class="header__main">
    <div class="container">
        <a class="logo" href="/">
            <img src="/img/logoapt.png" alt="">
            <!-- <div class="logo__text">
                <span>The Apartment</span>
                <span>Source</span>
            </div> -->
        </a>

        <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
            <i class="zmdi zmdi-menu"></i>
        </div>

        <ul class="navigation">
            <li class="visible-xs visible-sm">
                <a class="navigation__close" data-rmd-action="navigation-close" href="">
                    <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </li>

            <li class="navigation__dropdown">
                <a href="/">Home</a>
            </li>

            <li class="navigation__dropdown">
                <a href="/rentals/grid/1/search?location" {{-- class="prevent-default" --}}>Listings</a>

{{--                 <ul class="navigation__drop-menu">
                    <li>
                        <a href="/rentals/grid/1/search">Grid view</a>
                    </li>
                    <li>
                        <a href="/rentals/list/1/search">List view</a>
                    </li>
                </ul> --}}
            </li>


            <li class="navigation__dropdown">
                <a href="/submit">Submit</a>
            </li>
            
            <li class="navigation__dropdown">
                <a href="/faq">FAQ</a>
            </li>

            <li class="navigation__dropdown">
                <a href="/contact">Contact</a>
            </li>

        </ul>
    </div>
</div>