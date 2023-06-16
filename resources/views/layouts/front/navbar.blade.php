  <!-- header start -->
  <header class="header-area gray-bg clearfix">
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-6">
                    <div class="header-bottom-right">
                        <div class="main-menu">
                            <nav>
                                <ul class="menu">
                                    <li><a title="Home" href="{{ route('home') }}"><i
                                                class="fa-solid fa-house"></i> home</a>
                                    </li>
                                    <li><a href="{{ route('about') }}" title="About"><i
                                                class="fa-regular fa-address-card"></i> about</a></li>
                                    <li class="mega-menu-position top-hover"><a href="{{ route('shop') }}" title="Shop"><i
                                                class="fa-brands fa-shopify"></i> shop</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Kategori 01</li>
                                                    <li><a href="shop.html">Sepatu Pria</a></li>
                                                    <li><a href="shop.html">Sepatu Wanita</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Kategori 02</li>
                                                    <li><a href="shop.html">Olahraga& Outdoor</a></li>
                                                    <li><a href="shop.html">Jam Tangan</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Kategori 03</li>
                                                    <li><a href="shop.html">Tas Pria</a></li>
                                                    <li><a href="shop.html">Tas Wanita</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title">Kategori 04</li>
                                                    <li><a href="shop.html">Pakaian Pria</a></li>
                                                    <li><a href="shop.html">Aksesoris</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- <li class="top-hover"><a href="blog-left-sidebar.html">blog</a>
                        <ul class="submenu">
                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                            <li><a href="#">Blog Standard <span><i
                                            class="ion-ios-arrow-right"></i></span></a>
                                <ul class="lavel-menu">
                                    <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                    <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Post Types <span><i
                                            class="ion-ios-arrow-right"></i></span> </a>
                                <ul class="lavel-menu">
                                    <li><a href="blog-details-standerd.html">Standard post</a></li>
                                    <li><a href="blog-details-audio.html">audio post</a></li>
                                    <li><a href="blog-details-video.html">video post</a></li>
                                    <li><a href="blog-details-gallery.html">gallery post</a></li>
                                    <li><a href="blog-details-link.html">link post</a></li>
                                    <li><a href="blog-details-quote.html">quote post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                                    {{-- <li class="top-hover"><a href="#">pages</a>
                        <ul class="submenu">
                            <li><a href="about-us.html">about us </a></li>
                            <li><a href="shop.html">shop Grid</a></li>
                            <li><a href="shop-list.html">shop list</a></li>
                            <li><a href="product-details.html">product details</a></li>
                            <li><a href="cart-page.html">cart page</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="my-account.html">my account</a></li>
                            <li><a href="login-register.html">login / register</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </li> --}}
                                    <li><a href="{{ route('contact') }}" title="Contact"><i class="fa-solid fa-phone"></i>
                                            contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-currency">
                            <span class="digit" title="Login" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Tooltip on top"><i class="fa-solid fa-user"
                                    style="font-size: 1.2rem;"></i></span>
                            {{-- <div class="dollar-submenu">
                <ul>
                    <li><a href="#">$ USD</a></li>
                    <li><a href="#">€ EUR</a></li>
                    <li><a href="#">£ GBP</a></li>
                    <li><a href="#">₹ INR</a></li>
                    <li><a href="#">¥ JPY</a></li>
                </ul>
            </div> --}}
                        </div>
                        <div class="header-cart">
                            <a href="#">
                                <div class="cart-icon">
                                    <i class="ti-shopping-cart"></i>
                                </div>
                            </a>
                            <div class="shopping-cart-content">
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt=""
                                                    src="assets/img/cart/cart-1.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Phantom Remote </a></h4>
                                            <h6>Qty: 02</h6>
                                            <span>$260.00</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="ion ion-close"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt=""
                                                    src="assets/img/cart/cart-2.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Phantom Remote</a></h4>
                                            <h6>Qty: 02</h6>
                                            <span>$260.00</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="ion ion-close"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>Shipping : <span>$20.00</span></h4>
                                    <h4>Total : <span class="shop-total">$260.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="cart-page.html">view cart</a>
                                    <a href="checkout.html">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> HOME</a></li>
                            <li><a href="{{ route('about') }}" title="About"><i class="fa-regular fa-address-card"></i>
                                    about</a></li>
                            {{-- <li><a href="">pages</a>
                <ul>
                    <li><a href="about-us.html">about us </a></li>
                    <li><a href="shop.html">shop Grid</a></li>
                    <li><a href="shop-list.html">shop list</a></li>
                    <li><a href="product-details.html">product details</a></li>
                    <li><a href="cart-page.html">cart page</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="wishlist.html">wishlist</a></li>
                    <li><a href="my-account.html">my account</a></li>
                    <li><a href="login-register.html">login / register</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </li> --}}
                            <li><a href="shop.html"><i class="fa-brands fa-shopify"></i> Shop </a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">Sepatu Pria</a></li>
                                            <li><a href="shop.html">Sepatu Wanita</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">Olahraga & Outdoor</a></li>
                                            <li><a href="shop.html">Jam Tangan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">Tas Pria</a></li>
                                            <li><a href="shop.html">Tas Wanita</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 04</a>
                                        <ul>
                                            <li><a href="shop.html">Pakaian Pria</a></li>
                                            <li><a href="shop.html">Aksesoris</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li><a href="#">BLOG</a>
                <ul>
                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                    <li><a href="#">Blog Standard</a>
                        <ul>
                            <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                            <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Post Types</a>
                        <ul>
                            <li><a href="blog-details-standerd.html">Standard post</a></li>
                            <li><a href="blog-details-audio.html">audio post</a></li>
                            <li><a href="blog-details-video.html">video post</a></li>
                            <li><a href="blog-details-gallery.html">gallery post</a></li>
                            <li><a href="blog-details-link.html">link post</a></li>
                            <li><a href="blog-details-quote.html">quote post</a></li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
                            <li><a href="{{ route('contact') }}"><i class="fa-solid fa-phone"></i> Contact us </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
