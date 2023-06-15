<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sabujcha - Matcha eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
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
                                            <li><a title="Home" class="active" href="{{ route('home') }}"><i
                                                        class="fa-solid fa-house"></i> home</a>
                                            </li>
                                            <li><a href="{{ route('about') }}" title="About"><i
                                                        class="fa-regular fa-address-card"></i> about</a></li>
                                            <li class="mega-menu-position top-hover"><a href="shop.html" title="Shop"><i
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
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
					<h3>CART PAGE</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Cart page</li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- Breadcrumb Area End -->
         <!-- shopping-cart-area start -->
        <div class="cart-main-area ptb-100">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/cart-3.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Dutchman's Breeches </a></td>
                                            <td class="product-price-cart"><span class="amount">$260.00</span></td>
                                            <td class="product-quantity">
                                                <div class="pro-dec-cart">
                                                    <input class="cart-plus-minus-box" type="text" value="02" name="qtybutton">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$110.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/cart-4.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Flowers Bouquet Pink</a></td>
                                            <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                            <td class="product-quantity">
                                                <div class="pro-dec-cart">
                                                    <input class="cart-plus-minus-box" type="text" value="02" name="qtybutton">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$150.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/cart-5.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Evergreen Candytuft </a></td>
                                            <td class="product-price-cart"><span class="amount">$170.00</span></td>
                                            <td class="product-quantity">
                                                <div class="pro-dec-cart">
                                                    <input class="cart-plus-minus-box" type="text" value="02" name="qtybutton">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$170.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Update Shopping Cart</button>
                                            <a href="#">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * Country
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Region / State
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text">
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                       <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input type="text" required="" name="name">
                                            <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Total products <span>$260.00</span></h5>
                                    <div class="total-shipping">
                                        <h5>Total shipping</h5>
                                        <ul>
                                            <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                            <li><input type="checkbox"> Express <span>$30.00</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Grand Total  <span>$260.00</span></h4>
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="wishlist.html">WishList</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="#">International Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget footer-widget-red footer-black-color mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>Your current address goes to here,120 haka, angladesh</p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>(+008) 254 254 254 25487</li>
                                            <li>(+009) 358 587 657 6985</li>
                                        </ul>
                                    </div>
									<div class="footer-contact mt-20">
                                        <ul>
                                            <li>yourmail@example.com</li>
                                            <li>example@admin.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25 gray-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                           <div class="copyright">
                                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-img f-right">
                                <a href="#">
                                    <img alt="" src="assets/img/icon-img/payment.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer style End -->

		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>
