<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, html admin panel template, bootstrap admin template, html and css templates, bootstrap, bootstrap html template, html admin dashboard template, bootstrap dashboard, admin panel html template">
    
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="../assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="../assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css">


<!-- Prism CSS -->
<link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-coy.min.css">

</head>

<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal"
                                        >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid canvas-footer"> 
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger btn-block m-1">Reset</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader" >
        <img src="../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">

        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-dark">
                                <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle mx-0 my-auto"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-search">
                        <!-- Start::header-link -->
                        <!-- <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bx bx-search-alt-2 header-link-icon"></i>
                        </a> -->
                        <div class="main-header-search ms-3 d-none d-lg-block my-auto">
                            <input class="form-control" placeholder="Search for anything..." type="search"> <button
                                class="btn"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <img src="../assets/images/flags/us_flag.jpg" alt="img" class="rounded-circle">
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/us_flag.jpg" alt="img">
                                    </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/spain_flag.jpg" alt="img">
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/french_flag.jpg" alt="img">
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/germany_flag.jpg" alt="img">
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/italy_flag.jpg" alt="img">
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/russia_flag.jpg" alt="img">
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                     <!-- Start::header-element -->
                     <div class="header-element header-search d-block d-lg-none">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="ti ti-search header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <i class="fe fe-moonfe fe-moon header-link-icon align-middle"></i>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <i class="fe fe-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a onclick="openFullscreen();" href="#" class="header-link">
                            <i class="fe fe-maximize full-screen-open header-link-icon"></i>
                            <i class="fe fe-minimize full-screen-close header-link-icon d-none"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-bell header-link-icon"></i>
                            <span class="pulse-success"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                    <span class="badge bg-success fw-normal" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span
                                                class="avatar avatar-md bg-primary-gradient box-shadow-primary avatar-rounded"><i
                                                    class="ri-chat-4-line fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">New review received</a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">2 hours
                                                    ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span
                                                class="avatar avatar-md bg-secondary-gradient box-shadow-primary avatar-rounded"><i
                                                    class="ri-mail-line fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">New Mails Received</a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">1 week
                                                    ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span
                                                class="avatar avatar-md bg-success-gradient box-shadow-primary avatar-rounded"><i
                                                    class="ri-shopping-cart-line fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">New Order Received</a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">1 day
                                                    ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span
                                                class="avatar avatar-md bg-warning-gradient box-shadow-primary avatar-rounded"><i
                                                    class="ri-refresh-fill fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">New Updates
                                                        available</a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">1 day
                                                    ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md bg-info-gradient box-shadow-primary avatar-rounded"><i
                                                    class="ri-shopping-bag-fill fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">New Order Placed</a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">1 day
                                                    ago</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid">
                                    <a href="default-chat.html" class="btn text-muted p-0 border-0">View all Notification</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element meassage-dropdown d-none d-xl-block">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-message-square header-link-icon"></i>
                            <span class="pulse-danger"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">You have Messages</p>
                                    <span class="badge bg-success fw-normal" id="message-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll1">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/1.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">Madeleine<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 3 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Hey! there I'
                                                    am available....</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/2.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">Anthony<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 5 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New product
                                                    Launching...</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/3.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">Olivia<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block">45 mintues ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New Schedule
                                                    release......</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/4.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">Sanderson<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block">20 mintues ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New Schedule
                                                    release......</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/2.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.html">Senrio<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 10 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New product
                                                    Launching...</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid">
                                    <a href="default-chat.html" class="btn text-muted p-0 border-0">See all Messages</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-shopping-cart header-link-icon"></i>
                            <span class="badge rounded-pill bg-success cart-badge fw-normal" id="cart-icon-badge">5</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                                    <span class="badge bg-success fw-normal" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/pngs/1.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.html">Cup Set</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$1,299.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>White Set</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/pngs/3.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.html">Wired headset</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$179.29</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item">
                                                    <li>Analog</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/pngs/5.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.html">modern Chair</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$29.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Decorative</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/pngs/4.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.html">Flower Vase</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$4,999.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Decorative</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/pngs/6.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.html">Sun Glasses</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$129.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Brown</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid">
                                    <a href="checkout.html" class="btn text-muted p-0 border-0">Proceed to checkout</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="shop.html" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue
                                        shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element profile-1">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class=" dropdown-toggle leading-none d-flex px-1" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <img src="../assets/images/faces/9.jpg" alt="img"
                                        class="rounded-circle avatar  profile-user brround cover-image">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="profile.html"><i
                                        class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex" href="email.html"><i
                                        class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                                        class="badge bg-success-transparent ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="Timeline.html"><i
                                        class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex" href="emailservices.html"><i
                                        class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex" href="Faq.html"><i
                                        class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="login.html"><i
                                        class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element d-none d-sm-block">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="#" class="header-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvassidebar">
                            <i class="fe fe-menu header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
                            <i class="fe fe-settings header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-dark">
                    <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="index.html" class="side-menu__item">
                                <i class="fe fe-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">WIDGETS</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="widgets.html" class="side-menu__item">
                                <i class="fe fe-grid side-menu__icon"></i>
                                <span class="side-menu__label">Widgets</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-package side-menu__icon"></i>
                                <span class="side-menu__label">Ui Elements</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Ui Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                                </li>
                                <li class="slide">
                                    <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                                <li class="slide">
                                    <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="tags.html" class="side-menu__item">Tags</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-slack side-menu__icon"></i>
                                <span class="side-menu__label">Utilities</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatars</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="gutters.html" class="side-menu__item">Gutters</a>
                                </li>
                                <li class="slide">
                                    <a href="helpers.html" class="side-menu__item">Helpers</a>
                                </li>
                                <li class="slide">
                                    <a href="position.html" class="side-menu__item">Position</a>
                                </li>
                                <li class="slide">
                                    <a href="more.html" class="side-menu__item">Additional Content</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-pie-chart side-menu__icon"></i>
                                <span class="side-menu__label">Charts</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Charts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-file-text side-menu__icon"></i>
                                <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle hor-rightangle"></i>
                                <span class="badge bg-success side-badge fs-11">6</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_check_radios.html" class="side-menu__item">Checks & Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                                </li>
                                <li class="slide">
                                    <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form_validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-file side-menu__icon"></i>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Advanced Ui</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions_collpase.html" class="side-menu__item">Accordions & Collapse</a>
                                </li>
                                <li class="slide">
                                    <a href="carousel.html" class="side-menu__item">Carousel</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-currencies.html" class="side-menu__item">Crypto-currencies</a>
                                </li>
                                <li class="slide">
                                    <a href="default-chat.html" class="side-menu__item">Default Chat</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="modals_closes.html" class="side-menu__item">Modals & Closes</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide">
                                    <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">Ratings</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="search.html" class="side-menu__item">Search</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                                <li class="slide">
                                    <a href="users-list.html" class="side-menu__item">User List</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-package side-menu__icon"></i>
                                <span class="side-menu__label">Apps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="timeline.html" class="side-menu__item">Timeline</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-layers side-menu__icon"></i>
                                <span class="side-menu__label">Pages</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item"> Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="editprofile.html" class="side-menu__item"> Edit Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="email.html" class="side-menu__item"> Mail-Inbox</a>
                                </li>
                                <li class="slide">
                                    <a href="emailservices.html" class="side-menu__item">Mail-Compose</a>
                                </li>
                                <li class="slide">
                                    <a href="about.html" class="side-menu__item"> About Company</a>
                                </li>
                                <li class="slide">
                                    <a href="services.html" class="side-menu__item"> Services</a>
                                </li>
                                <li class="slide">
                                    <a href="faq.html" class="side-menu__item"> FAQS</a>
                                </li>
                                <li class="slide">
                                    <a href="terms.html" class="side-menu__item"> Terms</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice.html" class="side-menu__item"> Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item"> Pricing Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item"> Empty Page</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">E-Commerce
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="shop.html" class="side-menu__item">Shop</a>
                                        </li>
                                        <li class="slide">
                                            <a href="shop-description.html" class="side-menu__item">Shopping Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="cart.html" class="side-menu__item">Shopping Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                        </li>
                                        <li class="slide">
                                            <a href="checkout.html" class="side-menu__item">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">File Manager
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                        </li>
                                        <li class="slide">
                                            <a href="filemanager-list.html" class="side-menu__item">File Manager List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="filemanager-details.html" class="side-menu__item">File Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-sliders side-menu__icon"></i>
                                <span class="side-menu__label">Nested Menu</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Nested Menu</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Tables & Authentication</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-clipboard side-menu__icon"></i>
                                <span class="side-menu__label">Tables</span>
                                <span class="badge bg-secondary side-badge fs-11">3</span>
                                <i class="fe fe-chevron-right side-menu__angle hor-rightangle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="tables.html" class="side-menu__item">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="data-tables.html" class="side-menu__item">Data Tables</a>

                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-settings side-menu__icon"></i>
                                <span class="side-menu__label">Authentication</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Custom Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="login.html" class="side-menu__item"> Login</a>
                                </li>
                                <li class="slide">
                                    <a href="register.html" class="side-menu__item"> Register</a>
                                </li>
                                <li class="slide">
                                    <a href="forgot-password.html" class="side-menu__item"> Forgot Password</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen.html" class="side-menu__item"> Lock screen</a>
                                </li>
                                <li class="slide">
                                    <a href="construction.html" class="side-menu__item"> Under Construction</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Error Pages
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="400.html" class="side-menu__item">400</a>
                                        </li>
                                        <li class="slide">
                                            <a href="401.html" class="side-menu__item">401</a>
                                        </li>
                                        <li class="slide">
                                            <a href="403.html" class="side-menu__item">403</a>
                                        </li>
                                        <li class="slide">
                                            <a href="404.html" class="side-menu__item">404</a>
                                        </li>
                                        <li class="slide">
                                            <a href="500.html" class="side-menu__item">500</a>
                                        </li>
                                        <li class="slide">
                                            <a href="503.html" class="side-menu__item">503</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->


                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Maps & Icons</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-map-pin side-menu__icon"></i>
                                <span class="side-menu__label">Maps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <i class="fe fe-command side-menu__icon"></i>
                                <span class="side-menu__label">Icons</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="">
                        <h1 class="page-title fw-semibold fs-20 mb-0">Tables</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tables</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <button type="button" class="btn btn-primary btn-wave waves-effect waves-light me-2"> <i class="fe fe-plus mx-1 align-middle"></i>Add Account</button>
                        <button type="button" class="btn btn-success btn-wave waves-effect waves-light"> <i class="fe fe-log-in mx-1 align-middle"></i>Export</button>
                    </div>
                </div>
                <!-- Page Header Close -->


                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Basic Tables
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Mark</th>
                                                <td>21,Dec 2021</td>
                                                <td>+1234-12340</td>
                                                <td><span class="badge bg-outline-primary">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Monika</th>
                                                <td>29,April 2022</td>
                                                <td>+1523-12459</td>
                                                <td><span class="badge bg-outline-warning">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Madina</th>
                                                <td>30,Nov 2022</td>
                                                <td>+1982-16234</td>
                                                <td><span class="badge bg-outline-success">Successful</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bhamako</th>
                                                <td>18,Mar 2022</td>
                                                <td>+1526-10729</td>
                                                <td><span class="badge bg-outline-secondary">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Created On&lt;/th&gt;
                &lt;th scope="col"&gt;Number&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Mark&lt;/th&gt;
                &lt;td&gt;21,Dec 2021&lt;/td&gt;
                &lt;td&gt;+1234-12340&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-primary"&gt;Completed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Monika&lt;/th&gt;
                &lt;td&gt;29,April 2022&lt;/td&gt;
                &lt;td&gt;+1523-12459&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-warning"&gt;Failed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Madina&lt;/th&gt;
                &lt;td&gt;30,Nov 2022&lt;/td&gt;
                &lt;td&gt;+1982-16234&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-success"&gt;Successful&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Bhamako&lt;/th&gt;
                &lt;td&gt;18,Mar 2022&lt;/td&gt;
                &lt;td&gt;+1526-10729&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Bordered Tables
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>Sukuro Kim
                                                    </div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">Active</span></td>
                                                <td>kimosukuro@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 offline avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>Hasimna
                                                    </div>
                                                </th>
                                                <td><span class="badge bg-light text-dark">Inactive</span></td>
                                                <td>hasimna2132@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>Azimo Khan
                                                    </div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">Active</span></td>
                                                <td>azimokhan421@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>Samantha Julia
                                                    </div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">Active</span></td>
                                                <td>julianasams143@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap">
                                                        <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Email&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
                        &lt;/span&gt;Sukuro Kim
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;kimosukuro@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 offline avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;Hasimna
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;Inactive&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;hasimna2132@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/span&gt;Azimo Khan
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;azimokhan421@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/span&gt;Samantha Julia
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;julianasams143@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Bordered Primary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered border-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    #0007
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">26-04-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>Mayor Kelly
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Booked</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    #0008
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">15-02-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>Wicky Kross
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Booked</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    #0009
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">23-05-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>Julia Cam
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Booked</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered border-primary"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0007
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;26-04-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
                        &lt;/span&gt;Mayor Kelly
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Booked&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0008
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;15-02-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;Wicky Kross
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Booked&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0009
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;23-05-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
                        &lt;/span&gt;Julia Cam
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Booked&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;

        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Bordered Success
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered border-success">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    #0011
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">07-01-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>Helsenky
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    #0012
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">18-05-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>Brodus
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    #0013
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">19-03-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>Chikka Alen
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Delivered</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered border-success"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0011
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;07-01-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
                        &lt;/span&gt;Helsenky
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0012
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;18-05-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
                        &lt;/span&gt;Brodus
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0013
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;19-03-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
                        &lt;/span&gt;Chikka Alen
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Bordered warning
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered border-warning">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    #0014
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">21-02-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>Sukuro Kim
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Accepted</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    #0018
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">26-03-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>Alex Carey
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Accepted</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    #0020
                                                </th>
                                                <td>
                                                    <span class="badge bg-light text-dark">14-03-2022</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>Pamila Anderson
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Accepted</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered border-warning"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0014
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;21-02-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
                        &lt;/span&gt;Sukuro Kim
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0018
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;26-03-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/span&gt;Alex Carey
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0020
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;14-03-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;Pamila Anderson
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Without Borders
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td><span class="badge bg-primary">Fixed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td><span class="badge bg-warning">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-borderless"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;Fixed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning"&gt;In Progress&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success"&gt;Completed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger"&gt;Pending&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Group Dividers
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Seller</th>
                                                <th scope="col">Sale Percentage</th>
                                                <th scope="col">Qunatity Sold</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <th scope="row">Smart Watch</th>
                                                <td>Slowtrack.inc</td>
                                                <td><a href="#" class="text-success">24.23%<i
                                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                                <td>250/1786</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">White Sneakers</th>
                                                <td>American & Co.inc</td>
                                                <td><a href="#" class="text-danger">12.45%<i
                                                            class="ri-arrow-down-fill ms-1"></i></a></td>
                                                <td>123/985</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Baseball Bat</th>
                                                <td>Sports Company</td>
                                                <td><a href="#" class="text-success">06.64%<i
                                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                                <td>124/232</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Black Hoodie</th>
                                                <td>Renonds Fabrics</td>
                                                <td><a href="#" class="text-success">14.42%<i
                                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                                <td>192/2456</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Product&lt;/th&gt;
                &lt;th scope="col"&gt;Seller&lt;/th&gt;
                &lt;th scope="col"&gt;Sale Percentage&lt;/th&gt;
                &lt;th scope="col"&gt;Qunatity Sold&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class="table-group-divider"&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Smart Watch&lt;/th&gt;
                &lt;td&gt;Slowtrack.inc&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-success"&gt;24.23%&lt;i
                            class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;250/1786&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;White Sneakers&lt;/th&gt;
                &lt;td&gt;American & Co.inc&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-danger"&gt;12.45%&lt;i
                            class="ri-arrow-down-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;123/985&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Baseball Bat&lt;/th&gt;
                &lt;td&gt;Sports Company&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-success"&gt;06.64%&lt;i
                            class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;124/232&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Black Hoodie&lt;/th&gt;
                &lt;td&gt;Renonds Fabrics&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-success"&gt;14.42%&lt;i
                            class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;192/2456&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Striped rows
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">2022R-01</th>
                                                <td>27-010-2022</td>
                                                <td>Moracco</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success btn-wave">
                                                        <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-02</th>
                                                <td>28-10-2022</td>
                                                <td>Thornton</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success btn-wave">
                                                        <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-03</th>
                                                <td>22-10-2022</td>
                                                <td>Larry Bird</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success btn-wave">
                                                        <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-04</th>
                                                <td>29-09-2022</td>
                                                <td>Erica Sean</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success btn-wave">
                                                        <i class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;ID&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-01&lt;/th&gt;
                &lt;td&gt;27-010-2022&lt;/td&gt;
                &lt;td&gt;Moracco&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-02&lt;/th&gt;
                &lt;td&gt;28-10-2022&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-03&lt;/th&gt;
                &lt;td&gt;22-10-2022&lt;/td&gt;
                &lt;td&gt;Larry Bird&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-04&lt;/th&gt;
                &lt;td&gt;29-09-2022&lt;/td&gt;
                &lt;td&gt;Erica Sean&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Striped columns
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped-columns">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">2022R-01</th>
                                                <td>27-010-2022</td>
                                                <td>Moracco</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger btn-wave">
                                                        <i class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-02</th>
                                                <td>28-10-2022</td>
                                                <td>Thornton</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger btn-wave">
                                                        <i class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-03</th>
                                                <td>22-10-2022</td>
                                                <td>Larry Bird</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger btn-wave">
                                                        <i class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-04</th>
                                                <td>29-09-2022</td>
                                                <td>Erica Sean</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger btn-wave">
                                                        <i class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped-columns"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;ID&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-01&lt;/th&gt;
                &lt;td&gt;27-010-2022&lt;/td&gt;
                &lt;td&gt;Moracco&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-02&lt;/th&gt;
                &lt;td&gt;28-10-2022&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-03&lt;/th&gt;
                &lt;td&gt;22-10-2022&lt;/td&gt;
                &lt;td&gt;Larry Bird&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-04&lt;/th&gt;
                &lt;td&gt;29-09-2022&lt;/td&gt;
                &lt;td&gt;Erica Sean&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Primary Table
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-primary"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Secondary Table
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-secondary">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-secondary"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Warning Table
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-warning">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-warning"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Danger Table
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-danger">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-danger"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Dark Table
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-dark"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Success Table With Striped Rows
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-success table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-success table-striped"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Hoverable Rows</div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Manager</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Joanna Smith</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span
                                                                    class="fs-11 text-muted">joannasmith14@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Fashion</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);">
                                                            +5
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Kara Kova</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span
                                                                    class="fs-11 text-muted">milesakara@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Clothing</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);">
                                                            +6
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/16.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Donald Trimb</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span
                                                                    class="fs-11 text-muted">donaldo21@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-dark-transparent">Electronics</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 17%" aria-valuenow="17" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Justin Gaethje</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span
                                                                    class="fs-11 text-muted">justingae@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger-transparent">Sports</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);">
                                                            +5
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-hover"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Product Manager&lt;/th&gt;
                &lt;th scope="col"&gt;Category&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Joanna Smith&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;joannasmith14@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Fashion&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +5
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Kara Kova&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;milesakara@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Clothing&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +6
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/16.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Donald Trimb&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;donaldo21@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-dark-transparent"&gt;Electronics&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +2
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 17%" aria-valuenow="17" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Justin Gaethje&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;justingae@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Sports&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +5
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Hoverable rows With striped rows
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Invoice</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">IN-2032</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Mark Cruise</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span
                                                                    class="fs-11 text-muted">markcruise24@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent"><i
                                                            class="ri-check-fill align-middle me-1"></i>Paid</span></td>
                                                <td>Jul 26,2022</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">IN-2022</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Charanjeep</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span
                                                                    class="fs-11 text-muted">charanjeep@gmail.in</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent"><i
                                                            class="ri-check-fill align-middle me-1"></i>Paid</span></td>
                                                <td>Mar 14,2022</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">IN-2014</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Samantha Julie</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span class="fs-11 text-muted">julie453@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger-transparent"><i
                                                            class="ri-close-fill align-middle me-1"></i>Cancelled</span>
                                                </td>
                                                <td>Feb 1,2022</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">IN-2036</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </div>
                                                        <div>
                                                            <div class="lh-1">
                                                                <span>Simon Cohen</span>
                                                            </div>
                                                            <div class="lh-1">
                                                                <span class="fs-11 text-muted">simon@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-light text-dark"><i
                                                            class="ri-reply-line align-middle me-1"></i>Refunded</span>
                                                </td>
                                                <td>Apr 24,2022</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped table-hover"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Invoice&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2032&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Mark Cruise&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;markcruise24@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;&lt;i
                            class="ri-check-fill align-middle me-1"&gt;&lt;/i&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;Jul 26,2022&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2022&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Charanjeep&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;charanjeep@gmail.in&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;&lt;i
                            class="ri-check-fill align-middle me-1"&gt;&lt;/i&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;Mar 14,2022&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2014&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Samantha Julie&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span class="fs-11 text-muted"&gt;julie453@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;&lt;i
                            class="ri-close-fill align-middle me-1"&gt;&lt;/i&gt;Cancelled&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Feb 1,2022&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2036&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Simon Cohen&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span class="fs-11 text-muted"&gt;simon@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;&lt;i
                            class="ri-reply-line align-middle me-1"&gt;&lt;/i&gt;Refunded&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Apr 24,2022&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->

                <!-- Start:: row-7 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Head Primary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Head warning
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-warning">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger-light">Rejected</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-warning"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Head Success
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-success">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger-light">Rejected</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-success"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Head Info
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-info">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger-light">Rejected</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-info"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Head Secondary
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-secondary">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger-light">Rejected</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-secondary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Head Danger
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-danger">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary-light">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger-light">Rejected</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-danger"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-7 -->

                <!-- Start:: row-8 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table Foot
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Matches Won</th>
                                                <th scope="col">Win Ratio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    01
                                                </th>
                                                <td>
                                                    Manchester
                                                </td>
                                                <td>
                                                    232
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary">42%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    02
                                                </th>
                                                <td>
                                                    Barcelona
                                                </td>
                                                <td>
                                                    175
                                                </td>
                                                <td><span class="badge bg-primary">58%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    03
                                                </th>
                                                <td>
                                                    Portugal
                                                </td>
                                                <td>
                                                    126
                                                </td>
                                                <td><span class="badge bg-primary">32%</span></td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="table-primary">
                                            <tr>
                                                <th scope="row">
                                                    Total
                                                </th>
                                                <td>
                                                    United States
                                                </td>
                                                <td>
                                                    558
                                                </td>
                                                <td><span class="badge bg-primary">56%</span></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;S.No&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Matches Won&lt;/th&gt;
                &lt;th scope="col"&gt;Win Ratio&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    01
                &lt;/th&gt;
                &lt;td&gt;
                    Manchester
                &lt;/td&gt;
                &lt;td&gt;
                    232
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-primary"&gt;42%&lt;/span&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    02
                &lt;/th&gt;
                &lt;td&gt;
                    Barcelona
                &lt;/td&gt;
                &lt;td&gt;
                    175
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;58%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    03
                &lt;/th&gt;
                &lt;td&gt;
                    Portugal
                &lt;/td&gt;
                &lt;td&gt;
                    126
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;32%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;tfoot class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    Total
                &lt;/th&gt;
                &lt;td&gt;
                    United States
                &lt;/td&gt;
                &lt;td&gt;
                    558
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;56%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table With Caption
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <caption>Top 3 Countries</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Medals Won</th>
                                                <th scope="col">No Of Athletes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td>United States</td>
                                                <td>2012<i class="ri-medal-line mx-2"></i></td>
                                                <td>1823</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">02</th>
                                                <td>United Kingdom</td>
                                                <td>1012<i class="ri-medal-line mx-2"></i></td>
                                                <td>992</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">03</th>
                                                <td>Germany</td>
                                                <td>914<i class="ri-medal-line mx-2"></i></td>
                                                <td>875</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;S.No&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Matches Won&lt;/th&gt;
                &lt;th scope="col"&gt;Win Ratio&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    01
                &lt;/th&gt;
                &lt;td&gt;
                    Manchester
                &lt;/td&gt;
                &lt;td&gt;
                    232
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-primary"&gt;42%&lt;/span&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    02
                &lt;/th&gt;
                &lt;td&gt;
                    Barcelona
                &lt;/td&gt;
                &lt;td&gt;
                    175
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;58%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    03
                &lt;/th&gt;
                &lt;td&gt;
                    Portugal
                &lt;/td&gt;
                &lt;td&gt;
                    126
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;32%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;tfoot class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    Total
                &lt;/th&gt;
                &lt;td&gt;
                    United States
                &lt;/td&gt;
                &lt;td&gt;
                    558
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;56%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Table With Top Caption
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap caption-top">
                                        <caption>Top IT Companies</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Revenue</th>
                                                <th scope="col">Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Microsoft</td>
                                                <td>$170 billion</td>
                                                <td>United States</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>HP</td>
                                                <td>$72 billion</td>
                                                <td>United States</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>IBM</td>
                                                <td>$60 billion</td>
                                                <td>United States</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap caption-top"&gt;
        &lt;caption&gt;Top IT Companies&lt;/caption&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;S.No&lt;/th&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Revenue&lt;/th&gt;
                &lt;th scope="col"&gt;Country&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Microsoft&lt;/td&gt;
                &lt;td&gt;$170 billion&lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;HP&lt;/td&gt;
                &lt;td&gt;$72 billion&lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;IBM&lt;/td&gt;
                &lt;td&gt;$60 billion&lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-8 -->

                <!-- Start:: row-9 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Active Tables
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active">
                                                <th scope="row">Mark</th>
                                                <td>21,Dec 2021</td>
                                                <td>+1234-12340</td>
                                                <td><span class="badge bg-primary">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Monika</th>
                                                <td>29,April 2022</td>
                                                <td>+1523-12459</td>
                                                <td><span class="badge bg-warning">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Madina</th>
                                                <td>30,Nov 2022</td>
                                                <td class="table-active">+1982-16234</td>
                                                <td><span class="badge bg-success">Successful</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bhamako</th>
                                                <td>18,Mar 2022</td>
                                                <td>+1526-10729</td>
                                                <td><span class="badge bg-secondary">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Created On&lt;/th&gt;
                &lt;th scope="col"&gt;Number&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr class="table-active"&gt;
                &lt;th scope="row"&gt;Mark&lt;/th&gt;
                &lt;td&gt;21,Dec 2021&lt;/td&gt;
                &lt;td&gt;+1234-12340&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;Completed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Monika&lt;/th&gt;
                &lt;td&gt;29,April 2022&lt;/td&gt;
                &lt;td&gt;+1523-12459&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning"&gt;Failed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Madina&lt;/th&gt;
                &lt;td&gt;30,Nov 2022&lt;/td&gt;
                &lt;td class="table-active"&gt;+1982-16234&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success"&gt;Successful&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Bhamako&lt;/th&gt;
                &lt;td&gt;18,Mar 2022&lt;/td&gt;
                &lt;td&gt;+1526-10729&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Small Tables
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Invoice</th>
                                                <th scope="col">Created Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked="">
                                                        <label class="form-check-label" for="checkebox-sm">
                                                            Zelensky
                                                        </label>
                                                    </div>
                                                </th>
                                                <td>25-Apr-2021</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm1">
                                                        <label class="form-check-label" for="checkebox-sm1">
                                                            Kim Jong
                                                        </label>
                                                    </div>
                                                </th>
                                                <td>29-April-2022</td>
                                                <td><span class="badge bg-danger-transparent">Pending</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm2">
                                                        <label class="form-check-label" for="checkebox-sm2">
                                                            Obana
                                                        </label>
                                                    </div>
                                                </th>
                                                <td>30-Nov-2022</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm3">
                                                        <label class="form-check-label" for="checkebox-sm3">
                                                            Sean Paul
                                                        </label>
                                                    </div>
                                                </th>
                                                <td>01-Jan-2022</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm4">
                                                        <label class="form-check-label" for="checkebox-sm4">
                                                            Karizma
                                                        </label>
                                                    </div>
                                                </th>
                                                <td>14-Feb-2022</td>
                                                <td><span class="badge bg-danger-transparent">Pending</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-sm"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Invoice&lt;/th&gt;
                &lt;th scope="col"&gt;Created Date&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked=""&gt;
                        &lt;label class="form-check-label" for="checkebox-sm"&gt;
                            Zelensky
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;25-Apr-2021&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm1"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm1"&gt;
                            Kim Jong
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;29-April-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm2"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm2"&gt;
                            Obana
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;30-Nov-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm3"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm3"&gt;
                            Sean Paul
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;01-Jan-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm4"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm4"&gt;
                            Karizma
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;14-Feb-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-9 -->

                <!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Color variants tables
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Color</th>
                                                <th scope="col">Client</th>
                                                <th scope="col">State</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Default</th>
                                                <td>Rita Book</td>
                                                <td><span class="badge bg-primary-transparent">Processed</span></td>
                                                <td>22</td>
                                                <td>$2,012</td>
                                            </tr>

                                            <tr class="table-primary">
                                                <th scope="row">Primary</th>
                                                <td>Rhoda Report</td>
                                                <td><span class="badge bg-primary">Processed</span></td>
                                                <td>22</td>
                                                <td>$4,254</td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <th scope="row">Secondary</th>
                                                <td>Rita Book</td>
                                                <td><span class="badge bg-secondary">Processed</span></td>
                                                <td>26</td>
                                                <td>$1,234</td>
                                            </tr>
                                            <tr class="table-success">
                                                <th scope="row">Success</th>
                                                <td>Anne Teak</td>
                                                <td><span class="badge bg-success">Processed</span></td>
                                                <td>42</td>
                                                <td>$2,623</td>
                                            </tr>
                                            <tr class="table-danger">
                                                <th scope="row">Danger</th>
                                                <td>Dee End</td>
                                                <td><span class="badge bg-danger">Processed</span></td>
                                                <td>52</td>
                                                <td>$32,132</td>
                                            </tr>
                                            <tr class="table-warning">
                                                <th scope="row">Warning</th>
                                                <td>Lee Nonmi</td>
                                                <td><span class="badge bg-warning">Processed</span></td>
                                                <td>10</td>
                                                <td>$1,434</td>
                                            </tr>
                                            <tr class="table-info">
                                                <th scope="row">Info</th>
                                                <td>Lynne Gwistic</td>
                                                <td><span class="badge bg-info">Processed</span></td>
                                                <td>63</td>
                                                <td>$1,854</td>
                                            </tr>
                                            <tr class="table-light">
                                                <th scope="row">Light</th>
                                                <td>Fran Tick</td>
                                                <td><span class="badge bg-light text-dark">Processed</span></td>
                                                <td>05</td>
                                                <td>$823</td>
                                            </tr>
                                            <tr class="table-dark">
                                                <th scope="row">Dark</th>
                                                <td>Polly Pipe</td>
                                                <td><span class="badge bg-dark text-white">Processed</span></td>
                                                <td>35</td>
                                                <td>$1,832</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Color&lt;/th&gt;
                &lt;th scope="col"&gt;Client&lt;/th&gt;
                &lt;th scope="col"&gt;State&lt;/th&gt;
                &lt;th scope="col"&gt;Quantity&lt;/th&gt;
                &lt;th scope="col"&gt;Total Price&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Default&lt;/th&gt;
                &lt;td&gt;Rita Book&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;22&lt;/td&gt;
                &lt;td&gt;$2,012&lt;/td&gt;
            &lt;/tr&gt;

            &lt;tr class="table-primary"&gt;
                &lt;th scope="row"&gt;Primary&lt;/th&gt;
                &lt;td&gt;Rhoda Report&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;22&lt;/td&gt;
                &lt;td&gt;$4,254&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-secondary"&gt;
                &lt;th scope="row"&gt;Secondary&lt;/th&gt;
                &lt;td&gt;Rita Book&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-secondary"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;26&lt;/td&gt;
                &lt;td&gt;$1,234&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-success"&gt;
                &lt;th scope="row"&gt;Success&lt;/th&gt;
                &lt;td&gt;Anne Teak&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;42&lt;/td&gt;
                &lt;td&gt;$2,623&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-danger"&gt;
                &lt;th scope="row"&gt;Danger&lt;/th&gt;
                &lt;td&gt;Dee End&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;52&lt;/td&gt;
                &lt;td&gt;$32,132&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-warning"&gt;
                &lt;th scope="row"&gt;Warning&lt;/th&gt;
                &lt;td&gt;Lee Nonmi&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;10&lt;/td&gt;
                &lt;td&gt;$1,434&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-info"&gt;
                &lt;th scope="row"&gt;Info&lt;/th&gt;
                &lt;td&gt;Lynne Gwistic&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-info"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;63&lt;/td&gt;
                &lt;td&gt;$1,854&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-light"&gt;
                &lt;th scope="row"&gt;Light&lt;/th&gt;
                &lt;td&gt;Fran Tick&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;05&lt;/td&gt;
                &lt;td&gt;$823&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-dark"&gt;
                &lt;th scope="row"&gt;Dark&lt;/th&gt;
                &lt;td&gt;Polly Pipe&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-dark text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;35&lt;/td&gt;
                &lt;td&gt;$1,832&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Nesting
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <table class="table text-nowrap mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aplhabets</th>
                                                                <th scope="col">Users</th>
                                                                <th scope="col">Email</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">A</th>
                                                                <td>Dino King</td>
                                                                <td>dinoking231@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">B</th>
                                                                <td>Poppins sams</td>
                                                                <td>pops@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">C</th>
                                                                <td>Brian Shaw</td>
                                                                <td>swanbrian@gmail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Jimmy</td>
                                                <td>the Ostrich</td>
                                                <td>Dummy Text</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Cobra Kai</td>
                                                <td>the Snake</td>
                                                <td>Another Name</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped table-bordered"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td colspan="4"&gt;
                    &lt;table class="table text-nowrap mb-0"&gt;
                        &lt;thead&gt;
                            &lt;tr&gt;
                                &lt;th scope="col"&gt;Aplhabets&lt;/th&gt;
                                &lt;th scope="col"&gt;Users&lt;/th&gt;
                                &lt;th scope="col"&gt;Email&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                            &lt;tr&gt;
                                &lt;th scope="row"&gt;A&lt;/th&gt;
                                &lt;td&gt;Dino King&lt;/td&gt;
                                &lt;td&gt;dinoking231@gmail.com&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th scope="row"&gt;B&lt;/th&gt;
                                &lt;td&gt;Poppins sams&lt;/td&gt;
                                &lt;td&gt;pops@gmail.com&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th scope="row"&gt;C&lt;/th&gt;
                                &lt;td&gt;Brian Shaw&lt;/td&gt;
                                &lt;td&gt;swanbrian@gmail.com&lt;/td&gt;
                            &lt;/tr&gt;
                        &lt;/tbody&gt;
                    &lt;/table&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry&lt;/td&gt;
                &lt;td&gt;the Bird&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;4&lt;/th&gt;
                &lt;td&gt;Jimmy&lt;/td&gt;
                &lt;td&gt;the Ostrich&lt;/td&gt;
                &lt;td&gt;Dummy Text&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;5&lt;/th&gt;
                &lt;td&gt;Cobra Kai&lt;/td&gt;
                &lt;td&gt;the Snake&lt;/td&gt;
                &lt;td&gt;Another Name&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-10 -->

                <!-- Start:: row-11 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Always responsive
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></th>
                                                <th scope="col">Team Head</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Gmail</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Work Progress</th>
                                                <th scope="col">Revenue</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>Mayor Kelly
                                                    </div>
                                                </td>
                                                <td>Manufacturer</td>
                                                <td><span class="badge bg-primary-transparent">Team Lead</span></td>
                                                <td>mayorkrlly@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                            +4
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$10,984.29</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>Andrew Garfield
                                                    </div>
                                                </td>
                                                <td>Managing Director</td>
                                                <td><span class="badge bg-warning-transparent">Director</span></td>
                                                <td>andrewgarfield@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                            +4
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$1.4billion</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>Simon Cowel
                                                    </div>
                                                </td>
                                                <td>Service Manager</td>
                                                <td><span class="badge bg-success-transparent">Manager</span></td>
                                                <td>simoncowel234@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/16.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                            +10
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$7,123.21</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>Mirinda Hers
                                                    </div>
                                                </td>
                                                <td>Recruiter</td>
                                                <td><span class="badge bg-danger-transparent">Employee</span></td>
                                                <td>mirindahers@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                            +6
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$2,325.45</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="ri-download-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;th scope="col"&gt;Team Head&lt;/th&gt;
                &lt;th scope="col"&gt;Category&lt;/th&gt;
                &lt;th scope="col"&gt;Role&lt;/th&gt;
                &lt;th scope="col"&gt;Gmail&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Work Progress&lt;/th&gt;
                &lt;th scope="col"&gt;Revenue&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
                        &lt;/span&gt;Mayor Kelly
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Manufacturer&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Team Lead&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;mayorkrlly@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +4
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$10,984.29&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
                        &lt;/span&gt;Andrew Garfield
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Managing Director&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Director&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;andrewgarfield@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +4
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$1.4billion&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
                        &lt;/span&gt;Simon Cowel
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Service Manager&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Manager&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;simoncowel234@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/16.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +10
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$7,123.21&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/span&gt;Mirinda Hers
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Recruiter&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Employee&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;mirindahers@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +6
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$2,325.45&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-11 -->

                <!-- Start:: row-12 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Vertical alignment
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="w-25">Heading 1</th>
                                                <th scope="col" class="w-25">Heading 2</th>
                                                <th scope="col" class="w-25">Heading 3</th>
                                                <th scope="col" class="w-25">Heading 4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                                    the
                                                    table</td>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                                    the
                                                    table</td>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                                    the
                                                    table</td>
                                                <td>This here is some placeholder text, intended to take up
                                                    quite a
                                                    bit of vertical space, to demonstrate how the vertical
                                                    alignment
                                                    works in the preceding cells.</td>
                                            </tr>
                                            <tr class="align-bottom">
                                                <td>This cell inherits <code>vertical-align: bottom;</code> from
                                                    the
                                                    table row</td>
                                                <td>This cell inherits <code>vertical-align: bottom;</code> from
                                                    the
                                                    table row</td>
                                                <td>This cell inherits <code>vertical-align: bottom;</code> from
                                                    the
                                                    table row</td>
                                                <td>This here is some placeholder text, intended to take up
                                                    quite a
                                                    bit of vertical space, to demonstrate how the vertical
                                                    alignment
                                                    works in the preceding cells.</td>
                                            </tr>
                                            <tr>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                                    the
                                                    table</td>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                                    the
                                                    table</td>
                                                <td class="align-top">This cell is aligned to the top.</td>
                                                <td>This here is some placeholder text, intended to take up
                                                    quite a
                                                    bit of vertical space, to demonstrate how the vertical
                                                    alignment
                                                    works in the preceding cells.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table align-middle"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 1&lt;/th&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 2&lt;/th&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 3&lt;/th&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 4&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This here is some placeholder text, intended to take up
                    quite a
                    bit of vertical space, to demonstrate how the vertical
                    alignment
                    works in the preceding cells.&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="align-bottom"&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                    the
                    table row&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                    the
                    table row&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                    the
                    table row&lt;/td&gt;
                &lt;td&gt;This here is some placeholder text, intended to take up
                    quite a
                    bit of vertical space, to demonstrate how the vertical
                    alignment
                    works in the preceding cells.&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td class="align-top"&gt;This cell is aligned to the top.&lt;/td&gt;
                &lt;td&gt;This here is some placeholder text, intended to take up
                    quite a
                    bit of vertical space, to demonstrate how the vertical
                    alignment
                    works in the preceding cells.&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-12 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>
        </div>


        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="text-dark fw-semibold">zanex</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->
        <div class="offcanvas offcanvas-end offcanvas-sidebar overflow-auto" tabindex="-1" id="offcanvassidebar" >
             <!-- Sidebar-right -->
             <div class="card custom-card tab-heading shadow-none">
                <div class="card-header rounded-0">
                    <div class="card-title">
                        Notifications
                    </div>
                    <div class="card-options ms-auto" data-bs-theme="dark">
                        <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-tabs my-3 nav-style-1 justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#home31"
                                aria-selected="true"> <i class="fe fe-user"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" role="tab" href="#about32"
                                aria-selected="false"><i class="fe fe-users "></i> Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" role="tab" href="#service33"
                                aria-selected="false"><i class="fe fe-settings"></i>Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active text-muted p-0 rounded-0 border-bottom-0 border-end-0" id="home31" role="tabpanel">
                            <div class="card-body text-center">
                                <div class="dropdown user-pro-body">
                                    <div class="">
                                        <img alt="user-img" class="avatar avatar-xl rounded-circle mx-auto text-center" src="../assets/images/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
                                    </div>
                                    <div class="user-info mg-t-20">
                                        <h6 class="fw-semibold  mt-2 mb-0">Mintrona Pechon</h6>
                                        <span class="mb-0 text-muted fs-12">Premium Member</span>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
                                <div class="d-flex"><i class="fe fe-user me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Profile</h6>
                                        <p class="fs-12 mb-0 text-muted">Profile Personal information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="default-chat.html">
                                <div class="d-flex"><i class="fe fe-message-square me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Messages</h6>
                                        <p class="fs-12 mb-0 text-muted">Person message information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="emailservices.html">
                                <div class="d-flex"><i class="fe fe-mail me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Mails</h6>
                                        <p class="fs-12 mb-0 text-muted">Persons mail information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="editprofile.html">
                                <div class="d-flex"><i class="fe fe-settings me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">Account Settings</h6>
                                        <p class="fs-12 mb-0 text-muted">Settings Information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="login.html">
                                <div class="d-flex"><i class="fe fe-power me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">Sign Out</h6>
                                        <p class="fs-12 mb-0 text-muted">Account Signout</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-pane text-muted p-0 rounded-0 overflow-auto border-end-0" id="about32" role="tabpanel">
                            <div class="list-group list-group-flush ">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/9.jpg"><span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Mozelle Belt</div>
                                        <p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/11.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Florinda Carasco</div>
                                        <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/10.jpg"><span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Alina Bernier</div>
                                        <p class="mb-0 tx-12 text-muted">alinaaernier@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/2.jpg"><span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Zula Mclaughin</div>
                                        <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/13.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Isidro Heide</div>
                                        <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/12.jpg"><span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Mozelle Belt</div>
                                        <p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/4.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Florinda Carasco</div>
                                        <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/2.jpg"><span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Zula Mclaughin</div>
                                        <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/7.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Alina Bernier</div>
                                        <p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/2.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Zula Mclaughin</div>
                                        <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/14.jpg"><span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Isidro Heide</div>
                                        <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/11.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Florinda Carasco</div>
                                        <p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/9.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Alina Bernier</div>
                                        <p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/15.jpg"><span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Zula Mclaughin</div>
                                        <p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="me-2">
                                        <img class="avatar avatar-md rounded-circle cover-image" alt="img" src="../assets/images/faces/4.jpg">
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold">Isidro Heide</div>
                                        <p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane text-muted p-0 rounded-0 border-end-0" id="service33" role="tabpanel">
                            <a class="dropdown-item bg-white pd-y-10" href="javascript:void(0);">
                                Account Settings
                            </a>
                            <div class="card-body py-2">

                                <div class="form-check form-switch form-check-md my-2 mt-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked1">Updates Automatically</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2">
                                    <label class="form-check-label" for="flexSwitchCheckChecked2">Allow Location Map</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked3" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked3">Show Contacts</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4">
                                    <label class="form-check-label" for="flexSwitchCheckChecked4">Show Notification</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked5" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked5">Show Tasks Statistics</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked6" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked6">Show Email Notification</label>
                                </div>
                            </div>
                            <a class="dropdown-item bg-white pd-y-10" href="javascript:void(0);">
                                General Settings
                            </a>
                            <div class="card-body py-2">
                                <div class="form-check form-switch form-check-md my-2 mt-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked7" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked7">Show User Online</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked8">
                                    <label class="form-check-label" for="flexSwitchCheckChecked8">Website Notification</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked9">
                                    <label class="form-check-label" for="flexSwitchCheckChecked9">Show Recent activity</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked10" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked10">Logout Automatically</label>
                                </div>
                                <div class="form-check form-switch form-check-md my-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked12" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckChecked12">Allow All Notifications</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Sidebar-right-->
        </div>

    </div>

    
    <!-- Scroll To Top -->
    <div class="scrollToTop" id="back-to-top">
        <i class="ri-arrow-up-s-fill fs-20"></i>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="../assets/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="../assets/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>

    <!-- Color Picker JS -->
    <script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


    
    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script>

    <!-- Prism JS -->
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/js/prism-custom.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>