<!doctype html>
<html lang="en-US">
    <!-- Mirrored from tk-themes.net/html-organici/html/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 13:20:02 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <link rel="shortcut icon" href="images/favicon.jpg" />
        <title>@yield('title')</title>
        <link rel='stylesheet' href="{{ asset('css/bootstrap.min.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('css/settings.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('css/owl.carousel.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('css/owl.theme.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('css/font-awesome.min.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic,900italic') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('http://fonts.googleapis.com/css?family=Pacifico:100,300,400,700,900,300italic,400italic,700italic,900italic') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('http://fonts.googleapis.com/css?family=Anonymous+Pro:') }}" type='text/css' media='all' />
        <link rel="stylesheet" href="{{ asset('http://fonts.googleapis.com/css?family=Roboto:700') }}" type="text/css" media="all" />
        <link rel='stylesheet' href="{{ asset('css/style.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('css/custom.css') }}" type='text/css' media='all' />
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type='text/css' media='all' />
        <link rel="stylesheet" href="{{ asset('css/style-selector.css') }}" type='text/css' media='all' />
        <link href="{{ asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}" rel="stylesheet">        <!-- <link id="style-main-color" rel="stylesheet" href="css/colors/default.css"> -->

    </head>
    <body>
        <div class="site">
        <header class="noo-header header-2">
            <div class="noo-topbar">
                <div class="container">
                    <ul>
                    <li>
                            <span><i class="fa fa-phone"></i></span>
                            <a href="#">0123-88-89-0999</a>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope"></i></span>
                            <a href="mailto:contact@organici.com">contact@organici.com</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span><i class="fa fa-user"></i></span>
                            <a href="my-account.html">My Account</a>
                        </li>
                        <li>
                            <span><i class="fa fa-heart-o"></i></span>
                            <a href="wishlist.html">Wishlist</a>
                        </li>
                        <li>
                            <a href="cart.html">
                            <span class="has-cart">
                            <i class="fa fa-shopping-cart"></i>
                            <em>0</em>
                            </span>
                            </a>
                            &nbsp; &#8209; &nbsp; <span class="amount">&#36;0.00</span>
                        </li>
                        <li>
                            <a href="#" class="fa fa-search noo-search" id="noo-search"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-wrapper">
                <div class="navbar navbar-default">
                    <div class="container">
                        <div class="menu-position">
                            <div class="navbar-header pull-left">
                                <h1 class="sr-only">Organici</h1>
                                <div class="noo_menu_canvas">
                                    <div class="btn-search noo-search topbar-has-search">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <div data-target=".nav-collapse" class="btn-navbar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <a href="{{ route('get.home') }}" class="navbar-brand">
                                <img class="noo-logo-img noo-logo-normal" src="{{ asset('images/logo.png') }}" alt="">
                                </a>
                            </div>
                            <nav class="pull-right noo-main-menu">
                                <ul class="nav-collapse navbar-nav">
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="{{ route('get.home') }}" title="Trang chủ">Trang chủ</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('get.product') }}">Danh Mục</a>
                                        <ul class="sub-menu">
                                            @foreach($categoriesGlobal as $item)
                                            <li><a class="dropdown-item border-0 transition-link" title="{{ $item->c_name }}" href="{{ route('get.category', $item->c_slug) }}">{{ $item->c_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>        
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('get.article') }}">Menu</a>
                                        <ul class="sub-menu">
                                            @foreach($menusGlobal as $item)
                                            <li><a class="dropdown-item border-0 transition-link {{ Request::segment(2) == $item->mn_slug ? 'active' : '' }}" href="{{ route('get.menu', $item->mn_slug) }}">{{ $item->mn_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-header5">
                <div class="remove-form"></div>
                <div class="container">
                    <form class="form-horizontal">
                        <label class="note-search">Type and Press Enter to Search</label>
                        <input type="search" name="s" class="form-control" value="" placeholder="Search...">
                        <input type="submit" value="Search"/>
                    </form>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="wrap-footer footer-2 colophon wigetized">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 item-footer-four">
                            <div class="widget widget_about">
                                <div class="noo_about_widget">
                                    <a href="{{ route('get.home') }}">
                                    <img src="{{ asset('images/logo-removebg-preview.png') }}" alt="" />
                                    </a>
                                    <p>
                                        Maecenas tristique gravida, odio et sagi ttis justo. Suspendisse ultricies nisi veafn. onec dictum non nulla ut lobortis tellus. 
                                    </p>
                                </div>
                            </div>
                            <div class="widget widget_noo_social">
                                <div class="noo_social">
                                    <div class="social-all">
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-google-plus"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-youtube"></a>
                                        <a href="#" class="fa fa-skype"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 item-footer-four">
                            <div class="widget widget_text">
                                <h4 class="widget-title">Contact</h4>
                                <div class="textwidget">
                                    <h5>Address</h5>
                                    <p>No 13, Sky Tower Street, New York, USA</p>
                                    <h5>Hotline</h5>
                                    <p>
                                        <a href="#">(+844) 123 456 78</a><br/>
                                        <a href="#">(+844) 888 97989</a>
                                    </p>
                                    <h5>Email</h5>
                                    <p>
                                        <a href="mailto:contact@organicistore.com">
                                        contact@organicistore.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 item-footer-four">
                            <div class="widget widget_flickr">
                                <h4 class="widget-title">Photo in flickr</h4>
                                <div class='flickr-badge-wrapper'></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 item-footer-four">
                            <div class="widget widget_noo_happyhours">
                                <h4 class="widget-title">Happy Hours</h4>
                                <ul class="noo-happyhours">
                                    <li>
                                        <div>Enjoy discount baked goods. </div>
                                        <div>06:00 am - 08:00 pm daily </div>
                                    </li>
                                </ul>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="noo-menu-extend-overlay"></div>
        <a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>
        <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery-migrate.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/modernizr-2.7.1.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/off-cavnass.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.cookie.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/style.selector.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/script.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/custom.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/portfolio.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.carouFredSel-6.2.1.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jflickrfeed.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/extensions/revolution.extension.parallax.min.js') }}"></script>
    </body>
    <!-- Mirrored from tk-themes.net/html-organici/html/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 13:24:33 GMT -->
</html>
