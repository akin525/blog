<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Hypeople">
    <meta name="description" content="Responsive, Highly Customizable Dashboard Template" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="app-assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app-assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app-assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://yoda.hypeople.studio/yoda-admin-template/app-assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="https://yoda.hypeople.studio/yoda-admin-template/app-assets/favicon/safari-pinned-tab.svg" color="#0010f7">
    <meta name="msapplication-TileColor" content="#0010f7">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugin/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/icons/iconly/index.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/icons/remix-icon/index.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">

    <!-- Base -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/base/font-control.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/base/typography.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/base/base.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/theme/colors-dark.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/theme/theme-dark.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom-rtl.css">

    <!-- Layouts -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/layouts/sider.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/layouts/header.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <!-- Customizer -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/layouts/customizer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    <!-- Charts -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugin/apex-charts.css">

    <!-- Pages -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.css">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <title>Analytics Dashboard - Yoda Admin Html Template</title>

    <script>
        ! function(t, h, e, j, s, n) {
            t.hj = t.hj || function() {
                (t.hj.q = t.hj.q || []).push(arguments)
            },
                t._hjSettings = {
                    hjid: 2628580,
                    hjsv: 6
                },
                s = h.getElementsByTagName("head")[0],
                (n = h.createElement("script")).async = 1,
                n.src = "https://static.hotjar.com/c/hotjar-" + t._hjSettings.hjid + ".js?sv=" + t._hjSettings.hjsv,
                s.appendChild(n)
        }(window, document)
    </script>
    @yield('styles')
</head>
<body>
<style>
    .preloader
    {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: #fff;
        z-index: 9999;
        text-align: center;
    }
    .preloader-icon
    {
        position: relative;
        top: 45%;
        width: 100px;
        border-radius: 50%;
        animation: shake 1.5s infinite;
    }
    @keyframes shake
    {
        0% { transform: translate(1px, -1px) rotate(0deg);}
        10% { transform: translate(1px, -3px) rotate(-1deg);}
        20% { transform: translate(1px, -5px) rotate(-3deg);}
        30% { transform: translate(1px, -7px) rotate(0deg);}
        40% { transform: translate(1px, -9px) rotate(1deg);}
        50% { transform: translate(1px, -11px) rotate(3deg);}
        60% { transform: translate(1px, -9px) rotate(0deg);}
        70% { transform: translate(1px, -7px) rotate(-1deg);}
        80% { transform: translate(1px, -5px) rotate(-3deg);}
        90% { transform: translate(1px, -3px) rotate(0deg);}
        100% { transform: translate(1px, -1px) rotate(-1deg);}
    }
</style>
<style>
    .overlay-loader {
        display: block;
        margin: auto;
        width: 97px;
        height: 97px;
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    .loader {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 97px;
        height: 97px;
        animation-name: rotateAnim;
        -o-animation-name: rotateAnim;
        -ms-animation-name: rotateAnim;
        -webkit-animation-name: rotateAnim;
        -moz-animation-name: rotateAnim;
        animation-duration: 0.4s;
        -o-animation-duration: 0.4s;
        -ms-animation-duration: 0.4s;
        -webkit-animation-duration: 0.4s;
        -moz-animation-duration: 0.4s;
        animation-iteration-count: infinite;
        -o-animation-iteration-count: infinite;
        -ms-animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
        -moz-animation-iteration-count: infinite;
        animation-timing-function: linear;
        -o-animation-timing-function: linear;
        -ms-animation-timing-function: linear;
        -webkit-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
    }
    .loader div {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        border: 1px solid rgb(14,14,245);
        position: absolute;
        top: 2px;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
    .loader div:nth-child(odd) {
        border-top: none;
        border-left: none;
    }
    .loader div:nth-child(even) {
        border-bottom: none;
        border-right: none;
    }
    .loader div:nth-child(2) {
        border-width: 2px;
        left: 0px;
        top: -4px;
        width: 12px;
        height: 12px;
    }
    .loader div:nth-child(3) {
        border-width: 2px;
        left: -1px;
        top: 3px;
        width: 18px;
        height: 18px;
    }
    .loader div:nth-child(4) {
        border-width: 3px;
        left: -1px;
        top: -4px;
        width: 23px;
        height: 23px;
    }
    .loader div:nth-child(5) {
        border-width: 3px;
        left: -1px;
        top: 4px;
        width: 31px;
        height: 31px;
    }
    .loader div:nth-child(6) {
        border-width: 4px;
        left: 0px;
        top: -4px;
        width: 39px;
        height: 39px;
    }
    .loader div:nth-child(7) {
        border-width: 4px;
        left: 0px;
        top: 6px;
        width: 49px;
        height: 49px;
    }


    @keyframes rotateAnim {
        from {
            transform: rotate(360deg);
        }
        to {
            transform: rotate(0deg);
        }
    }

    @-o-keyframes rotateAnim {
        from {
            -o-transform: rotate(360deg);
        }
        to {
            -o-transform: rotate(0deg);
        }
    }

    @-ms-keyframes rotateAnim {
        from {
            -ms-transform: rotate(360deg);
        }
        to {
            -ms-transform: rotate(0deg);
        }
    }

    @-webkit-keyframes rotateAnim {
        from {
            -webkit-transform: rotate(360deg);
        }
        to {
            -webkit-transform: rotate(0deg);
        }
    }

    @-moz-keyframes rotateAnim {
        from {
            -moz-transform: rotate(360deg);
        }
        to {
            -moz-transform: rotate(0deg);
        }
    }
</style>
{{--    <div class="preloader"> <img class="preloader-icon" src="{{asset('1480.gif')}}" alt="My Site Preloader"> </div>--}}
<div class="preloader">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<main class="hp-bg-color-dark-90 d-flex min-vh-100">
    @include('sweetalert::alert')
    <div class="hp-sidebar hp-bg-color-black-0 hp-bg-color-dark-100">
        <div class="hp-sidebar-container">
            <div class="hp-sidebar-header-menu">
                <div class="row justify-content-between align-items-end me-12 ms-24 mt-24">
                    <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-visible">
                        <button type="button" class="btn btn-text btn-icon-only">
                            <i class="ri-menu-unfold-line" style="font-size: 16px;"></i>
                        </button>
                    </div>
                    <div class="w-auto px-0">
                        <div class="hp-header-logo d-flex align-items-end">
                            <a href="{{route('dashboard')}}">
                                <img class="hp-logo hp-sidebar-visible" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-small.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-dark.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl-dark.svg" alt="logo">
                            </a>

                            <a href="https://hypeople-studio.gitbook.io/yoda/change-log" target="_blank" class="d-flex">
                                <span class="hp-sidebar-hidden h3 fw-bold hp-text-color-primary-1 mb-6">.</span>
                                <span class="hp-sidebar-hidden hp-p1-body fw-medium hp-text-color-black-40 mb-16 ms-4" style="letter-spacing: -0.5px;">v.3.0</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden">
                        <button type="button" class="btn btn-text btn-icon-only">
                            <i class="ri-menu-fold-line" style="font-size: 16px;"></i>
                        </button>
                    </div>
                </div>

                <ul>
                            <li>
                                <a href="javascript:;" class="submenu-item">
                                        <span>
                                            <i class="iconly-Curved-Home"></i>

                                            <span>Dashboards</span>
                                        </span>
                                </a>
                            </li>

                        </ul>
            </div>
     </div>
    </div>

    <div class="hp-main-layout">
        <header>
            <div class="row w-100 m-0">
                <div class="col ps-18 pe-16 px-sm-24">
                    <div class="row w-100 align-items-center justify-content-between position-relative">
                        <div class="col w-auto hp-flex-none hp-mobile-sidebar-button me-24 px-0" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                            <button type="button" class="btn btn-text btn-icon-only">
                                <i class="ri-menu-fill hp-text-color-black-80 hp-text-color-dark-30 lh-1" style="font-size: 24px;"></i>
                            </button>
                        </div>

                        <div class="hp-header-text-info col col-lg-14 col-xl-16 hp-header-start-text d-flex align-items-center hp-horizontal-none">
                            <div class="d-flex rounded-3 hp-text-color-primary-1 hp-text-color-dark-0 p-4 hp-bg-color-primary-4 hp-bg-color-dark-70" style="min-width: 18px">
                                <i class="iconly-Curved-Document"></i>
                            </div>

                            <p class="hp-header-start-text-item hp-input-label hp-text-color-black-100 hp-text-color-dark-0 ms-16 mb-0 lh-1 d-flex align-items-center">
                                Do you know the latest update of 2022? 🎉
                                <span class="fw-light hp-text-color-danger-3 ms-12">Our roadmap is alive for future updates.</span>

                                <a href="https://trello.com/b/8ZRmDN5y/yoda-roadmap" class="ms-8 mb-6 hp-text-color-black-60" target="_blank">
                                    <i class="iconly-Curved-Upload hp-text-color-dark-5"></i>
                                </a>
                            </p>
                        </div>

                        <div class="col hp-flex-none w-auto hp-horizontal-block">
                            <div class="hp-header-logo d-flex align-items-end">
                                <a href="{{route('dashboard')}}">
                                    <img class="hp-logo hp-sidebar-visible" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-small.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-dark.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl-dark.svg" alt="logo">
                                </a>

                                <a href="https://hypeople-studio.gitbook.io/yoda/change-log" target="_blank" class="d-flex">
                                    <span class="hp-sidebar-hidden h3 fw-bold hp-text-color-primary-1 mb-6">.</span>
                                    <span class="hp-sidebar-hidden hp-p1-body fw-medium hp-text-color-black-40 mb-16 ms-4" style="letter-spacing: -0.5px;">v.3.0</span>
                                </a>
                            </div>
                        </div>

                        <div class="hp-header-search d-none col">
                            <input type="text" class="form-control" placeholder="Search..." id="header-search" autocomplete="off">
                        </div>

                        <div class="col hp-flex-none w-auto hp-horizontal-block hp-horizontal-menu">
                            <ul class="d-flex flex-wrap align-items-center">
                                <li class="px-18">
                                    <a href="javascript:;" class="px-24 py-10" data-bs-toggle="dropdown">
                                        <span>Main</span>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="dropend">
                                            <a class="dropdown-item" href="javascript:;" data-bs-toggle="dropdown">
                                                    <span>
                                                        <i class="iconly-Curved-Home"></i>
                                                        <span>Dashboards</span>
                                                    </span>

                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="dropend">
                                                    <a href="dashboard-analytics.html">
                                                        <span>Analytics</span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="dashboard-ecommerce.html">
                                                        <span>Ecommerce</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropend">
                                            <a class="dropdown-item" href="javascript:;" data-bs-toggle="dropdown">
                                                    <span>
                                                        <i class="iconly-Curved-Graph"></i>
                                                        <span>Widgets</span>
                                                    </span>

                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;" data-bs-toggle="dropdown">
                                                        <span>Yoda Card</span>

                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="cards-advance.html">
                                                                <span>Advance</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="cards-statistics.html">
                                                                <span>Statistics</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="cards-analytic.html">
                                                                <span>Analytics</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>

                        <div class="col hp-flex-none w-auto pe-0">
                            <div class="row align-items-center justify-content-end">
                                <div class="w-auto px-0">
                                    <div class="d-flex align-items-center me-4 hp-header-search-button">
                                        <button type="button" class="btn btn-text btn-icon-only">
                                            <i class="iconly-Curved-Search hp-text-color-black-60"></i>
                                            <i class="d-none ri-close-line hp-text-color-black-60" style="font-size: 24px;"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="me-4 hp-basket-dropdown-button w-auto px-0 position-relative">
                                    <button type="button" class="btn btn-text btn-icon-only">
                                        <i class="iconly-Curved-Buy hp-text-color-black-60"></i>
                                    </button>

                                    <div class="hp-basket-dropdown">
                                        <div class="row px-0 justify-content-between align-items-center">
                                            <h5 class="mb-0 w-auto hp-text-color-dark-15">My Cart</h5>

                                            <div class="w-auto px-0 me-8">
                                                <span class="d-inline-block hp-caption fw-normal px-12 rounded w-auto hp-bg-color-primary-4 hp-text-color-primary-1">1 Item</span>
                                            </div>
                                        </div>

                                        <div class="divider mt-24 mb-4"></div>

                                        <div class="hp-basket-dropdown-list">
                                            <div class="hp-d-block hp-transition hp-hover-bg-primary-4 hp-hover-bg-dark-primary hp-hover-bg-dark-80 rounded py-8 px-10 hp-overflow-x-auto" style="margin-left: -10px; margin-right: -10px;">
                                                <div class="row flex-nowrap justify-content-between align-items-center">
                                                    <div class="col mt-4 pe-0" style="flex: 0 0 32px;">
                                                        <a href="javascript:;">
                                                            <div class="avatar-item d-flex align-items-center justify-content-center hp-bg-black-0 hp-bg-dark-100 rounded-circle" style="width: 35px; height: 35px;">
                                                                <img src="app-assets/img/product/watch-1.png">
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col ms-10 px-0" style="flex: 0 0 110px;">
                                                        <a href="app-ecommerce-product-detail.html">
                                                            <h5 class="mb-0 fw-medium hp-p1-body hp-text-color-black-100 hp-text-color-dark-15">Smart Watches 3</h5>
                                                            <p class="mb-0 hp-caption hp-text-color-black-60" style="margin-top: 1px;">By <span class="hp-text-color-black-80">Sony</span></p>
                                                        </a>
                                                    </div>

                                                    <div class="col hp-d-flex hp-d-flex-column ms-8 px-0" style="flex: 0 0 80px;">
                                                        <div class="input-number">
                                                            <div class="input-number-handler-wrap">
                                                                    <span class="input-number-handler input-number-handler-up">
                                                                        <span class="input-number-handler-up-inner">
                                                                            <svg viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor">
                                                                                <path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </span>

                                                                <span class="input-number-handler input-number-handler-down input-number-handler-down-disabled">
                                                                        <span class="input-number-handler-down-inner">
                                                                            <svg viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor">
                                                                                <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                            </div>

                                                            <div class="input-number-input-wrap">
                                                                <input class="input-number-input" type="number" min="1" max="10" value="1">
                                                            </div>
                                                        </div>

                                                        <div class="hp-cursor-pointer mt-4 hp-caption text-black-60 text-decoration-underline">Remove Item</div>
                                                    </div>

                                                    <div class="col ps-0 text-end">
                                                        <p class="hp-basket-dropdown-list-item-price hp-p1-body mb-0 hp-text-color-primary-1 hp-text-color-dark-primary-2 fw-medium">$59.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="divider mt-4 mb-12"></div>

                                        <div class="row">
                                            <div class="col-6 px-8">
                                                <a href="app-ecommerce-checkout.html">
                                                    <button type="button" class="btn btn-text w-100 hp-text-color-primary-1 hp-text-color-dark-primary-2 hp-hover-bg-primary-4 hp-hover-bg-dark-primary">
                                                        View Cart
                                                    </button>
                                                </a>
                                            </div>

                                            <div class="col-6 px-8">
                                                <a href="app-ecommerce-checkout-address.html">
                                                    <button type="button" class="btn btn-primary w-100">
                                                        Checkout
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hover-dropdown-fade w-auto px-0 d-flex align-items-center me-8 me-sm-16 position-relative">
                                    <button type="button" class="btn btn-text btn-icon-only">
                                        <i class="iconly-Curved-Notification hp-text-color-black-60 position-relative">
                                            <span class="position-absolute translate-middle p-2 rounded-circle bg-primary hp-notification-circle" style="width: 6px; height: 6px; top: 4px;"></span>
                                        </i>
                                    </button>

                                    <div class="hp-notification-menu dropdown-fade position-absolute pt-18" style="width: 288px; top: 100%;">
                                        <div class="pt-32 pb-18 px-18 rounded border hp-border-color-black-40 hp-bg-black-0 hp-bg-dark-100 hp-border-color-dark-80">
                                            <div class="row justify-content-between align-items-center mb-18">
                                                <div class="col hp-flex-none w-auto h5 hp-text-color-black-100 hp-text-color-dark-10 hp-text-color-dark-0 me-64 mb-0">Notifications</div>

                                                <div class="col hp-flex-none w-auto hp-bg-color-primary-1 rounded-pill hp-badge-text hp-text-color-black-0 py-4 px-6 me-12">4 New</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="hp-main-layout-content">
@yield('content')
        </div>
</main>
<div class="scroll-to-top">
    <button type="button" class="btn btn-primary btn-icon-only rounded-circle hp-primary-shadow">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg">
            <g>
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z"></path>
            </g>
        </svg>
    </button>
</div>
<div class="hp-theme-customizer">
    <div class="hp-theme-customizer-button">
        <div class="hp-theme-customizer-button-bg">
            <svg width="48" height="121" viewBox="0 0 48 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M38.6313 21.7613C46.5046 11.6029 47.6987 2.40985 48 0V61H0C1.03187 53.7789 1.67112 44.3597 13.2122 37.7607C22.0261 32.721 32.4115 29.7862 38.6313 21.7613Z" fill="white"></path>
                <path d="M38.6058 99.5632C46.502 109.568 47.6984 118.627 48 121V61H0C1.03532 68.1265 1.67539 77.4295 13.3283 83.9234C22.1048 88.8143 32.3812 91.6764 38.6058 99.5632Z" fill="white"></path>
            </svg>
        </div>

        <div class="hp-theme-customizer-button-icon">
                <span>
                    <span></span>
                    <span></span>
                    <span></span>
                </span>

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.19 0H5.81C2.17 0 0 2.17 0 5.81V14.18C0 17.83 2.17 20 5.81 20H14.18C17.82 20 19.99 17.83 19.99 14.19V5.81C20 2.17 17.83 0 14.19 0ZM5.67 3.5C5.67 3.09 6.01 2.75 6.42 2.75C6.83 2.75 7.17 3.09 7.17 3.5V7.4C7.17 7.81 6.83 8.15 6.42 8.15C6.01 8.15 5.67 7.81 5.67 7.4V3.5ZM7.52282 14.4313C7.31938 14.5216 7.17 14.7132 7.17 14.9358V16.5C7.17 16.91 6.83 17.25 6.42 17.25C6.01 17.25 5.67 16.91 5.67 16.5V14.9358C5.67 14.7132 5.5206 14.5216 5.31723 14.4311C4.36275 14.0064 3.7 13.058 3.7 11.95C3.7 10.45 4.92 9.22 6.42 9.22C7.92 9.22 9.15 10.44 9.15 11.95C9.15 13.0582 8.47913 14.0066 7.52282 14.4313ZM14.33 16.5C14.33 16.91 13.99 17.25 13.58 17.25C13.17 17.25 12.83 16.91 12.83 16.5V12.6C12.83 12.19 13.17 11.85 13.58 11.85C13.99 11.85 14.33 12.19 14.33 12.6V16.5ZM13.58 10.77C12.08 10.77 10.85 9.55 10.85 8.04C10.85 6.93185 11.5209 5.98342 12.4772 5.55873C12.6806 5.46839 12.83 5.27681 12.83 5.05421V3.5C12.83 3.09 13.17 2.75 13.58 2.75C13.99 2.75 14.33 3.09 14.33 3.5V5.06421C14.33 5.28681 14.4794 5.47835 14.6828 5.56885C15.6372 5.9936 16.3 6.94195 16.3 8.05C16.3 9.55 15.08 10.77 13.58 10.77Z" fill="#0010F7"></path>
            </svg>
        </div>
    </div>

    <div class="hp-theme-customizer-container bg-black-0 hp-bg-dark-90">
        <div class="hp-theme-customizer-container-header bg-black-10 hp-bg-dark-85 py-16 px-24">
            <div class="d-flex justify-content-between">
                <div>
                    <span class="h5 mb-0 d-block text-black-80 hp-text-color-dark-0">Customise your YODA</span>
                    <span class="hp-caption fw-medium d-block text-black-60">Preview in Real Time</span>
                </div>

                <div>
                    <button type="button" class="btn btn-text hp-bg-dark-85">
                        <i class="ri-close-fill text-black-80 hp-text-color-dark-0" style="font-size: 16px;"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="hp-theme-customizer-container-body pb-md-96 pb-mb-0 py-24 px-24">
            <div class="row mx-0 hp-theme-customizer-container-body-item">
                <div class="col-12 px-0 mb-16">
                    <span class="d-block hp-caption text-black-60">THEME</span>
                    <span class="d-block h5 mb-0 text-black-100 hp-text-color-dark-0">Dark &amp; Light</span>
                </div>

                <div class="col-12 px-0">
                    <div class="row g-24">
                        <div class="col-12 col-md-6">
                            <div class="hp-theme-customizer-container-body-item-svg active" data-theme="light">
                                <svg width="244" height="150" viewBox="0 0 244 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="242" height="148" fill="white"></rect>
                                    <rect width="37" height="138" transform="translate(6 6)" fill="#DFE6E9"></rect>
                                    <path d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3632 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z" fill="#B2BEC3"></path>
                                    <rect width="191" height="13" transform="translate(47 6)" fill="#DFE6E9"></rect>
                                    <rect width="191" height="122" transform="translate(47 22)" fill="#DFE6E9"></rect>
                                    <rect x="1" y="1" width="242" height="148" stroke="white" stroke-width="2"></rect>
                                </svg>

                                <div class="hp-theme-customizer-container-body-item-svg-check">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                                        <path d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z" fill="#2D3436"></path>
                                        <path d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z" fill="#2D3436"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="hp-theme-customizer-container-body-item-svg" data-theme="dark">
                                <svg width="244" height="150" viewBox="0 0 244 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="244" height="150" fill="#111314"></rect>
                                    <rect width="37" height="138" transform="translate(6 6)" fill="#2D3436"></rect>
                                    <path d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3633 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z" fill="#F7FAFC"></path>
                                    <rect width="191" height="13" transform="translate(47 6)" fill="#2D3436"></rect>
                                    <rect width="191" height="122" transform="translate(47 22)" fill="#2D3436"></rect>
                                    <rect width="244" height="150" stroke="#DFE6E9"></rect>
                                </svg>

                                <div class="hp-theme-customizer-container-body-item-svg-check">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                                        <path d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z" fill="#2D3436"></path>
                                        <path d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z" fill="#2D3436"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-0 hp-theme-customizer-container-body-item">
                <div class="col-12 mb-16 px-0">
                    <span class="d-block hp-caption text-black-60">CONTENT WIDTH</span>
                    <span class="d-block h5 mb-0 text-black-100 hp-text-color-dark-0">FULL Width &amp; Boxed</span>
                </div>

                <div class="col-12 px-0">
                    <div class="row g-24">
                        <div class="col-12 col-md-6">
                            <div class="hp-theme-customizer-container-body-item-svg active" data-content="full">
                                <svg width="244" height="150" viewBox="0 0 244 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="242" height="148" fill="white"></rect>
                                    <rect width="37" height="138" transform="translate(6 6)" fill="#DFE6E9"></rect>
                                    <path d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3632 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z" fill="#B2BEC3"></path>
                                    <rect width="191" height="13" transform="translate(47 6)" fill="#DFE6E9"></rect>
                                    <rect width="191" height="122" transform="translate(47 22)" fill="#DFE6E9"></rect>
                                    <rect x="1" y="1" width="242" height="148" stroke="white" stroke-width="2"></rect>
                                </svg>

                                <div class="hp-theme-customizer-container-body-item-svg-check">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                                        <path d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z" fill="#2D3436"></path>
                                        <path d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z" fill="#2D3436"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="hp-theme-customizer-container-body-item-svg" data-content="boxed">
                                <svg width="244" height="150" viewBox="0 0 244 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="244" height="150" fill="white"></rect>
                                    <rect width="37" height="138" transform="translate(6 6)" fill="#DFE6E9"></rect>
                                    <path d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3633 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z" fill="#B2BEC3"></path>
                                    <g clip-path="url(#clip0_5050:104461)">
                                        <rect width="133" height="13" transform="translate(76 6)" fill="#DFE6E9"></rect>
                                    </g>
                                    <rect width="133" height="122" transform="translate(76 22)" fill="#DFE6E9"></rect>
                                    <rect width="244" height="150" stroke="#DFE6E9"></rect>
                                    <defs>
                                        <clipPath id="clip0_5050:104461">
                                            <rect width="133" height="13" fill="white" transform="translate(76 6)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>

                                <div class="hp-theme-customizer-container-body-item-svg-check">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                                        <path d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z" fill="#2D3436"></path>
                                        <path d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z" fill="#2D3436"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
</script>
{{--{!! $chart->script() !!}--}}

@yield('scripts')
{{--<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>--}}
<!-- Plugin -->
<script src="app-assets/js/plugin/jquery.min.js"></script>
<script src="app-assets/js/plugin/bootstrap.bundle.min.js"></script>
<script src="app-assets/js/plugin/swiper-bundle.min.js"></script>
<script src="app-assets/js/plugin/jquery.mask.min.js"></script>
<script src="app-assets/js/plugin/autocomplete.min.js"></script>
<script src="app-assets/js/plugin/moment.min.js"></script>

<!-- Layouts -->
<script src="app-assets/js/layouts/header-search.js"></script>
<script src="app-assets/js/layouts/sider.js"></script>
<script src="app-assets/js/components/input-number.js"></script>

<!-- Base -->
<script src="app-assets/js/base/index.js"></script>
<!-- Customizer -->
<script src="app-assets/js/customizer.js"></script>

<!-- Charts -->
<script src="app-assets/js/plugin/apexcharts.min.js"></script>
<script src="app-assets/js/charts/apex-chart.js"></script>

<!-- Cards -->
<script src="app-assets/js/cards/card-analytic.js"></script>
<script src="app-assets/js/cards/card-advance.js"></script>
<script src="app-assets/js/cards/card-statistic.js"></script>

<!-- Custom -->
<script src="assets/js/main.js"></script>
<script src="js/dashboard-script.js"></script>
