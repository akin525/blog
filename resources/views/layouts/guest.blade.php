<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
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

        <!-- Pages -->
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">

        <!-- Custom -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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

    <div class="row hp-authentication-page">
            {{ $slot }}
        </div>
        <script>
            window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
        </script>
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

    <!-- Custom -->
    <script src="assets/js/main.js"></script>
    </body>
</html>
