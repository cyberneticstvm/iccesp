<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICCESP - 2024</title>

    <meta name="keywords" content="ASCE" />
    <meta name="description" content="American Society for Civil Engineers. Second International Conference in Civil Engineering for Sustainable Planet">
    <meta name="author" content="cybernetics.me">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/web/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('/web/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/web/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/web/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/theme-shop.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('/web/css/demos/demo-insurance.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('/web/css/skins/skin-insurance.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/web/css/custom.css') }}">

</head>

<body>

    <div class="body">
        <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickySetTop': '-70px', 'stickyChangeLogo': true}">
            <div class="header-body border-0 box-shadow-none">
                <div class="header-container container">
                    <div class="header-row py-2">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo mb-0">
                                    <a href="/">
                                        <img alt="Porto" width="123" height="46" src="{{ asset('/web/img/demos/insurance/iccesp-logo.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end align-items-center flex-row">
                            <div class="header-nav-features">
                                <a href="tel:+919562417322" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1 me-3">
                                    <i class="icon icon-phone text-4-5 me-2"></i>
                                    +91 9562417322, +91 9048550123
                                </a>
                            </div>
                            <div class="header-nav-features d-none d-md-block">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex align-items-center">
                                    <a href="#" class="header-nav-features-toggle text-color-dark font-weight-semibold text-decoration-none ms-1" data-focus="headerSearch">
                                        <i class="icons icon-magnifier header-nav-top-icon font-weight-semibold text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
                                        Search
                                    </a>
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0 top-10 right-0" id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                <button class="btn" type="submit" aria-label="Search">
                                                    <i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-bar z-index-0">
                    <div class="container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row align-items-center justify-content-end">
                                    <div class="header-nav header-nav-links justify-content-start mb-3">
                                        <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}" href="/">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link {{ (request()->segment(1) == 'about') ? 'active' : '' }}" href="{{ route('about') }}">
                                                            About the Conference
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="demo-insurance-agents.html">
                                                            Abstract Guidelines
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="demo-insurance-agents.html">
                                                            Registration
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="demo-insurance-blog.html">
                                                            Advisory Committee
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="demo-insurance-contact.html">
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <a href="#" class="position-relative top-5 btn btn-outline btn-rounded btn-secondary text-2 font-weight-bold text-uppercase px-5 btn-py-2 mb-3">REGISTER NOW</a>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield("content")
        <section class="section section-height-3 bg-primary position-relative z-index-1 border-0 m-0">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <div class="col-xl-7 text-center text-xl-start">
                        <h3 class="text-color-light font-weight-medium text-4 mb-1">IMPORTANT DATES</h3>
                        <p class="text-color-light font-weight-semibold opacity-8 text-4 mb-0">Last date for Abstract Submission : April 1, 2024</p>
                        <p class="text-color-light font-weight-semibold opacity-8 text-4 mb-0">Intimation and Acceptance of Abstract :May 1, 2024</p>
                        <p class="text-color-light font-weight-semibold opacity-8 text-4 mb-0">Last date for full paper submission: </p>
                    </div>
                    <div class="col-xl-5">
                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-xl-end">
                            <div class="d-inline-flex align-items-center mb-4 mb-sm-0">
                                <i class="icons icon-phone text-7 text-color-light position-relative bottom-2"></i>
                                <div class="ps-2">
                                    <span class="d-block text-2 font-weight-medium text-color-light line-height-1">CALL NOW!</span>
                                    <strong class="text-4"><a href="tel:+919562417322" class="text-color-light text-decoration-none">9562417322</a></strong>
                                </div>
                            </div>
                            <div class="custom-divider px-3 me-3 ms-5-5 d-none d-sm-block"></div>
                            <a href="#" class="btn btn-light btn-rounded font-weight-bold border-0 text-color-dark text-3 px-5 btn-py-3">REGISTER NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer" class="position-relative bg-transparent border-top-0">
            <svg version="1.1" class="custom-svg-position-4" width="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 393.35 539.93" data-appear-animation-svg="true">
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="450" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M28.37,469.29c2.49-4.63,6.2-10.92,11.4-17.87c15.63-20.86,33.61-32.82,43.74-38.64
						c26.56-15.25,50.74-17.9,60.77-18.89c4.57-0.45,10.99-0.53,23.83-0.68c36.32-0.43,40.17,1.96,58.38,0.17
						c9-0.89,23.27-2.39,40.51-9.02c11.47-4.41,24.18-9.3,35.91-21.62c4.47-4.69,13.9-14.84,17.7-30.98c4.25-18.05-1.07-32.85-4.26-41.7
						c-5.13-14.26-12.31-23.35-20.09-33.02c-14.72-18.31-21.46-19.69-47.32-45.28c-13.18-13.04-19.91-19.77-27.06-29.96
						c-8.26-11.77-18.02-25.68-21.28-46.3c-3.02-19.16,1.11-34.41,3.4-42.55c5.08-17.99,13.63-30.88,19.4-38.3" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="600" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M251.86,1.54c-2.79,4.55-6.74,11.14-11.23,19.23c-10.16,18.31-15.49,27.92-19.4,40
						c-6.53,20.17-5.91,37.39-5.62,42.55c0.27,4.8,1.9,28.1,16.68,53.45c7.02,12.04,16.31,21.42,34.89,40.17
						c8.7,8.78,8.8,8.28,37.28,35.4c19.69,18.76,24.27,23.4,29.96,31.66c4.02,5.83,11.13,17.14,16.51,32.85
						c4.13,12.06,7.49,21.87,6.64,35.23c-1.1,17.25-8.52,29.48-11.57,34.38c-10.54,16.92-24.6,25.2-34.38,30.81
						c-23.97,13.74-46.66,16.04-64.85,17.7c-13.03,1.19-11.92-0.08-50.72,0c-30.21,0.06-45.31,0.09-54.81,1.53
						c-35.14,5.33-59.22,19.59-64.51,22.81c-4.7,2.87-22.2,13.85-39.83,33.87c-9.91,11.26-16.88,21.97-21.62,30.3" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="450" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M21.4,486.48c2.43-4.47,5.99-10.49,10.89-17.19c4.56-6.23,17.13-22.38,38.64-36.94
						c18.11-12.25,34.84-18.16,44.26-20.94c19.22-5.68,34.55-6.05,65.19-6.81c22.03-0.54,23.98,0.75,45.96-0.34
						c30.37-1.51,41.85-4.73,45.96-5.96c8.55-2.56,22.15-6.77,36.43-17.7c7.25-5.55,17.31-13.26,24.17-27.4
						c7.69-15.85,6.81-30.45,6.3-37.62c-1.35-18.73-8.81-32.01-14.3-41.53c-1.63-2.83-7.11-12.08-24.51-30.64
						c-17.71-18.89-23.21-21.22-43.57-41.19c-18.87-18.51-28.31-27.77-34.72-39.15c-14.17-25.16-14.48-48.64-14.47-53.79
						c0.06-18.92,5.49-33.24,9.02-42.38c5.14-13.32,11.47-23.6,16.51-30.68" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="600" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M239.27,25.12c-1.17,2.11-2.75,5.07-4.47,8.68c-2.36,4.94-7.66,16.06-10.47,28.72
						c-3.53,15.91-1.97,29.02-1.02,36.38c2.68,20.94,10.24,35.77,14.55,44.04c9.35,17.94,19.67,29.07,32.81,43.02
						c19.26,20.45,23.51,19.93,47.23,43.4c17,16.82,26.71,26.54,36.77,42.51c8.86,14.06,18.12,29.14,20.04,50.81
						c0.61,6.92,1.86,23.15-6,41.23c-9.11,20.95-24.94,31.75-35.11,38.68c-19.84,13.53-39.05,17.58-52.6,20.3
						c-10.9,2.19-18.73,2.66-31.79,3.45c-25.76,1.55-34.35-0.54-61.79-0.13c-18.14,0.27-27.93,0.42-41.11,2.3
						c-13.25,1.89-37.65,5.6-65.36,20.3c-29.6,15.7-46.94,35.44-51.83,41.23c-10.02,11.87-16.67,23.12-20.94,31.4" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="450" data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px" stroke-miterlimit="10" d="M0.67,538.69c0.95-1.71,2.34-4.15,4.09-7.02c11.96-19.63,24.46-32.62,28.98-37.15
						c15.57-15.61,30.82-25.49,40.72-31.15c9.07-5.18,24.93-13.26,46.09-18.89c18.57-4.95,32.81-5.77,50.17-6.77
						c16.47-0.95,18.38,0,54.38,0c26.4,0,39.82-0.03,50.81-1.4c12.86-1.61,30.09-3.88,50.55-12.64c11.2-4.79,24.83-10.77,38.43-24
						c6.21-6.04,16.47-16.24,22.47-33.06c4.92-13.78,4.61-25.35,4.34-32.81c-0.77-21.33-7.97-36.9-12.51-46.47
						c-8.94-18.82-19.41-30.64-32.17-44.81c-9.84-10.92-12.11-11.88-44.3-42c-28.9-27.05-32.97-31.8-35.87-35.36
						c-8.92-10.95-20.3-25.17-28.34-46.98c-2.77-7.52-11.81-32.78-7.91-59.11c0.78-5.28,2.71-14.86,6.51-25.79
						c2.36-6.79,4.83-12.33,6.77-16.34" />
            </svg>

            <div class="container pt-5-5 pb-3">
                <div class="row gy-5">
                    <div class="col-lg-4">
                        <a href="/" class="text-decoration-none">
                            <img src="{{ asset('/web/img/demos/insurance/iccesp-logo.png') }}" class="img-fluid mb-4" alt="Iccesp 2024" />
                        </a>
                        <p class="text-3-5 pe-lg-2 text-justify">This is second conference being organised in this theme. The main aim of the conference is to bring together leading academicians, researchers, technocrats, practitioners, and students and share their experience and research output on all aspects of Civil Engineering.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-5-5">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h4 class="text-color-dark font-weight-bold mb-3">Important Links</h4>
                                <ul class="list list-unstyled columns-lg-2">
                                    <li><a href="#" class="text-color-grey text-color-hover-primary">Registration Details</a></li>
                                    <li><a href="#" class="text-color-grey text-color-hover-primary">Abstract Guidelines</a></li>
                                    <li><a href="#" class="text-color-grey text-color-hover-primary">Important Dates</a></li>
                                    <li><a href="{{ route('about') }}" class="text-color-grey text-color-hover-primary">About the Conference</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-color-dark font-weight-bold mb-3">Quick Links</h4>
                                <ul class="list list-unstyled columns-lg-2">
                                    <li><a href="#" class="text-color-grey text-color-hover-primary">Advisory Committee</a></li>
                                    <li><a href="#" class="text-color-grey text-color-hover-primary">Objectives</a></li>
                                    <li><a href="#" class="text-color-grey text-color-hover-primary">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="list list-unstyled">
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="icon icon-envelope text-color-dark text-5 font-weight-bold position-relative top-1 me-3-5"></i>
                                        <a href="mailto:iccesp2024@gmail.com" class="d-inline-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-4-5">iccesp2024@gmail.com</a>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="icon icon-phone text-color-dark text-5 font-weight-bold position-relative top-1 me-3-5"></i>
                                        <a href="tel:+919562417322" class="d-inline-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-4-5">+91 9562417322</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright bg-transparent">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col mt-4 mb-4">
                            <p class="text-center text-3 mb-0"> © ICCESP 2024. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="{{ asset('/web/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('/web/js/theme.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('/web/js/views/view.contact.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('/web/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('/web/js/theme.init.js') }}"></script>

</body>

</html>