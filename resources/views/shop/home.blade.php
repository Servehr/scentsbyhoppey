@extends('layouts.app')

@section('content')
<body class="home">
    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header">

            @include('shared.header')

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories" style="visibility:visible;">
                                    <i class="w-icon-category"></i>
                                    <span>All Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <li>
                                            <a href="shop-fullwidth-banner.html" style="font-size: 13px;">
                                                <i class="w-icon-tshirt2" style="font-size: 13px; margin-top:-3px;"></i>Perfume Oil
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Women</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                                Watches</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Men</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="banner-fixed menu-banner menu-banner2">
                                                        <figure>
                                                            <img src="{{ asset('assets/images/menu/banner-2.jpg') }}" alt="Menu Banner"
                                                                width="235" height="347" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <div class="banner-price-info mb-1 ls-normal">Get up to
                                                                <strong
                                                                    class="text-primary text-uppercase">20%Off</strong>
                                                            </div>
                                                            <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                            <a href="shop-banner-sidebar.html"
                                                                class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-home"></i>Perfume Oil Accessories
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Bedroom</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                                Bases</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                                Headboards</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Living Room</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                                Beds</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                                Chests</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Office</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Breakroom
                                                                Tables</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                                Cabinets</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Dining Room
                                                                Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner3">
                                                        <figure>
                                                            <img src="{{ asset('assets/images/menu/banner-3.jpg') }}" alt="Menu Banner"
                                                                width="235" height="461" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-white mb-1">
                                                                Restroom</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-white ls-normal">
                                                                Furniture Sale</h3>
                                                            <div
                                                                class="banner-price-info text-white font-weight-normal ls-25">
                                                                Up to <span
                                                                    class="text-secondary text-uppercase font-weight-bold">25%
                                                                    Off</span></div>
                                                            <a href="shop-banner-sidebar.html"
                                                                class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-electronics"></i>Designer Perfumes
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Laptops &amp; Computers</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Desktop
                                                                Computers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                                Storage</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Computer
                                                                Accessories</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Home Audio
                                                                Speakers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                                Devices</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Digital Cameras</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Sports & Action
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                                Cards</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Cell Phones</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Phone & Cellphone
                                                                Cases</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Cellphone
                                                                Chargers</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner4">
                                                        <figure>
                                                            <img src="{{ asset('assets/images/menu/banner-4.jpg') }}" alt="Menu Banner"
                                                                width="235" height="433" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                                Week</h4>
                                                            <h3 class="banner-title text-white">Save On Smart EarPhone
                                                            </h3>
                                                            <div
                                                                class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                                20% Off</div>
                                                            <a href="shop-banner-sidebar.html"
                                                                class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-furniture"></i>Body Spray
                                            </a>
                                            <ul class="megamenu type2">
                                                <li class="row">
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Body Mist</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Lighting</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Bathroom
                                                                    Lighting</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Home Accessories</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Decorative
                                                                    Accessories</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Candals &
                                                                    Holders</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Garden & Outdoors</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Garden
                                                                    Furniture</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Pressure
                                                                    Washers</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">All Garden
                                                                    Tools</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="{{ asset('assets/images/menu/banner-5.jpg') }}" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #D2D2D2;" />
                                                            </figure>
                                                            <div class="banner-content text-right y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                    New Arrivals</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                    Amazing Sofa</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal">
                                                                    Starting at <strong>$125.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="{{ asset('assets/images/menu/banner-6.jpg') }}" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #9F9888;" />
                                                            </figure>
                                                            <div class="banner-content y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                    Best Seller</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                    Chair &amp; Lamp</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal text-white">
                                                                    From <strong>$165.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-heartbeat"></i>Difusser
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-gift"></i>Gift Ideas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-gamepad"></i>Toy & Games
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-ice-cream"></i>Cooking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-ruby"></i>Accessories
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->

        <!-- Start of Main-->
        <main class="main">

            <section class="intro-section" style="background-color:gray; height: 390px;">
                <div class="slideshow-container">
                    <div class="mySlides2">
                      <img src="img_band_chicago.jpg" style="width:100%">
                    </div>

                    <div class="mySlides2">
                      <img src="https://res.cloudinary.com/dtiqvvs2m/image/upload/v1693981423/gtco_y006ny.png" style="width:100%; height: 390px">
                    </div>

                    <div class="mySlides2">
                      <img src="https://res.cloudinary.com/dtiqvvs2m/image/upload/v1693981422/firstbank_nbfmhv.png" style="width:40%; height: 390px">
                    </div>

                    <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
                </div>
            </section>

            <!-- End of .intro-section -->
            <div class="container">
                <div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1icon-box-wrapper appear-animate br-sm mt-6 mb-8"
                    data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'loop': false,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                }">
                    <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                            <p class="text-default">For all orders over $99</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                            <p class="text-default">We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary icon-box-money">
                        <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                            <p class="text-default">Any back within 30 days</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary icon-box-chat">
                        <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                            <p class="text-default">Call or email us 24/7</p>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->
            </div>

            <div class="container">
                <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo1/categories/3-1.jpg') }}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize text-white">Cosmetic
                                    Makeup<br>Professional</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="{{ asset('assets/images/demos/demo1/categories/3-2.jpg') }}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #E5E5E5;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                                    Lifestyle<br>Collection</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Cosmetic Lifestyle -->

                <div class="tab-content product-wrapper appear-animate">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Products</h2>
                        <a href="blog-listing.html" class="font-weight-bold font-size-normal">View All Products</a>
                    </div>

                    <div class="tab-pane active pt-4" id="tab1-1">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-2">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-3">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-4">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-4-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-10.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-9.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-8-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-5.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-3.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-7.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-6-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-1.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset('assets/images/demos/demo1/products/3-1-2.jpg') }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                </div>

                <div class="post-wrapper appear-animate mb-4">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">From Our Blog</h2>
                        <a href="blog-listing.html" class="font-weight-bold font-size-normal">View All Articles</a>
                    </div>
                    <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-sm-2 cols-1" data-owl-options="{
                        'items': 4,
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '576': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4,
                                'dots': false
                            }
                        }
                    }">
                        <div class="post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('assets/images/demos/demo1/blogs/1.jpg') }}" alt="Post" width="280" height="180"
                                        style="background-color: #4b6e91;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Aliquam tincidunt mauris eurisus</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('assets/images/demos/demo1/blogs/2.jpg') }}" alt="Post" width="280" height="180"
                                        style="background-color: #cec9cf;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Cras ornare tristique elit</a></h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('assets/images/demos/demo1/blogs/3.jpg') }}" alt="Post" width="280" height="180"
                                        style="background-color: #c9c7bb;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Vivamus vestibulum ntulla nec ante</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('assets/images/demos/demo1/blogs/4.jpg') }}" alt="Post" width="280" height="180"
                                        style="background-color: #d8dce0;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Fusce lacinia arcuet nulla</a></h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Wrapper -->
                <!-- End of Reviewed Producs -->
            </div>
            <!--End of Catainer -->

            <div class="container">
              <h2 class="title title-underline mb-4 ls-normal appear-animate">Your Recent Views</h2>
              <div class="owl-carousel owl-theme owl-shadow-carousel appear-animate row cols-xl-8 cols-lg-6 cols-md-4 cols-2 pb-2 mb-10"
                  data-owl-options="{
                  'nav': false,
                  'dots': true,
                  'margin': 20,
                  'responsive': {
                      '0': {
                          'items': 2
                      },
                      '576': {
                          'items': 3
                      },
                      '768': {
                          'items': 5
                      },
                      '992': {
                          'items': 6
                      },
                      '1200': {
                          'items': 8,
                          'dots': false
                      }
                  }
              }">
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-1.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">Women's Fashion Handbag</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-2.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">Electric Frying Pan</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-3.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">Black Winter Skating</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-4.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">HD Television</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-5.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">Home Sofa</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-6.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">USB Receipt</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-7.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">Electric Rice-Cooker</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="product-wrap mb-0">
                      <div class="product text-center product-absolute">
                          <figure class="product-media">
                              <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                  <img src="{{ asset('assets/images/demos/demo1/products/7-8.jpg') }}" alt="Category image"
                                      width="130" height="146" style="background-color: #fff" />
                              </a>
                          </figure>
                          <h4 class="product-name">
                              <a href="product-default.html">Table Lamp</a>
                          </h4>
                      </div>
                  </div>
                  <!-- End of Product Wrap -->
              </div>
            </div>

        </main>
        <!-- End of Main -->

    <!-- End of Quick view -->
@endsection
