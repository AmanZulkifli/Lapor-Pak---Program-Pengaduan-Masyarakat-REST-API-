<html class="">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="">
    <link id="builder-default-fonts"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <style id="css-utility-php-email-form">
        /* PHP Email Form Messages------------------------------*/
        .php-email-form .error-message {
            display: none;
            background: #df1529;
            color: #f4eff5;
            text-align: left;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }
        .php-email-form .sent-message {
            display: none;
            color: #f4eff5;
            background: #059652;
            text-align: center;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }
        .php-email-form .loading {
            display: none;
            background: var(--surface-color);
            text-align: center;
            padding: 15px;
            margin-bottom: 24px;
        }
        .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid var(--accent-color);
            border-top-color: var(--surface-color);
            animation: php-email-form-loading 1s linear infinite;
        }
        @keyframes php-email-form-loading {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <link id="builder-font-roboto"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link id="builder-font-raleway"
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link id="builder-font-poppins"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://builder.bootstrapmade.com/static/vendors/bootstrap/css/bootstrap.css?v=13">
    <link rel="stylesheet"
        href="https://builder.bootstrapmade.com/static/vendors/bootstrap-icons/bootstrap-icons.css?v=13">
    <link id="vendor-css-glightbox" rel="stylesheet"
        href="https://builder.bootstrapmade.com/static/vendors/glightbox/css/glightbox.min.css?v=13">
    <link id="vendor-css-swiper" rel="stylesheet"
        href="https://builder.bootstrapmade.com/static/vendors/swiper/swiper-bundle.min.css?v=13">
    <style id="builder-general-css">
        :root {
            --default-font: Roboto, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            --heading-font: Raleway;
            --nav-font: Poppins;
            --background-color: #f4eff5;
            --default-color: #6f8285;
            --heading-color: #526b24;
            --accent-color: #041A34;
            --surface-color: #f4eff5;
            --contrast-color: #f4eff5;
            --nav-color: #f4eff5;
            --nav-hover-color: #041A34;
            --nav-mobile-background-color: #f4eff5;
            --nav-dropdown-background-color: #f4eff5;
            --nav-dropdown-color: #6f8285;
            --nav-dropdown-hover-color: #041A34;
            scroll-behavior: smooth;
        }
        body {
            color: var(--default-color);
            background-color: var(--background-color);
            font-family: var(--default-font);
        }
        a {
            color: var(--accent-color);
            text-decoration: none;
            transition: 0.3s;
        }
        a:hover {
            color: color-mix(in srgb, var(--accent-color), transparent 25%);
            text-decoration: none;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--heading-color);
            font-family: var(--heading-font);
        }
        section,
        .section {
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 60px 0;
            scroll-margin-top: 100px;
            overflow: clip;
        }
        @media (max-width: 1199px) {
            section,
            .section {
                scroll-margin-top: 66px;
            }
        }
        .section-title {
            padding-bottom: 60px;
            position: relative;
        }
        .section-title h2 {
            font-size: 14px;
            font-weight: 500;
            padding: 0;
            line-height: 1px;
            margin: 0;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            position: relative;
        }
        .section-title h2::after {
            content: "";
            width: 120px;
            height: 1px;
            display: inline-block;
            background: var(--accent-color);
            margin: 4px 10px;
        }
        .section-title div {
            color: var(--heading-color);
            margin: 0;
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            font-family: var(--heading-font);
        }
        .page-title {
            color: var(--default-color);
            background-color: var(--background-color);
            position: relative;
        }
        .page-title .heading {
            padding: 160px 0 80px 0;
            border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }
        .page-title .heading h1 {
            font-size: 38px;
            font-weight: 700;
        }
        .page-title nav {
            background-color: color-mix(in srgb, var(--default-color), transparent 88%);
            padding: 20px 0;
        }
        .page-title nav ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            font-size: 16px;
            font-weight: 600;
        }
        .page-title nav ol li+li {
            padding-left: 10px;
        }
        .page-title nav ol li+li::before {
            content: "/";
            display: inline-block;
            padding-right: 10px;
            color: color-mix(in srgb, var(--default-color), transparent 70%);
        }
        .widgets-container {
            background-color: var(--surface-color);
            padding: 30px;
            margin: 60px 0 30px 0;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }
        .widget-title {
            color: var(--heading-color);
            font-size: 20px;
            font-weight: 700;
            padding: 0;
            margin: 0 0 20px 0;
        }
        .widget-item {
            margin-bottom: 40px;
        }
        .widget-item:last-child {
            margin-bottom: 0;
        }
    </style>
    <style id="builder-color-presets-css">
        [data-colorpreset="cp-light-background"],
        .light-background {
            --background-color: #f4f5fe;
            --surface-color: #f4eff5;
        }
        [data-colorpreset="cp-dark-background"],
        .dark-background {
            --background-color: #F2520d;
            --default-color: #f4eff5;
            --heading-color: #f4eff5;
            --surface-color: #0c0091;
            --contrast-color: #f4eff5;
        }
    </style>
    <style id="header-style">
        .header {
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 20px 0;
            transition: all 0.5s;
            z-index: 997;
        }
        .header .logo {
            line-height: 1;
        }
        .header .logo img {
            max-height: 32px;
            margin-right: 8px;
        }
        .header .logo h1 {
            font-size: 30px;
            margin: 0;
            font-weight: 700;
            color: var(--heading-color);
        }
        .scrolled .header {
            box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
        }
    </style>
    <style id="header-colors">
        .header {
            --background-color: #F2520d transparent 10%;
            --default-color: #f4eff5;
            --heading-color: #f4eff5;
            --nav-color: #f4eff5;
            --nav-hover-color: #041A34;
            --nav-mobile-background-color: #f4eff5;
            --nav-dropdown-background-color: #f4eff5;
            --nav-dropdown-color: #6f8285;
            --nav-dropdown-hover-color: #041A34;
        }
        .scrolled .header {
            --background-color: #F2520d ;
        }
    </style>
    <style id="nav-style">
        /* Navmenu - Desktop */
        @media (min-width: 1200px) {
            .navmenu {
                padding: 0;
            }
            .navmenu ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            }
            .navmenu li {
                position: relative;
            }
            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-color);
                padding: 18px 15px;
                font-size: 16px;
                font-family: var(--nav-font);
                font-weight: 400;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }
            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                transition: 0.3s;
            }
            .navmenu li:last-child a {
                padding-right: 0;
            }
            .navmenu li:hover>a,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-hover-color);
            }
            .navmenu .dropdown ul {
                margin: 0;
                padding: 10px 0;
                background: var(--nav-dropdown-background-color);
                display: block;
                position: absolute;
                visibility: hidden;
                left: 14px;
                top: 130%;
                opacity: 0;
                transition: 0.3s;
                border-radius: 4px;
                z-index: 99;
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            }
            .navmenu .dropdown ul li {
                min-width: 200px;
            }
            .navmenu .dropdown ul a {
                padding: 10px 20px;
                font-size: 15px;
                text-transform: none;
                color: var(--nav-dropdown-color);
            }
            .navmenu .dropdown ul a i {
                font-size: 12px;
            }
            .navmenu .dropdown ul a:hover,
            .navmenu .dropdown ul .active:hover,
            .navmenu .dropdown ul li:hover>a {
                color: var(--nav-dropdown-hover-color);
            }
            .navmenu .dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }
            .navmenu .dropdown .dropdown ul {
                top: 0;
                left: -90%;
                visibility: hidden;
            }
            .navmenu .dropdown .dropdown:hover>ul {
                opacity: 1;
                top: 0;
                left: -100%;
                visibility: visible;
            }
        }
        /* Navmenu - Mobile */
        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                color: var(--nav-color);
                font-size: 28px;
                line-height: 0;
                margin-right: 10px;
                cursor: pointer;
                transition: color 0.3s;
            }
            .navmenu {
                padding: 0;
                z-index: 9997;
            }
            .navmenu ul {
                display: none;
                list-style: none;
                position: absolute;
                inset: 60px 20px 20px 20px;
                padding: 10px 0;
                margin: 0;
                border-radius: 6px;
                background-color: var(--nav-mobile-background-color);
                overflow-y: auto;
                transition: 0.3s;
                z-index: 9998;
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            }
            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-dropdown-color);
                padding: 10px 20px;
                font-family: var(--nav-font);
                font-size: 17px;
                font-weight: 500;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }
            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: 0.3s;
                background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
            }
            .navmenu a i:hover,
            .navmenu a:focus i:hover {
                background-color: var(--accent-color);
                color: var(--contrast-color);
            }
            .navmenu a:hover,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-dropdown-hover-color);
            }
            .navmenu .active i,
            .navmenu .active:focus i {
                background-color: var(--accent-color);
                color: var(--contrast-color);
                transform: rotate(180deg);
            }
            .navmenu .dropdown ul {
                position: static;
                display: none;
                z-index: 99;
                padding: 10px 0;
                margin: 10px 20px;
                background-color: var(--nav-dropdown-background-color);
                border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
                box-shadow: none;
                transition: all .5s ease-in-out;
            }
            .navmenu .dropdown ul ul {
                background-color: rgba(33, 37, 41, 0.1);
            }
            .navmenu .dropdown>.dropdown-active {
                display: block;
                background-color: rgba(33, 37, 41, 0.03);
            }
            .mobile-nav-active {
                overflow: hidden;
            }
            .mobile-nav-active .mobile-nav-toggle {
                color: #fff;
                position: absolute;
                font-size: 32px;
                top: 15px;
                right: 15px;
                margin-right: 0;
                z-index: 9999;
            }
            .mobile-nav-active .navmenu {
                position: fixed;
                overflow: hidden;
                inset: 0;
                background: rgba(33, 37, 41, 0.8);
                transition: 0.3s;
            }
            .mobile-nav-active .navmenu>ul {
                display: block;
            }
        }
        /* Listing Dropdown - Desktop */
        @media (min-width: 1200px) {
            .navmenu .listing-dropdown {
                position: static;
            }
            .navmenu .listing-dropdown ul {
                margin: 0;
                padding: 10px;
                background: var(--nav-dropdown-background-color);
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
                position: absolute;
                top: 130%;
                left: 0;
                right: 0;
                visibility: hidden;
                opacity: 0;
                display: flex;
                transition: 0.3s;
                border-radius: 4px;
                z-index: 99;
            }
            .navmenu .listing-dropdown ul li {
                flex: 1;
            }
            .navmenu .listing-dropdown ul li a,
            .navmenu .listing-dropdown ul li:hover>a {
                padding: 10px 20px;
                font-size: 15px;
                color: var(--nav-dropdown-color);
                background-color: var(--nav-dropdown-background-color);
            }
            .navmenu .listing-dropdown ul li a:hover,
            .navmenu .listing-dropdown ul li .active,
            .navmenu .listing-dropdown ul li .active:hover {
                color: var(--nav-dropdown-hover-color);
                background-color: var(--nav-dropdown-background-color);
            }
            .navmenu .listing-dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }
        }
        /* Listing Dropdown - Mobile */
        @media (max-width: 1199px) {
            .navmenu .listing-dropdown ul {
                position: static;
                display: none;
                z-index: 99;
                padding: 10px 0;
                margin: 10px 20px;
                background-color: var(--nav-dropdown-background-color);
                border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
                box-shadow: none;
                transition: all .5s ease-in-out;
            }
            .navmenu .listing-dropdown ul ul {
                background-color: rgba(33, 37, 41, 0.1);
            }
            .navmenu .listing-dropdown>.dropdown-active {
                display: block;
                background-color: rgba(33, 37, 41, 0.03);
            }
        }
    </style>
    <style id="footer-style">
        .footer {
            background-color: var(--background-color);
            color: var(--default-color);
            padding-top: 60px;
            font-size: 14px;
            border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 80%);
        }
        .footer a {
            color: var(--default-color) !important;
        }
        .footer a:hover {
            color: var(--accent-color);
        }
        .footer .copyright {
            margin-top: 50px;
            position: relative;
            padding: 30px 0;
            border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 80%);
        }
        .footer .copyright p,
        .footer .copyright .credits {
            margin: 2px 0;
        }
        .footer .btn-learn-more {
            background-color: var(--accent-color);
            border-radius: 30px;
            padding: 8px 30px;
            border: 2px solid transparent;
            transition: 0.3s all ease-in-out;
            font-size: 14px;
            color: var(--contrast-color) !important;
        }
        .footer .btn-learn-more:hover {
            border-color: var(--accent-color);
            background-color: transparent;
            color: var(--accent-color) !important;
        }
        .footer .widget .widget-heading {
            font-size: 15px;
            color: var(--heading-color);
            margin-bottom: 20px;
        }
        .footer .widget ul li {
            margin-bottom: 10px;
            line-height: 1.5;
        }
        .footer .widget ul li a {
            color: color-mix(in srgb, var(--heading-color), transparent 50%);
        }
        .footer .widget ul li a:hover {
            text-decoration: none;
            color: var(--heading-color);
        }
        .footer .widget .footer-blog-entry .date {
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            font-size: 12px;
        }
        .footer .social-icons li {
            display: inline-block;
        }
        .footer .social-icons li a {
            display: inline-block;
            width: 40px;
            height: 40px;
            position: relative;
            border-radius: 50%;
            background: color-mix(in srgb, var(--default-color), transparent 90%);
        }
        .footer .social-icons li a span {
            color: color-mix(in srgb, var(--heading-color), transparent 0%);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s all ease-in-out;
        }
        .footer .social-icons li a:hover {
            background: var(--accent-color);
        }
        .footer .social-icons li a:hover span {
            color: var(--contrast-color);
        }
        .footer .social-icons li:first-child a {
            padding-left: 0;
        }
        .footer .footer-subscribe form {
            position: relative;
        }
        .footer .footer-subscribe .form-control {
            font-size: 14px;
            height: 42px;
            border: 2px solid color-mix(in srgb, var(--default-color), transparent 40%);
            background: none;
            color: var(--heading-color);
            padding-right: 40px;
        }
        .footer .footer-subscribe .form-control:focus {
            border-color: color-mix(in srgb, var(--default-color), transparent 10%);
            box-shadow: none;
        }
        .footer .footer-subscribe .form-control::placeholder {
            color: color-mix(in srgb, var(--heading-color), transparent 60%);
        }
        .footer .footer-subscribe .btn-link {
            padding: 0;
            margin: 0;
            font-size: 1.5rem;
            background-color: none;
            border-color: none;
            position: absolute;
            line-height: 0;
            color: color-mix(in srgb, var(--heading-color), transparent 20%);
            top: 20px;
            right: 10px;
            transform: translateY(-50%) rotate(0deg);
        }
        .footer .footer-subscribe .btn-link:hover,
        .footer .footer-subscribe .btn-link:focus,
        .footer .footer-subscribe .btn-link:active {
            text-decoration: none;
        }
    </style>
    <style id="scrolltop-style">
        .scroll-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 99999;
            background-color: var(--accent-color);
            width: 40px;
            height: 40px;
            border-radius: 4px;
            transition: all 0.4s;
        }
        .scroll-top i {
            font-size: 24px;
            color: var(--contrast-color);
            line-height: 0;
        }
        .scroll-top:hover {
            background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
            color: var(--contrast-color);
        }
        .scroll-top.active {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <style id="section-Wx1F9FPrD8-style">
        .hero {
            width: 100%;
            min-height: 70vh;
            position: relative;
            padding: 120px 0 120px 0;
            display: flex;
            align-items: center;
        }
        .hero .hero-bg {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }
        .hero:before {
            content: "";
            background: color-mix(in srgb, var(--background-color), transparent 10%);
            position: absolute;
            inset: 0;
            z-index: 2;
        }
        .hero .container {
            position: relative;
            z-index: 3;
        }
        .hero h1 {
            margin: 0 0 20px 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 56px;
            color: color-mix(in srgb, var(--heading-color), transparent 30%);
        }
        .hero h1 span {
            color: var(--heading-color);
            border-bottom: 4px solid var(--accent-color);
        }
        .hero p {
            color: color-mix(in srgb, var(--default-color), transparent 30%);
            margin: 5px 0 30px 0;
            font-size: 22px;
            font-weight: 400;
        }
        .hero .btn-get-started {
            color: var(--contrast-color);
            background: var(--accent-color);
            font-family: var(--heading-font);
            font-weight: 400;
            font-size: 15px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 28px 12px 28px;
            border-radius: 50px;
            transition: 0.5s;
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
        }
        .hero .btn-get-started:hover {
            color: var(--contrast-color);
            background: color-mix(in srgb, var(--accent-color), transparent 15%);
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
        }
        .hero .btn-watch-video {
            font-size: 16px;
            transition: 0.5s;
            margin-left: 25px;
            color: var(--default-color);
            font-weight: 600;
        }
        .hero .btn-watch-video i {
            color: var(--accent-color);
            font-size: 32px;
            transition: 0.3s;
            line-height: 0;
            margin-right: 8px;
        }
        .hero .btn-watch-video:hover {
            color: var(--accent-color);
        }
        .hero .btn-watch-video:hover i {
            color: color-mix(in srgb, var(--accent-color), transparent 15%);
        }
        .hero .animated {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
        }
        @media (max-width: 640px) {
            .hero h1 {
                font-size: 28px;
                line-height: 36px;
            }
            .hero p {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }
            .hero .btn-get-started,
            .hero .btn-watch-video {
                font-size: 13px;
            }
        }
        .hero .hero-waves {
            display: block;
            width: 100%;
            height: 60px;
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 3;
        }
        .hero .wave1 use {
            animation: move-forever1 10s linear infinite;
            animation-delay: -2s;
            fill: var(--default-color);
            opacity: 0.6;
        }
        .hero .wave2 use {
            animation: move-forever2 8s linear infinite;
            animation-delay: -2s;
            fill: var(--default-color);
            opacity: 0.4;
        }
        .hero .wave3 use {
            animation: move-forever3 6s linear infinite;
            animation-delay: -2s;
            fill: var(--default-color);
        }
        @keyframes move-forever1 {
            0% {
                transform: translate(85px, 0%);
            }
            100% {
                transform: translate(-90px, 0%);
            }
        }
        @keyframes move-forever2 {
            0% {
                transform: translate(-90px, 0%);
            }
            100% {
                transform: translate(85px, 0%);
            }
        }
        @keyframes move-forever3 {
            0% {
                transform: translate(-90px, 0%);
            }
            100% {
                transform: translate(85px, 0%);
            }
        }
        @keyframes up-down {
            0% {
                transform: translateY(10px);
            }
            100% {
                transform: translateY(-10px);
            }
        }
    </style>
    <style id="section-iKEdvevp2K-style">
        .about {
            padding-top: 100px;
        }
        .about .content h3 {
            font-size: 16px;
            font-weight: 500;
            line-height: 19px;
            padding: 10px 20px;
            background: color-mix(in srgb, var(--accent-color), transparent 95%);
            color: var(--accent-color);
            border-radius: 7px;
            display: inline-block;
        }
        .about .content h2 {
            font-weight: 700;
        }
        .about .content p:last-child {
            margin-bottom: 0;
        }
        .about .content .read-more {
            background: var(--accent-color);
            color: var(--contrast-color);
            font-family: var(--heading-font);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            padding: 12px 24px;
            border-radius: 5px;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .about .content .read-more i {
            font-size: 18px;
            margin-left: 5px;
            line-height: 0;
            transition: 0.3s;
        }
        .about .content .read-more:hover {
            background: color-mix(in srgb, var(--accent-color), transparent 20%);
            padding-right: 19px;
        }
        .about .content .read-more:hover i {
            margin-left: 10px;
        }
        .about .icon-box {
            background-color: var(--surface-color);
            padding: 50px 40px;
            box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: all 0.3s ease-out 0s;
        }
        .about .icon-box i {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            font-size: 32px;
            line-height: 0;
            transition: all 0.4s ease-out 0s;
            background-color: color-mix(in srgb, var(--accent-color), transparent 95%);
            color: var(--accent-color);
        }
        .about .icon-box h3 {
            margin-bottom: 10px;
            font-size: 24px;
            font-weight: 700;
        }
        .about .icon-box p {
            margin-bottom: 0;
        }
        .about .icon-box:hover i {
            background-color: var(--accent-color);
            color: var(--contrast-color);
        }
        .about .icon-boxes .col-md-6:nth-child(2) .icon-box,
        .about .icon-boxes .col-md-6:nth-child(4) .icon-box {
            margin-top: -40px;
        }
        @media (max-width: 768px) {
            .about .icon-boxes .col-md-6:nth-child(2) .icon-box,
            .about .icon-boxes .col-md-6:nth-child(4) .icon-box {
                margin-top: 0;
            }
        }
    </style>
    <style id="section-yLbTUdzPpM-style">
        .team .member {
            position: relative;
        }
        .team .member .pic {
            overflow: hidden;
            margin-bottom: 50px;
        }
        .team .member .member-info {
            background-color: var(--surface-color);
            color: color-mix(in srgb, var(--default-color), transparent 20%);
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            position: absolute;
            bottom: -50px;
            left: 20px;
            right: 20px;
            padding: 20px 15px;
            overflow: hidden;
            transition: 0.5s;
        }
        .team .member h4 {
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 16px;
            position: relative;
            padding-bottom: 10px;
        }
        .team .member h4::after {
            content: "";
            position: absolute;
            display: block;
            width: 50px;
            height: 1px;
            background: color-mix(in srgb, var(--default-color), transparent 60%);
            bottom: 0;
            left: 0;
        }
        .team .member span {
            font-style: italic;
            display: block;
            font-size: 13px;
        }
        .team .member .social {
            position: absolute;
            right: 15px;
            bottom: 15px;
        }
        .team .member .social a {
            transition: color 0.3s;
            color: color-mix(in srgb, var(--default-color), transparent 70%);
        }
        .team .member .social a:hover {
            color: var(--accent-color);
        }
        .team .member .social i {
            font-size: 16px;
            margin: 0 2px;
        }
    </style>
    <style id="section-U5EuO6g6Bc-style">
        .stats-2 {
            position: relative;
            padding: 120px 0;
        }
        .stats-2 img {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }
        .stats-2:before {
            content: "";
            background: color-mix(in srgb, var(--background-color), transparent 30%);
            position: absolute;
            inset: 0;
            z-index: 2;
        }
        .stats-2 .container {
            position: relative;
            z-index: 3;
        }
        .stats-2 .stats-item {
            padding: 30px;
            width: 100%;
        }
        .stats-2 .stats-item span {
            font-size: 48px;
            display: block;
            color: var(--default-color);
            font-weight: 700;
        }
        .stats-2 .stats-item p {
            padding: 0;
            margin: 0;
            font-family: var(--heading-font);
            font-size: 16px;
            font-weight: 700;
            color: color-mix(in srgb, var(--default-color), transparent 40%);
        }
    </style>
    <style id="section-U5EuO6g6Bc-colors">
        #section-U5EuO6g6Bc .stats-2,
        #section-U5EuO6g6Bc section {
            --background-color: #F2520d;
        }
    </style>
    <link id="builder-main-style" rel="stylesheet"
        href="https://builder.bootstrapmade.com/assets/css/builder.css?v=33161312512024-08-07 10:55">
    <style id="builder-header-offsets">
        .builder-add-components-btn {
            margin-top: 132.5px;
        }
        .page-title~.builder-add-components-btn {
            margin-top: 40px;
        }
        .builder-add-placeholder {
            margin-top: 132.5px;
        }
        .page-title~.builder-add-placeholder,
        .builder-section-wrap+.builder-add-placeholder {
            margin-top: 40px;
        }
        .builder-section-wrap:first-of-type .builder-section-hover-left,
        .builder-section-wrap:first-of-type .builder-section-hover-right {
            top: 107.5px;
        }
        .builder-section-wrap:first-of-type .builder-section-hover-top {
            top: 92.5px;
        }
        ;
    </style>
    <style>
        .patternbos {
  width: 100%;
  height: 100%;
  --s: 194px; /* control the size */
  --c1: #f6edb3;
  --c2: #acc4a3;

  --_l: #0000 calc(25% / 3), var(--c1) 0 25%, #0000 0;
  --_g: conic-gradient(from 120deg at 50% 87.5%, var(--c1) 120deg, #0000 0);

  background: var(--_g), var(--_g) 0 calc(var(--s) / 2),
    conic-gradient(from 180deg at 75%, var(--c2) 60deg, #0000 0),
    conic-gradient(from 60deg at 75% 75%, var(--c1) 0 60deg, #0000 0),
    linear-gradient(150deg, var(--_l)) 0 calc(var(--s) / 2),
    conic-gradient(
      at 25% 25%,
      #0000 50%,
      var(--c2) 0 240deg,
      var(--c1) 0 300deg,
      var(--c2) 0
    ),
    linear-gradient(-150deg, var(--_l)) #55897c /* third color here */;
  background-size: calc(0.866 * var(--s)) var(--s);
}

    </style>
    <script type="text/javascript" id="www-widgetapi-script"
        src="https://www.youtube.com/s/player/2f238d39/www-widgetapi.vflset/www-widgetapi.js" async=""></script>
    <script src="https://www.youtube.com/iframe_api" async=""></script>
</head>
<body class="builder-mode index-page scrolled">
    <div hidden="" id="sprite-plyr"><svg
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol id="plyr-airplay" viewBox="0 0 18 18">
                <path d="M16 1H2a1 1 0 00-1 1v10a1 1 0 001 1h3v-2H3V3h12v8h-2v2h3a1 1 0 001-1V2a1 1 0 00-1-1z"></path>
                <path d="M4 17h10l-5-6z"></path>
            </symbol>
            <symbol id="plyr-captions-off" viewBox="0 0 18 18">
                <path
                    d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z"
                    fill-rule="evenodd" fill-opacity=".5"></path>
            </symbol>
            <symbol id="plyr-captions-on" viewBox="0 0 18 18">
                <path
                    d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="plyr-download" viewBox="0 0 18 18">
                <path
                    d="M9 13c.3 0 .5-.1.7-.3L15.4 7 14 5.6l-4 4V1H8v8.6l-4-4L2.6 7l5.7 5.7c.2.2.4.3.7.3zm-7 2h14v2H2z">
                </path>
            </symbol>
            <symbol id="plyr-enter-fullscreen" viewBox="0 0 18 18">
                <path d="M10 3h3.6l-4 4L11 8.4l4-4V8h2V1h-7zM7 9.6l-4 4V10H1v7h7v-2H4.4l4-4z"></path>
            </symbol>
            <symbol id="plyr-exit-fullscreen" viewBox="0 0 18 18">
                <path d="M1 12h3.6l-4 4L2 17.4l4-4V17h2v-7H1zM16 .6l-4 4V1h-2v7h7V6h-3.6l4-4z"></path>
            </symbol>
            <symbol id="plyr-fast-forward" viewBox="0 0 18 18">
                <path d="M7.875 7.171L0 1v16l7.875-6.171V17L18 9 7.875 1z"></path>
            </symbol>
            <symbol id="plyr-logo-vimeo" viewBox="0 0 18 18">
                <path
                    d="M17 5.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C5 10.9 4.4 6 3 6c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z">
                </path>
            </symbol>
            <symbol id="plyr-logo-youtube" viewBox="0 0 18 18">
                <path
                    d="M16.8 5.8c-.2-1.3-.8-2.2-2.2-2.4C12.4 3 9 3 9 3s-3.4 0-5.6.4C2 3.6 1.3 4.5 1.2 5.8 1 7.1 1 9 1 9s0 1.9.2 3.2c.2 1.3.8 2.2 2.2 2.4C5.6 15 9 15 9 15s3.4 0 5.6-.4c1.4-.3 2-1.1 2.2-2.4.2-1.3.2-3.2.2-3.2s0-1.9-.2-3.2zM7 12V6l5 3-5 3z">
                </path>
            </symbol>
            <symbol id="plyr-muted" viewBox="0 0 18 18">
                <path
                    d="M12.4 12.5l2.1-2.1 2.1 2.1 1.4-1.4L15.9 9 18 6.9l-1.4-1.4-2.1 2.1-2.1-2.1L11 6.9 13.1 9 11 11.1zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z">
                </path>
            </symbol>
            <symbol id="plyr-pause" viewBox="0 0 18 18">
                <path
                    d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zm6 0c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z">
                </path>
            </symbol>
            <symbol id="plyr-pip" viewBox="0 0 18 18">
                <path d="M13.293 3.293L7.022 9.564l1.414 1.414 6.271-6.271L17 7V1h-6z"></path>
                <path d="M13 15H3V5h5V3H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1v-6h-2v5z"></path>
            </symbol>
            <symbol id="plyr-play" viewBox="0 0 18 18">
                <path
                    d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z">
                </path>
            </symbol>
            <symbol id="plyr-restart" viewBox="0 0 18 18">
                <path
                    d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z">
                </path>
            </symbol>
            <symbol id="plyr-rewind" viewBox="0 0 18 18">
                <path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z"></path>
            </symbol>
            <symbol id="plyr-settings" viewBox="0 0 18 18">
                <path
                    d="M16.135 7.784a2 2 0 01-1.23-2.969c.322-.536.225-.998-.094-1.316l-.31-.31c-.318-.318-.78-.415-1.316-.094a2 2 0 01-2.969-1.23C10.065 1.258 9.669 1 9.219 1h-.438c-.45 0-.845.258-.997.865a2 2 0 01-2.969 1.23c-.536-.322-.999-.225-1.317.093l-.31.31c-.318.318-.415.781-.093 1.317a2 2 0 01-1.23 2.969C1.26 7.935 1 8.33 1 8.781v.438c0 .45.258.845.865.997a2 2 0 011.23 2.969c-.322.536-.225.998.094 1.316l.31.31c.319.319.782.415 1.316.094a2 2 0 012.969 1.23c.151.607.547.865.997.865h.438c.45 0 .845-.258.997-.865a2 2 0 012.969-1.23c.535.321.997.225 1.316-.094l.31-.31c.318-.318.415-.781.094-1.316a2 2 0 011.23-2.969c.607-.151.865-.547.865-.997v-.438c0-.451-.26-.846-.865-.997zM9 12a3 3 0 110-6 3 3 0 010 6z">
                </path>
            </symbol>
            <symbol id="plyr-volume" viewBox="0 0 18 18">
                <path
                    d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z">
                </path>
                <path
                    d="M11.282 5.282a.909.909 0 000 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 000 1.316c.145.145.636.262 1.018.156a.725.725 0 00.298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 00-1.316 0zm-7.496.726H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z">
                </path>
            </symbol>
        </svg></div><a href="#" id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center active"><i
            class="fa-solid fa-arrow-up"></i></a>
    <header id="header" class="header d-flex align-items-center fixed-top" data-builder="header"
        data-js=" scrolled scroll-up-sticky">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center" spellcheck="false">
                <img src="{{ asset('assets/images/LogoLapor.png') }}" alt="" width="100%">
            </a>
            <nav id="navmenu" class="navmenu" data-builder="navmenu"
                data-js=" mobile-nav-toggle mobile-nav-dropdown">
                <ul>
                    <li><a href="#hero" class="btn">Laman Utama</a></li>
                    <li><a href="{{ route('report') }}" class="btn">Pengaduan</a></li>
                    <li><a href="{{ route('login') }}" class="btn">Masuk</a></li>
                    <li><a href="{{ route('register') }}" class="btn btn-outline-light p-2">Daftar</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none fa fa-bars"></i>
            </nav>
        </div>
    </header>
    <main class="main" id="page-sjhdfjhdsjh" data-name="index">
        <slot type="page-title"></slot>
        <div id="section-Wx1F9FPrD8" class="builder-section-wrap position-relative " data-js=" glightbox">
            <section id="hero" class="hero section" data-builder="section"
                data-colorpreset="cp-dark-background">
                <div class="hero-bg patternbos"></div>
                <div class="container">
                    <div class="row gy-4 justify-content-between">
                        <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                            <img src="{{ asset('assets/images/Megaphone.png')}}" class="img-fluid animated"
                                alt="">
                        </div>
                        <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                            <h1 spellcheck="false">Hello! Welcome to&nbsp;<span>Lapor PAK!</span></h1>
                            <p spellcheck="false">Kami adalah platform penyelenggaraan pengaduan masyarakat</p>
                            <div class="d-flex">
                                <a href="#about" class="btn-get-started">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="wave-path"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                    </defs>
                    <g class="wave1">
                        <use xlink:href="#wave-path" x="50" y="3"></use>
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path" x="50" y="0"></use>
                    </g>
                    <g class="wave3">
                        <use xlink:href="#wave-path" x="50" y="9"></use>
                    </g>
                </svg>
            </section>
        </div>
        <div id="section-iKEdvevp2K" class="builder-section-wrap position-relative ">
            <section id="about" class="about section" data-builder="section">
                <slot type="section-title"></slot>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-xl-center gy-5">
                        <div class="col-xl-5 content">
                            <h3>About Us</h3>
                            <h2 spellcheck="false">Get to know us better!</h2>
                            <p spellcheck="false">At RecyclePro, we are passionate about creating a cleaner, greener
                                planet by empowering individuals and businesses to manage their waste efficiently.
                                We believe that recycling is more than a chore—it's a powerful tool for transforming
                                waste into valuable resources that benefit both the environment and the economy.</p>
                            <a href="#" class="read-more"><span>Try it now!</span><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-people-group"></i>
                                        <h3 spellcheck="false">Empowering Communities</h3>
                                        <p spellcheck="false">Help communities understand the value of their
                                            waste. By providing education and resources, we empower people to take
                                            control of their environmental impact, one recycled item at a time.</p>
                                    </div>
                                </div> 
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <h3 spellcheck="false">Sustainable Solutions</h3>
                                        <p spellcheck="false">Our platform connects businesses and individuals with
                                            sustainable waste management solutions. Together, we can reduce landfill
                                            waste and promote a circular economy that benefits everyone.</p>
                                    </div>
                                </div> 
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-recycle"></i>
                                        <h3 spellcheck="false">Economic Benefits of Recycling</h3>
                                        <p spellcheck="false">Recycling doesn’t just save the planet—it can also save
                                            money. Discover how turning waste into resources can create new
                                            opportunities for businesses and provide financial incentives for
                                            communities.</p>
                                    </div>
                                </div> 
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-chart-line"></i>
                                        <h3 spellcheck="false">Data-Driven Impact</h3>
                                        <p spellcheck="false">Track your recycling habits and see the difference you’re
                                            making. RecyclePro helps you measure your progress and provides insights on
                                            how to improve your recycling efforts for maximum impact.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="section-yLbTUdzPpM" class="builder-section-wrap position-relative ">
            <section id="team" class="team section" data-builder="section">
                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <div><span spellcheck="false" class="">Check out Our</span> <span class="description-title"
                            spellcheck="false">Team</span></div>
                </div>
                <slot type="section-title"></slot>
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="pic"><img src="{{ asset('assets/images/pp.jpeg') }}" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4 spellcheck="false" class="">Tegar Badruzzaman Zulkifli</h4>
                                    <span spellcheck="false" class="">Program Developer</span>
                                    <div class="social">
                                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                        <a href=""><i class="fa-brands fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="member">
                                <div class="pic"><img src="{{ asset('assets/images/dyah.png') }}"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4 spellcheck="false" class="">Dyah Primi Paramitha</h4>
                                    <span spellcheck="false">Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="member">
                                <div class="pic"><img src="{{ asset('assets/images/satir.png') }}"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4 spellcheck="false" class="">Dhia Antar Satir</h4>
                                    <span spellcheck="false">CTO</span>
                                    <div class="social">
                                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="section-U5EuO6g6Bc" class="builder-section-wrap position-relative " data-js=" purecounter">
            <section id="stats-2" class="stats-2 section" data-builder="section"
                data-colorpreset="cp-dark-background">
                <slot type="section-title"></slot>
                <img src="https://builder.bootstrapmade.com/static/img/stats-bg.jpg" alt=""
                    data-aos="fade-in">
                <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="0" class="purecounter"
                                    data-no-editable="true">232</span>
                                <p spellcheck="false">Users</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="53"
                                    data-purecounter-duration="0" class="purecounter"
                                    data-no-editable="true">521</span>
                                <p spellcheck="false" class="">Affiliates</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453"
                                    data-purecounter-duration="0" class="purecounter"
                                    data-no-editable="true">1453</span>
                                <p spellcheck="false">Hours Of Support</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32"
                                    data-purecounter-duration="0" class="purecounter"
                                    data-no-editable="true">32</span>
                                <p spellcheck="false">Workers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer id="footer" class="footer" data-builder="footer" data-colorpreset="cp-dark-background">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <div class="widget">
                        <h3 class="widget-heading" spellcheck="false">About Us</h3>
                        <p class="mb-4" spellcheck="false">
                            RecyclePro is committed to leading the way toward a cleaner, greener future by empowering
                            communities and businesses to manage their waste responsibly. Join us on our mission to make
                            recycling simple and rewarding.
                        </p>
                        <p class="mb-0">
                            <a href="#" class="btn-learn-more">Learn more</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
                    <div class="widget">
                        <h3 class="widget-heading" spellcheck="false">Navigation</h3>
                        <ul class="list-unstyled float-start me-5">
                            <li><a href="#hero">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li spellcheck="false">How It Works</li>
                        </ul>
                        <ul class="list-unstyled float-start">
                            <li><a href="#">Contact Us</a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5">
                    <div class="widget">
                        <h3 class="widget-heading" spellcheck="false">Connect With Us!</h3>
                        <ul class="list-unstyled social-icons light mb-3">
                            <li>
                                <a href="#"><span><i class="fa-brands fa-x-twitter"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa-brands fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa-brands fa-google"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <div class="footer-subscribe">
                            <h3 class="widget-heading" spellcheck="false">Subscribe</h3>
                            <form action="forms/newsletter.php" method="post" class="php-email-form">
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter your email">
                                    <button type="submit" class="btn btn-link">
                                        <span><i class="fa-solid fa-chevron-right"></i></span>
                                    </button>
                                </div>
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your subscription request has been sent. Thank you!
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">RecyclePro</strong> <span>All Rights
                        Reserved</span></p>
            </div>
        </div>
    </footer>
    @stack('script')
    <script id="builder-vendors-bootstrap-js"
        src="https://builder.bootstrapmade.com/static/vendors/bootstrap/js/bootstrap.bundle.min.js?v=13"></script>
    <script id="builder-vendors-aos-js" src="https://builder.bootstrapmade.com/static/vendors/aos/aos.js?v=13 "></script>
    <script id="vendor-js-php-email-form"
        src="https://builder.bootstrapmade.com/static/vendors/php-email-form/validate.js?v=13"></script>
    <script id="vendor-js-glightbox"
        src="https://builder.bootstrapmade.com/static/vendors/glightbox/js/glightbox.min.js?v=13"></script>
    <script id="vendor-js-purecounter"
        src="https://builder.bootstrapmade.com/static/vendors/purecounter/purecounter_vanilla.js?v=13"></script>
    <script id="vendor-js-swiper" src="https://builder.bootstrapmade.com/static/vendors/swiper/swiper-bundle.min.js?v=13">
    </script>
    <script id="builder-vendors-js"></script>
    <script id="js-scrolled" class="components-js">
        (() => {
            /**
             * Apply .scrolled class to the body as the page is scrolled down
             */
            function toggleScrolled() {
                const selectBody = document.querySelector('body');
                const selectHeader = document.querySelector('#header');
                if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains(
                        'sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
                window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
            }
            document.addEventListener('scroll', toggleScrolled);
            window.addEventListener('load', toggleScrolled);
        })();
    </script>
    <script id="js-scroll-up-sticky" class="components-js">
        (() => {
            /**
             * Scroll up sticky header to headers with .scroll-up-sticky class
             */
            let lastScrollTop = 0;
            window.addEventListener('scroll', function() {
                const selectHeader = document.querySelector('#header');
                if (!selectHeader.classList.contains('scroll-up-sticky')) return;
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                if (scrollTop > lastScrollTop && scrollTop > selectHeader.offsetHeight) {
                    selectHeader.style.setProperty('position', 'sticky', 'important');
                    selectHeader.style.top = `-${header.offsetHeight + 50}px`;
                } else if (scrollTop > selectHeader.offsetHeight) {
                    selectHeader.style.setProperty('position', 'sticky', 'important');
                    selectHeader.style.top = "0";
                } else {
                    selectHeader.style.removeProperty('top');
                    selectHeader.style.removeProperty('position');
                }
                lastScrollTop = scrollTop;
            });
        })();
    </script>
    <script id="js-scroll-top" class="components-js">
        (() => {
            /**
             * Scroll top button
             */
            let scrollTop = document.querySelector('.scroll-top');
            function toggleScrollTop() {
                if (scrollTop) {
                    window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
                }
            }
            scrollTop.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            window.addEventListener('load', toggleScrollTop);
            document.addEventListener('scroll', toggleScrollTop);
        })();
    </script>
    <script id="js-init-swiper" class="components-js">
        (() => {
            /**
             * Init swiper sliders
             */
            function initSwiper() {
                document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
                    let config = JSON.parse(
                        swiperElement.querySelector(".swiper-config").innerHTML.trim()
                    );
                    if (swiperElement.classList.contains("swiper-tab")) {
                        initSwiperWithCustomPagination(swiperElement, config);
                    } else {
                        new Swiper(swiperElement, config);
                    }
                });
            }
            window.addEventListener("load", initSwiper);
        })();
    </script>
    <script id="js-faq" class="components-js">
        (() => {
            /**
             * Frequently Asked Questions Toggle
             */
            document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
                faqItem.addEventListener('click', () => {
                    faqItem.parentNode.classList.toggle('faq-active');
                });
            });
        })();
    </script>
    <script id="js-purecounter" class="components-js">
        (() => {
            /**
             * Initiate Pure Counter
             */
            new PureCounter();
        })();
    </script>
    <script id="js-glightbox" class="components-js">
        (() => {
            /**
             * Initiate glightbox
             */
            const glightbox = GLightbox({
                selector: '.glightbox'
            });
        })();
    </script>
    <script id="js-mobile-nav-toggle" class="components-js">
        (() => {
            /**
             * Mobile nav toggle
             */
            const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');
            function mobileNavToogle() {
                document.querySelector('body').classList.toggle('mobile-nav-active');
                mobileNavToggleBtn.classList.toggle('bi-list');
                mobileNavToggleBtn.classList.toggle('bi-x');
            }
            if (mobileNavToggleBtn) {
                mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
            }
            /**
             * Hide mobile nav on same-page/hash links
             */
            document.querySelectorAll('#navmenu a').forEach(navmenu => {
                navmenu.addEventListener('click', () => {
                    if (document.querySelector('.mobile-nav-active')) {
                        mobileNavToogle();
                    }
                });
            });
        })();
    </script>
    <script id="js-mobile-nav-dropdown" class="components-js">
        (() => {
            /**
             * Toggle mobile nav dropdowns
             */
            document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
                navmenu.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.parentNode.classList.toggle('active');
                    this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
                    e.stopImmediatePropagation();
                });
            });
        })();
    </script>
    <script id="builder-js"></script>
    <script type="text/javascript" src="https://cdn.plyr.io/3.6.12/plyr.js"></script>
</body>
</html>