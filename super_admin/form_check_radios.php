<!DOCTYPE html>
<php lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard php5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, php admin panel template, bootstrap admin template, php and css templates, bootstrap, bootstrap php template, php admin dashboard template, bootstrap dashboard, admin panel php template">
    
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
                                <a href="index.php" class="header-logo">
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">New review received</a>
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">New Mails Received</a>
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">New Order Received</a>
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">New Updates
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">New Order Placed</a>
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
                                        <a href="default-chat.php" class="btn text-muted p-0 border-0">View all Notification</a>
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">Madeleine<span
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">Anthony<span
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">Olivia<span
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">Sanderson<span
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
                                                    <p class="mb-0 fw-semibold"><a href="default-chat.php">Senrio<span
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
                                        <a href="default-chat.php" class="btn text-muted p-0 border-0">See all Messages</a>
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
                                                        <a href="cart.php">Cup Set</a>
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
                                                        <a href="cart.php">Wired headset</a>
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
                                                        <a href="cart.php">modern Chair</a>
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
                                                        <a href="cart.php">Flower Vase</a>
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
                                                        <a href="cart.php">Sun Glasses</a>
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
                                        <a href="checkout.php" class="btn text-muted p-0 border-0">Proceed to checkout</a>
                                    </div>
                                </div>
                                <div class="p-5 empty-item d-none">
                                    <div class="text-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                            <i class="ri-shopping-cart-2-line fs-2"></i>
                                        </span>
                                        <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                        <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                        <a href="shop.php" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue
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
                                <li><a class="dropdown-item d-flex" href="profile.php"><i
                                            class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                                <li><a class="dropdown-item d-flex" href="email.php"><i
                                            class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                                            class="badge bg-success-transparent ms-auto">25</span></a></li>
                                <li><a class="dropdown-item d-flex border-block-end" href="Timeline.php"><i
                                            class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                                <li><a class="dropdown-item d-flex" href="emailservices.php"><i
                                            class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                                <li><a class="dropdown-item d-flex" href="Faq.php"><i
                                            class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                                <li><a class="dropdown-item d-flex" href="login.php"><i
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
                    <a href="index.php" class="header-logo">
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
                                <a href="index.php" class="side-menu__item">
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
                                <a href="widgets.php" class="side-menu__item">
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
                                        <a href="alerts.php" class="side-menu__item">Alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="badge.php" class="side-menu__item">Badge</a>
                                    </li>
                                    <li class="slide">
                                        <a href="breadcrumb.php" class="side-menu__item">Breadcrumb</a>
                                    </li>
                                    <li class="slide">
                                        <a href="buttons.php" class="side-menu__item">Buttons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="buttongroup.php" class="side-menu__item">Button Group</a>
                                    </li>
                                    <li class="slide">
                                        <a href="cards.php" class="side-menu__item">Cards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="dropdowns.php" class="side-menu__item">Dropdowns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="images_figures.php" class="side-menu__item">Images & Figures</a>
                                    </li>
                                    <li class="slide">
                                        <a href="listgroup.php" class="side-menu__item">List Group</a>
                                    </li>
                                    <li class="slide">
                                        <a href="navs_tabs.php" class="side-menu__item">Navs & Tabs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="object-fit.php" class="side-menu__item">Object Fit</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pagination.php" class="side-menu__item">Pagination</a>
                                    </li>
                                    <li class="slide">
                                        <a href="popovers.php" class="side-menu__item">Popovers</a>
                                    </li>
                                    <li class="slide">
                                        <a href="progress.php" class="side-menu__item">Progress</a>
                                    </li>
                                    <li class="slide">
                                        <a href="spinners.php" class="side-menu__item">Spinners</a>
                                    </li>
                                    <li class="slide">
                                        <a href="toasts.php" class="side-menu__item">Toasts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="tags.php" class="side-menu__item">Tags</a>
                                    </li>
                                    <li class="slide">
                                        <a href="tooltips.php" class="side-menu__item">Tooltips</a>
                                    </li>
                                    <li class="slide">
                                        <a href="typography.php" class="side-menu__item">Typography</a>
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
                                        <a href="avatars.php" class="side-menu__item">Avatars</a>
                                    </li>
                                    <li class="slide">
                                        <a href="borders.php" class="side-menu__item">Borders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="breakpoints.php" class="side-menu__item">Breakpoints</a>
                                    </li>
                                    <li class="slide">
                                        <a href="colors.php" class="side-menu__item">Colors</a>
                                    </li>
                                    <li class="slide">
                                        <a href="columns.php" class="side-menu__item">Columns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="flex.php" class="side-menu__item">Flex</a>
                                    </li>
                                    <li class="slide">
                                        <a href="gutters.php" class="side-menu__item">Gutters</a>
                                    </li>
                                    <li class="slide">
                                        <a href="helpers.php" class="side-menu__item">Helpers</a>
                                    </li>
                                    <li class="slide">
                                        <a href="position.php" class="side-menu__item">Position</a>
                                    </li>
                                    <li class="slide">
                                        <a href="more.php" class="side-menu__item">Additional Content</a>
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
                                                <a href="apex-line-charts.php" class="side-menu__item">Line Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-area-charts.php" class="side-menu__item">Area Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-column-charts.php" class="side-menu__item">Column Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-bar-charts.php" class="side-menu__item">Bar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-mixed-charts.php" class="side-menu__item">Mixed Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-rangearea-charts.php" class="side-menu__item">Range Area Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-timeline-charts.php" class="side-menu__item">Timeline Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-candlestick-charts.php" class="side-menu__item">CandleStick
                                                    Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-boxplot-charts.php" class="side-menu__item">Boxplot Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-bubble-charts.php" class="side-menu__item">Bubble Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-scatter-charts.php" class="side-menu__item">Scatter Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-heatmap-charts.php" class="side-menu__item">Heatmap Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-treemap-charts.php" class="side-menu__item">Treemap Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-pie-charts.php" class="side-menu__item">Pie Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-radialbar-charts.php" class="side-menu__item">Radialbar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-radar-charts.php" class="side-menu__item">Radar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="apex-polararea-charts.php" class="side-menu__item">Polararea Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="chartjs-charts.php" class="side-menu__item">Chartjs Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="echarts.php" class="side-menu__item">Echart Charts</a>
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
                                                <a href="form_inputs.php" class="side-menu__item">Inputs</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_check_radios.php" class="side-menu__item">Checks & Radios</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_input_group.php" class="side-menu__item">Input Group</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_select.php" class="side-menu__item">Form Select</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_range.php" class="side-menu__item">Range Slider</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_input_masks.php" class="side-menu__item">Input Masks</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_file_uploads.php" class="side-menu__item">File Uploads</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_dateTime_pickers.php" class="side-menu__item">Date,Time Picker</a>
                                            </li>
                                            <li class="slide">
                                                <a href="form_color_pickers.php" class="side-menu__item">Color Pickers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="floating_labels.php" class="side-menu__item">Floating Labels</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_layout.php" class="side-menu__item">Form Layouts</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="quill_editor.php" class="side-menu__item">Quill Editor</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="form_validation.php" class="side-menu__item">Validation</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_select2.php" class="side-menu__item">Select2</a>
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
                                        <a href="accordions_collpase.php" class="side-menu__item">Accordions & Collapse</a>
                                    </li>
                                    <li class="slide">
                                        <a href="carousel.php" class="side-menu__item">Carousel</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-currencies.php" class="side-menu__item">Crypto-currencies</a>
                                    </li>
                                    <li class="slide">
                                        <a href="default-chat.php" class="side-menu__item">Default Chat</a>
                                    </li>
                                    <li class="slide">
                                        <a href="draggable-cards.php" class="side-menu__item">Draggable Cards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="modals_closes.php" class="side-menu__item">Modals & Closes</a>
                                    </li>
                                    <li class="slide">
                                        <a href="navbar.php" class="side-menu__item">Navbar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="offcanvas.php" class="side-menu__item">Offcanvas</a>
                                    </li>
                                    <li class="slide">
                                        <a href="placeholders.php" class="side-menu__item">Placeholders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ratings.php" class="side-menu__item">Ratings</a>
                                    </li>
                                    <li class="slide">
                                        <a href="scrollspy.php" class="side-menu__item">Scrollspy</a>
                                    </li>
                                    <li class="slide">
                                        <a href="search.php" class="side-menu__item">Search</a>
                                    </li>
                                    <li class="slide">
                                        <a href="swiperjs.php" class="side-menu__item">Swiper JS</a>
                                    </li>
                                    <li class="slide">
                                        <a href="users-list.php" class="side-menu__item">User List</a>
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
                                        <a href="full-calendar.php" class="side-menu__item">Full Calendar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="gallery.php" class="side-menu__item">Gallery</a>
                                    </li>
                                    <li class="slide">
                                        <a href="sweet_alerts.php" class="side-menu__item">Sweet Alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="timeline.php" class="side-menu__item">Timeline</a>
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
                                        <a href="profile.php" class="side-menu__item"> Profile</a>
                                    </li>
                                    <li class="slide">
                                        <a href="editprofile.php" class="side-menu__item"> Edit Profile</a>
                                    </li>
                                    <li class="slide">
                                        <a href="email.php" class="side-menu__item"> Mail-Inbox</a>
                                    </li>
                                    <li class="slide">
                                        <a href="emailservices.php" class="side-menu__item">Mail-Compose</a>
                                    </li>
                                    <li class="slide">
                                        <a href="about.php" class="side-menu__item"> About Company</a>
                                    </li>
                                    <li class="slide">
                                        <a href="services.php" class="side-menu__item"> Services</a>
                                    </li>
                                    <li class="slide">
                                        <a href="faq.php" class="side-menu__item"> FAQS</a>
                                    </li>
                                    <li class="slide">
                                        <a href="terms.php" class="side-menu__item"> Terms</a>
                                    </li>
                                    <li class="slide">
                                        <a href="invoice.php" class="side-menu__item"> Invoice</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pricing.php" class="side-menu__item"> Pricing Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="empty.php" class="side-menu__item"> Empty Page</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Blog
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="blog.php" class="side-menu__item">Blog</a>
                                            </li>
                                            <li class="slide">
                                                <a href="blog-details.php" class="side-menu__item">Blog Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="blog-post.php" class="side-menu__item">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">E-Commerce
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="shop.php" class="side-menu__item">Shop</a>
                                            </li>
                                            <li class="slide">
                                                <a href="shop-description.php" class="side-menu__item">Shopping Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="cart.php" class="side-menu__item">Shopping Cart</a>
                                            </li>
                                            <li class="slide">
                                                <a href="wishlist.php" class="side-menu__item">Wishlist</a>
                                            </li>
                                            <li class="slide">
                                                <a href="checkout.php" class="side-menu__item">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">File Manager
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="file-manager.php" class="side-menu__item">File Manager</a>
                                            </li>
                                            <li class="slide">
                                                <a href="filemanager-list.php" class="side-menu__item">File Manager List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="filemanager-details.php" class="side-menu__item">File Details</a>
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
                                        <a href="tables.php" class="side-menu__item">Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="grid-tables.php" class="side-menu__item">Grid JS Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="data-tables.php" class="side-menu__item">Data Tables</a>

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
                                        <a href="login.php" class="side-menu__item"> Login</a>
                                    </li>
                                    <li class="slide">
                                        <a href="register.php" class="side-menu__item"> Register</a>
                                    </li>
                                    <li class="slide">
                                        <a href="forgot-password.php" class="side-menu__item"> Forgot Password</a>
                                    </li>
                                    <li class="slide">
                                        <a href="lockscreen.php" class="side-menu__item"> Lock screen</a>
                                    </li>
                                    <li class="slide">
                                        <a href="construction.php" class="side-menu__item"> Under Construction</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Error Pages
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="400.php" class="side-menu__item">400</a>
                                            </li>
                                            <li class="slide">
                                                <a href="401.php" class="side-menu__item">401</a>
                                            </li>
                                            <li class="slide">
                                                <a href="403.php" class="side-menu__item">403</a>
                                            </li>
                                            <li class="slide">
                                                <a href="404.php" class="side-menu__item">404</a>
                                            </li>
                                            <li class="slide">
                                                <a href="500.php" class="side-menu__item">500</a>
                                            </li>
                                            <li class="slide">
                                                <a href="503.php" class="side-menu__item">503</a>
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
                                        <a href="google-maps.php" class="side-menu__item">Google Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="leaflet-maps.php" class="side-menu__item">Leaflet Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="vector-maps.php" class="side-menu__item">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="icons.php" class="side-menu__item">
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
                            <h1 class="page-title fw-semibold fs-20 mb-0">Checks & Radios</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Form Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Checks & Radios</li>
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
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Checks
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checked checkbox
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"&gt;
    &lt;label class="form-check-label" for="flexCheckDefault"&gt;
        Default checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
        checked&gt;
    &lt;label class="form-check-label" for="flexCheckChecked"&gt;
        Checked checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Disabled
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled"
                                            disabled="">
                                        <label class="form-check-label" for="flexCheckDisabled">
                                            Disabled checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckCheckedDisabled" checked="" disabled="">
                                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                                            Disabled checked checkbox
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled"
        disabled=""&gt;
    &lt;label class="form-check-label" for="flexCheckDisabled"&gt;
        Disabled checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value=""
        id="flexCheckCheckedDisabled" checked="" disabled=""&gt;
    &lt;label class="form-check-label" for="flexCheckCheckedDisabled"&gt;
        Disabled checked checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Radios
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked="">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Default checked radio
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="flexRadioDefault"
        id="flexRadioDefault1"&gt;
    &lt;label class="form-check-label" for="flexRadioDefault1"&gt;
        Default radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="flexRadioDefault"
        id="flexRadioDefault2" checked=""&gt;
    &lt;label class="form-check-label" for="flexRadioDefault2"&gt;
        Default checked radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Disabled
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioDisabled" disabled="">
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            Disabled radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioCheckedDisabled" checked="" disabled="">
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                            Disabled checked radio
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="flexRadioDisabled"
        id="flexRadioDisabled" disabled=""&gt;
    &lt;label class="form-check-label" for="flexRadioDisabled"&gt;
        Disabled radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="flexRadioDisabled"
        id="flexRadioCheckedDisabled" checked="" disabled=""&gt;
    &lt;label class="form-check-label" for="flexRadioCheckedDisabled"&gt;
        Disabled checked radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Default (stacked)
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"
                                            disabled="">
                                        <label class="form-check-label" for="defaultCheck2">
                                            Disabled checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios3" value="option3" disabled="">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Disabled radio
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="defaultCheck1"&gt;
    &lt;label class="form-check-label" for="defaultCheck1"&gt;
        Default checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="defaultCheck2"
        disabled=""&gt;
    &lt;label class="form-check-label" for="defaultCheck2"&gt;
        Disabled checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="exampleRadios"
        id="exampleRadios1" value="option1" checked=""&gt;
    &lt;label class="form-check-label" for="exampleRadios1"&gt;
        Default radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-0"&gt;
    &lt;input class="form-check-input" type="radio" name="exampleRadios"
        id="exampleRadios3" value="option3" disabled=""&gt;
    &lt;label class="form-check-label" for="exampleRadios3"&gt;
        Disabled radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Switches
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch
                                            checkbox input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked="">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                            checkbox input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDisabled" disabled="">
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled
                                            switch
                                            checkbox input</label>
                                    </div>
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckCheckedDisabled" checked="" disabled="">
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled
                                            checked switch checkbox input</label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check form-switch"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="flexSwitchCheckDefault"&gt;
    &lt;label class="form-check-label" for="flexSwitchCheckDefault"&gt;Default switch
        checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="flexSwitchCheckChecked" checked=""&gt;
    &lt;label class="form-check-label" for="flexSwitchCheckChecked"&gt;Checked switch
        checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="flexSwitchCheckDisabled" disabled=""&gt;
    &lt;label class="form-check-label" for="flexSwitchCheckDisabled"&gt;Disabled
        switch
        checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch mb-0"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="flexSwitchCheckCheckedDisabled" checked="" disabled=""&gt;
    &lt;label class="form-check-label" for="flexSwitchCheckCheckedDisabled"&gt;Disabled
        checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Checkbox Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-sm-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked="">
                                        <label class="form-check-label" for="checkebox-sm">
                                            Default
                                        </label>
                                    </div>
                                    <div class="form-check form-check-md d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-md" checked="">
                                        <label class="form-check-label" for="checkebox-md">
                                            Medium
                                        </label>
                                    </div>
                                    <div class="form-check form-check-lg d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-lg" checked="">
                                        <label class="form-check-label" for="checkebox-lg">
                                            Large
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked=""&gt;
    &lt;label class="form-check-label" for="checkebox-sm"&gt;
        Default
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-md d-flex align-items-center"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-md" checked=""&gt;
    &lt;label class="form-check-label" for="checkebox-md"&gt;
        Medium
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-lg d-flex align-items-center"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-lg" checked=""&gt;
    &lt;label class="form-check-label" for="checkebox-lg"&gt;
        Large
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Radio Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-sm-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Radio" id="Radio-sm">
                                        <label class="form-check-label" for="Radio-sm">
                                            default
                                        </label>
                                    </div>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="radio" name="Radio" id="Radio-md">
                                        <label class="form-check-label" for="Radio-md">
                                            Medium
                                        </label>
                                    </div>
                                    <div class="form-check form-check-lg">
                                        <input class="form-check-input" type="radio" name="Radio" id="Radio-lg" checked="">
                                        <label class="form-check-label" for="Radio-lg">
                                            Large
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check"&gt;
    &lt;input class="form-check-input" type="radio" name="Radio" id="Radio-sm"&gt;
    &lt;label class="form-check-label" for="Radio-sm"&gt;
        default
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-md"&gt;
    &lt;input class="form-check-input" type="radio" name="Radio" id="Radio-md"&gt;
    &lt;label class="form-check-label" for="Radio-md"&gt;
        Medium
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-lg"&gt;
    &lt;input class="form-check-input" type="radio" name="Radio" id="Radio-lg" checked=""&gt;
    &lt;label class="form-check-label" for="Radio-lg"&gt;
        Large
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Switch Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-sm-flex align-item-center justify-content-between">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="switch-sm">
                                        <label class="form-check-label" for="switch-sm">Default</label>
                                    </div>
                                    <div class="form-check form-check-md form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="switch-md">
                                        <label class="form-check-label" for="switch-md">Medium</label>
                                    </div>
                                    <div class="form-check form-check-lg form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="switch-lg">
                                        <label class="form-check-label" for="switch-lg">Large</label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check form-switch"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="switch-sm"&gt;
    &lt;label class="form-check-label" for="switch-sm"&gt;Default&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-md form-switch"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="switch-md"&gt;
    &lt;label class="form-check-label" for="switch-md"&gt;Medium&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-lg form-switch"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="switch-lg"&gt;
    &lt;label class="form-check-label" for="switch-lg"&gt;Large&lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xl-6  col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Inline
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3" disabled>
                                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio3" value="option3" disabled>
                                        <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox1"
        value="option1"&gt;
    &lt;label class="form-check-label" for="inlineCheckbox1"&gt;1&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox2"
        value="option2"&gt;
    &lt;label class="form-check-label" for="inlineCheckbox2"&gt;2&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="checkbox" id="inlineCheckbox3"
        value="option3" disabled&gt;
    &lt;label class="form-check-label" for="inlineCheckbox3"&gt;3 (disabled)&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="inlineRadio1" value="option1"&gt;
    &lt;label class="form-check-label" for="inlineRadio1"&gt;1&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="inlineRadio2" value="option2"&gt;
    &lt;label class="form-check-label" for="inlineRadio2"&gt;2&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-inline"&gt;
    &lt;input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="inlineRadio3" value="option3" disabled&gt;
    &lt;label class="form-check-label" for="inlineRadio3"&gt;3 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Without labels
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="me-3">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="...">
                                    </span>
                                    <span>
                                        <input class="form-check-input" type="radio" name="radioNoLabel"
                                            id="radioNoLabel1" value="" aria-label="...">
                                    </span>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;span class="me-3"&gt;
    &lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
        aria-label="..."&gt;
&lt;/span&gt;
&lt;span&gt;
    &lt;input class="form-check-input" type="radio" name="radioNoLabel"
        id="radioNoLabel1" value="" aria-label="..."&gt;
&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Reverse
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-check-reverse mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="reverseCheck1">
                                        <label class="form-check-label" for="reverseCheck1">
                                            Reverse checkbox
                                        </label>
                                    </div>
                                    <div class="form-check form-check-reverse mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="reverseCheck2" disabled="">
                                        <label class="form-check-label" for="reverseCheck2">
                                            Disabled reverse checkbox
                                        </label>
                                    </div>

                                    <div class="form-check form-switch form-check-reverse">
                                        <input class="form-check-input" type="checkbox"
                                            id="flexSwitchCheckReverse">
                                        <label class="form-check-label" for="flexSwitchCheckReverse">Reverse
                                            switch
                                            checkbox input</label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check form-check-reverse mb-3"&gt;
    &lt;input class="form-check-input" type="checkbox" value=""
        id="reverseCheck1"&gt;
    &lt;label class="form-check-label" for="reverseCheck1"&gt;
        Reverse checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-check-reverse mb-3"&gt;
    &lt;input class="form-check-input" type="checkbox" value=""
        id="reverseCheck2" disabled=""&gt;
    &lt;label class="form-check-label" for="reverseCheck2"&gt;
        Disabled reverse checkbox
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class="form-check form-switch form-check-reverse"&gt;
    &lt;input class="form-check-input" type="checkbox"
        id="flexSwitchCheckReverse"&gt;
    &lt;label class="form-check-label" for="flexSwitchCheckReverse"&gt;Reverse
        switch
        checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outlined styles
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="checkbox" class="btn-check" id="btn-check-outlined">
                                    <label class="btn btn-outline-primary mb-3" for="btn-check-outlined">Single
                                        toggle</label><br>

                                    <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked
                                       >
                                    <label class="btn btn-outline-secondary mb-3"
                                        for="btn-check-2-outlined">Checked</label><br>

                                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                        checked>
                                    <label class="btn btn-outline-success m-1" for="success-outlined">Checked success
                                        radio</label>

                                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                                       >
                                    <label class="btn btn-outline-danger m-1" for="danger-outlined">Danger radio</label>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;input type="checkbox" class="btn-check" id="btn-check-outlined"&gt;
&lt;label class="btn btn-outline-primary mb-3" for="btn-check-outlined"&gt;Single
    toggle&lt;/label&gt;&lt;br&gt;

&lt;input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked
    &gt;
&lt;label class="btn btn-outline-secondary mb-3"
    for="btn-check-2-outlined"&gt;Checked&lt;/label&gt;&lt;br&gt;

&lt;input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
    checked&gt;
&lt;label class="btn btn-outline-success m-1" for="success-outlined"&gt;Checked success
    radio&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
    &gt;
&lt;label class="btn btn-outline-danger m-1" for="danger-outlined"&gt;Danger radio&lt;/label&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Radio toggle buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="radio" class="btn-check" name="options" id="option1"
                                            checked="">
                                    <label class="btn btn-primary m-1" for="option1">Checked</label>

                                    <input type="radio" class="btn-check" name="options" id="option2"
                                       >
                                    <label class="btn btn-primary m-1" for="option2">Radio</label>

                                    <input type="radio" class="btn-check" name="options" id="option3"
                                        disabled="">
                                    <label class="btn btn-primary m-1" for="option3">Disabled</label>

                                    <input type="radio" class="btn-check" name="options" id="option4"
                                       >
                                    <label class="btn btn-primary m-1" for="option4">Radio</label>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;input type="radio" class="btn-check" name="options" id="option1"
    checked=""&gt;
&lt;label class="btn btn-primary m-1" for="option1"&gt;Checked&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options" id="option2"
&gt;
&lt;label class="btn btn-primary m-1" for="option2"&gt;Radio&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options" id="option3"
disabled=""&gt;
&lt;label class="btn btn-primary m-1" for="option3"&gt;Disabled&lt;/label&gt;

&lt;input type="radio" class="btn-check" name="options" id="option4"
&gt;
&lt;label class="btn btn-primary m-1" for="option4"&gt;Radio&lt;/label&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Checkbox toggle buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="checkbox" class="btn-check" id="btn-check">
                                    <label class="btn btn-primary m-1" for="btn-check">Single toggle</label>
                                    <input type="checkbox" class="btn-check" id="btn-check-2" checked
                                       >
                                    <label class="btn btn-primary m-1" for="btn-check-2">Checked</label>
                                    <input type="checkbox" class="btn-check" id="btn-check-3"
                                        disabled>
                                    <label class="btn btn-primary m-1" for="btn-check-3">Disabled</label>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;input type="checkbox" class="btn-check" id="btn-check"&gt;
    &lt;label class="btn btn-primary m-1" for="btn-check"&gt;Single toggle&lt;/label&gt;
    &lt;input type="checkbox" class="btn-check" id="btn-check-2" checked
       &gt;
    &lt;label class="btn btn-primary m-1" for="btn-check-2"&gt;Checked&lt;/label&gt;
    &lt;input type="checkbox" class="btn-check" id="btn-check-3"
        disabled&gt;
    &lt;label class="btn btn-primary m-1" for="btn-check-3"&gt;Disabled&lt;/label&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="row row-cols-12">
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Colored Checkboxes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="primaryChecked" checked="">
                                        <label class="form-check-label" for="primaryChecked">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-secondary" type="checkbox" value="" id="secondaryChecked" checked="">
                                        <label class="form-check-label" for="secondaryChecked">
                                            Secondary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-warning" type="checkbox" value="" id="warningChecked" checked="">
                                        <label class="form-check-label" for="warningChecked">
                                            Warning
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-info" type="checkbox" value="" id="infoChecked" checked="">
                                        <label class="form-check-label" for="infoChecked">
                                            Info
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked" checked="">
                                        <label class="form-check-label" for="successChecked">
                                            Success
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-danger" type="checkbox" value="" id="dangerChecked" checked="">
                                        <label class="form-check-label" for="dangerChecked">
                                            Danger
                                        </label>
                                    </div>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input form-checked-dark" type="checkbox" value="" id="darkChecked" checked="">
                                        <label class="form-check-label" for="darkChecked">
                                            Dark
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input" type="checkbox" value="" id="primaryChecked" checked=""&gt;
    &lt;label class="form-check-label" for="primaryChecked"&gt;
        Primary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-secondary" type="checkbox" value="" id="secondaryChecked" checked=""&gt;
    &lt;label class="form-check-label" for="secondaryChecked"&gt;
        Secondary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-warning" type="checkbox" value="" id="warningChecked" checked=""&gt;
    &lt;label class="form-check-label" for="warningChecked"&gt;
        Warning
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-info" type="checkbox" value="" id="infoChecked" checked=""&gt;
    &lt;label class="form-check-label" for="infoChecked"&gt;
        Info
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked" checked=""&gt;
    &lt;label class="form-check-label" for="successChecked"&gt;
        Success
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-danger" type="checkbox" value="" id="dangerChecked" checked=""&gt;
    &lt;label class="form-check-label" for="dangerChecked"&gt;
        Danger
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-0"&gt;
    &lt;input class="form-check-input form-checked-dark" type="checkbox" value="" id="darkChecked" checked=""&gt;
    &lt;label class="form-check-label" for="darkChecked"&gt;
        Dark
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outline Checkboxes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline" type="checkbox" value="" id="primaryoutlineChecked" checked="">
                                        <label class="form-check-label" for="primaryoutlineChecked">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-secondary" type="checkbox" value="" id="secondaryoutlineChecked" checked="">
                                        <label class="form-check-label" for="secondaryoutlineChecked">
                                            Secondary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-warning" type="checkbox" value="" id="warningoutlineChecked" checked="">
                                        <label class="form-check-label" for="warningoutlineChecked">
                                            Warning
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-info" type="checkbox" value="" id="infooutlineChecked" checked="">
                                        <label class="form-check-label" for="infooutlineChecked">
                                            Info
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-success" type="checkbox" value="" id="successoutlineChecked" checked="">
                                        <label class="form-check-label" for="successoutlineChecked">
                                            Success
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-danger" type="checkbox" value="" id="dangeroutlineChecked" checked="">
                                        <label class="form-check-label" for="dangeroutlineChecked">
                                            Danger
                                        </label>
                                    </div>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input form-checked-outline form-checked-dark" type="checkbox" value="" id="darkoutlineChecked" checked="">
                                        <label class="form-check-label" for="darkoutlineChecked">
                                            Dark
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline" type="checkbox" value="" id="primaryoutlineChecked" checked=""&gt;
    &lt;label class="form-check-label" for="primaryoutlineChecked"&gt;
        Primary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-secondary" type="checkbox" value="" id="secondaryoutlineChecked" checked=""&gt;
    &lt;label class="form-check-label" for="secondaryoutlineChecked"&gt;
        Secondary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-warning" type="checkbox" value="" id="warningoutlineChecked" checked=""&gt;
    &lt;label class="form-check-label" for="warningoutlineChecked"&gt;
        Warning
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-info" type="checkbox" value="" id="infooutlineChecked" checked=""&gt;
    &lt;label class="form-check-label" for="infooutlineChecked"&gt;
        Info
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-success" type="checkbox" value="" id="successoutlineChecked" checked=""&gt;
    &lt;label class="form-check-label" for="successoutlineChecked"&gt;
        Success
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-danger" type="checkbox" value="" id="dangeroutlineChecked" checked=""&gt;
    &lt;label class="form-check-label" for="dangeroutlineChecked"&gt;
        Danger
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-0"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-dark" type="checkbox" value="" id="darkoutlineChecked" checked=""&gt;
    &lt;label class="form-check-label" for="darkoutlineChecked"&gt;
        Dark
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Colored Radios
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="primaryRadio" id="primaryRadio" checked="">
                                        <label class="form-check-label" for="primaryRadio">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-secondary" type="radio" name="secondaryRadio" id="secondaryRadio" checked="">
                                        <label class="form-check-label" for="secondaryRadio">
                                            Secondary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-warning" type="radio" name="warningRadio" id="warningRadio" checked="">
                                        <label class="form-check-label" for="warningRadio">
                                            Warning
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-info" type="radio" name="InfoRadio" id="InfoRadio" checked="">
                                        <label class="form-check-label" for="InfoRadio">
                                            Info
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-success" type="radio" name="successRadio" id="successRadio" checked="">
                                        <label class="form-check-label" for="successRadio">
                                            Success
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-danger" type="radio" name="dangerRadio" id="dangerRadio" checked="">
                                        <label class="form-check-label" for="dangerRadio">
                                            Danger
                                        </label>
                                    </div>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input form-checked-dark" type="radio" name="darkRadio" id="darkRadio" checked="">
                                        <label class="form-check-label" for="darkRadio">
                                            Dark
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input" type="radio" name="primaryRadio" id="primaryRadio" checked=""&gt;
    &lt;label class="form-check-label" for="primaryRadio"&gt;
        Primary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-secondary" type="radio" name="secondaryRadio" id="secondaryRadio" checked=""&gt;
    &lt;label class="form-check-label" for="secondaryRadio"&gt;
        Secondary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-warning" type="radio" name="warningRadio" id="warningRadio" checked=""&gt;
    &lt;label class="form-check-label" for="warningRadio"&gt;
        Warning
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-info" type="radio" name="InfoRadio" id="InfoRadio" checked=""&gt;
    &lt;label class="form-check-label" for="InfoRadio"&gt;
        Info
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-success" type="radio" name="successRadio" id="successRadio" checked=""&gt;
    &lt;label class="form-check-label" for="successRadio"&gt;
        Success
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-danger" type="radio" name="dangerRadio" id="dangerRadio" checked=""&gt;
    &lt;label class="form-check-label" for="dangerRadio"&gt;
        Danger
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-0"&gt;
    &lt;input class="form-check-input form-checked-dark" type="radio" name="darkRadio" id="darkRadio" checked=""&gt;
    &lt;label class="form-check-label" for="darkRadio"&gt;
        Dark
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Outline Radios
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline" type="radio" name="primaryoutlineRadio" id="primaryoutlineRadio" checked="">
                                        <label class="form-check-label" for="primaryoutlineRadio">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-secondary" type="radio" name="secondaryoutlineRadio" id="secondaryoutlineRadio" checked="">
                                        <label class="form-check-label" for="secondaryoutlineRadio">
                                            Secondary
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-warning" type="radio" name="warningoutlineRadio" id="warningoutlineRadio" checked="">
                                        <label class="form-check-label" for="warningoutlineRadio">
                                            Warning
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-info" type="radio" name="InfooutlineRadio" id="InfooutlineRadio" checked="">
                                        <label class="form-check-label" for="InfooutlineRadio">
                                            Info
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-success" type="radio" name="successoutlineRadio" id="successoutlineRadio" checked="">
                                        <label class="form-check-label" for="successoutlineRadio">
                                            Success
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-danger" type="radio" name="dangeroutlineRadio" id="dangeroutlineRadio" checked="">
                                        <label class="form-check-label" for="dangeroutlineRadio">
                                            Danger
                                        </label>
                                    </div>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input form-checked-outline form-checked-dark" type="radio" name="darkoutlineRadio" id="darkoutlineRadio" checked="">
                                        <label class="form-check-label" for="darkoutlineRadio">
                                            Dark
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline" type="radio" name="primaryoutlineRadio" id="primaryoutlineRadio" checked=""&gt;
    &lt;label class="form-check-label" for="primaryoutlineRadio"&gt;
        Primary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-secondary" type="radio" name="secondaryoutlineRadio" id="secondaryoutlineRadio" checked=""&gt;
    &lt;label class="form-check-label" for="secondaryoutlineRadio"&gt;
        Secondary
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-warning" type="radio" name="warningoutlineRadio" id="warningoutlineRadio" checked=""&gt;
    &lt;label class="form-check-label" for="warningoutlineRadio"&gt;
        Warning
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-info" type="radio" name="InfooutlineRadio" id="InfooutlineRadio" checked=""&gt;
    &lt;label class="form-check-label" for="InfooutlineRadio"&gt;
        Info
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-success" type="radio" name="successoutlineRadio" id="successoutlineRadio" checked=""&gt;
    &lt;label class="form-check-label" for="successoutlineRadio"&gt;
        Success
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-2"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-danger" type="radio" name="dangeroutlineRadio" id="dangeroutlineRadio" checked=""&gt;
    &lt;label class="form-check-label" for="dangeroutlineRadio"&gt;
        Danger
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check mb-0"&gt;
    &lt;input class="form-check-input form-checked-outline form-checked-dark" type="radio" name="darkoutlineRadio" id="darkoutlineRadio" checked=""&gt;
    &lt;label class="form-check-label" for="darkoutlineRadio"&gt;
        Dark
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Switches Colors
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="switch-primary" checked="">
                                        <label class="form-check-label" for="switch-primary">Primary</label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input form-checked-secondary" type="checkbox" role="switch"
                                            id="switch-secondary" checked="">
                                        <label class="form-check-label" for="switch-secondary">Secondary</label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input form-checked-warning" type="checkbox" role="switch"
                                            id="switch-warning" checked="">
                                        <label class="form-check-label" for="switch-warning">Warning</label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input form-checked-info" type="checkbox" role="switch"
                                            id="switch-info" checked="">
                                        <label class="form-check-label" for="switch-info">Info</label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input form-checked-success" type="checkbox" role="switch"
                                            id="switch-success" checked="">
                                        <label class="form-check-label" for="switch-success">Success</label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input form-checked-danger" type="checkbox" role="switch"
                                            id="switch-danger" checked="">
                                        <label class="form-check-label" for="switch-danger">Danger</label>
                                    </div>
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input form-checked-dark" type="checkbox" role="switch"
                                            id="switch-dark" checked="">
                                        <label class="form-check-label" for="switch-dark">Dark</label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="form-check form-switch mb-2"&gt;
    &lt;input class="form-check-input" type="checkbox" role="switch"
        id="switch-primary" checked=""&gt;
    &lt;label class="form-check-label" for="switch-primary"&gt;Primary&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch mb-2"&gt;
    &lt;input class="form-check-input form-checked-secondary" type="checkbox" role="switch"
        id="switch-secondary" checked=""&gt;
    &lt;label class="form-check-label" for="switch-secondary"&gt;Secondary&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch mb-2"&gt;
    &lt;input class="form-check-input form-checked-warning" type="checkbox" role="switch"
        id="switch-warning" checked=""&gt;
    &lt;label class="form-check-label" for="switch-warning"&gt;Warning&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch mb-2"&gt;
    &lt;input class="form-check-input form-checked-info" type="checkbox" role="switch"
        id="switch-info" checked=""&gt;
    &lt;label class="form-check-label" for="switch-info"&gt;Info&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch mb-2"&gt;
    &lt;input class="form-check-input form-checked-success" type="checkbox" role="switch"
        id="switch-success" checked=""&gt;
    &lt;label class="form-check-label" for="switch-success"&gt;Success&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch mb-2"&gt;
    &lt;input class="form-check-input form-checked-danger" type="checkbox" role="switch"
        id="switch-danger" checked=""&gt;
    &lt;label class="form-check-label" for="switch-danger"&gt;Danger&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check form-switch mb-0"&gt;
    &lt;input class="form-check-input form-checked-dark" type="checkbox" role="switch"
        id="switch-dark" checked=""&gt;
    &lt;label class="form-check-label" for="switch-dark"&gt;Dark&lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

                    <!-- Start:: row-7 -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Toggle Switches Style-1
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-1">
                                        <div class="col-xl-4">
                                            <div class="toggle on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="toggle toggle-secondary on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="toggle toggle-warning on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="toggle toggle-info on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="toggle toggle-success on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="toggle toggle-danger on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="toggle toggle-light on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="toggle toggle-dark on mb-3">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="row gy-1"&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle toggle-secondary on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle toggle-warning on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle toggle-info on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle toggle-success on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle toggle-danger on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle toggle-light on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="toggle toggle-dark on mb-3"&gt;
            &lt;span&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Toggle Switches Style-2
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-1">
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchPrimary" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchPrimary" class="label-primary"></label><span class="ms-3">Primary</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchSecondary" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchSecondary" class="label-secondary"></label><span class="ms-3">Secondary</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchWarning" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchWarning" class="label-warning"></label><span class="ms-3">Warning</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchInfo" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchInfo" class="label-info"></label><span class="ms-3">Info</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchSuccess" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchSuccess" class="label-success"></label><span class="ms-3">Success</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchDanger" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchDanger" class="label-danger"></label><span class="ms-3">Danger</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchLight" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchLight" class="label-light"></label><span class="ms-3">Light</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                <input id="toggleswitchDark" name="toggleswitch001" type="checkbox" checked="">
                                                <label for="toggleswitchDark" class="label-dark"></label><span class="ms-3">Dark</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="row gy-1"&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchPrimary" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchPrimary" class="label-primary"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Primary&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchSecondary" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchSecondary" class="label-secondary"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Secondary&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchWarning" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchWarning" class="label-warning"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Warning&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchInfo" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchInfo" class="label-info"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Info&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchSuccess" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchSuccess" class="label-success"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Success&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchDanger" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchDanger" class="label-danger"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Danger&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchLight" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchLight" class="label-light"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Light&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 px-0"&gt;
        &lt;div class="custom-toggle-switch d-flex align-items-center mb-4"&gt;
            &lt;input id="toggleswitchDark" name="toggleswitch001" type="checkbox" checked=""&gt;
            &lt;label for="toggleswitchDark" class="label-dark"&gt;&lt;/label&gt;&lt;span class="ms-3"&gt;Dark&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

                    <!-- Start:: row-8 -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Toggle Switch-1 Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center flex-wrap mb-3">
                                        <div class=""> <p class="text-muted m-0">Small size toggle switch <code>toggle-sm</code></p></div>
                                        <div class="toggle toggle-sm on mb-0">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap mb-3">
                                        <div class=""> <p class="text-muted m-0">Default toggle switch <code></code></p></div>
                                        <div class="toggle toggle-secondary on mb-0">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class=""> <p class="text-muted m-0">Large size toggle switch <code>toggle-lg</code></p></div>
                                        <div class="toggle toggle-lg toggle-success on mb-0">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="d-flex align-items-center flex-wrap mb-3"&gt;
    &lt;div class=""&gt; &lt;p class="text-muted m-0"&gt;Small size toggle switch &lt;code&gt;toggle-sm&lt;/code&gt;&lt;/p&gt;&lt;/div&gt;
    &lt;div class="toggle toggle-sm on mb-0"&gt;
        &lt;span&gt;&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex align-items-center flex-wrap mb-3"&gt;
    &lt;div class=""&gt; &lt;p class="text-muted m-0"&gt;Default toggle switch &lt;code&gt;&lt;/code&gt;&lt;/p&gt;&lt;/div&gt;
    &lt;div class="toggle toggle-secondary on mb-0"&gt;
        &lt;span&gt;&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex align-items-center flex-wrap"&gt;
    &lt;div class=""&gt; &lt;p class="text-muted m-0"&gt;Large size toggle switch &lt;code&gt;toggle-lg&lt;/code&gt;&lt;/p&gt;&lt;/div&gt;
    &lt;div class="toggle toggle-lg toggle-success on mb-0"&gt;
        &lt;span&gt;&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Toggle Switch-2 Sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center flex-wrap mb-4">
                                        <div class=""><p class="text-muted m-0">Small size toggle switch <code>toggle-sm</code></p></div>
                                        <div class="custom-toggle-switch toggle-sm ms-2">
                                            <input id="size-sm" name="toggleswitchsize" type="checkbox" checked="">
                                            <label for="size-sm" class="label-primary"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap mb-4">
                                        <div class=""><p class="text-muted m-0">Default toggle switch</p></div>
                                        <div class="custom-toggle-switch ms-2">
                                            <input id="size-default" name="toggleswitchsize" type="checkbox" checked="">
                                            <label for="size-default" class="label-secondary mb-1"></label>
                                        </div>
                                    </div>
                                    <div class="d-sm-flex d-block align-items-center flex-wrap">
                                        <div class="mb-sm-0 mb-2"><p class="text-muted m-0">Large size toggle switch <code>toggle-lg</code></p></div>
                                        <div class="custom-toggle-switch toggle-lg ms-sm-2 ms-0">
                                            <input id="size-lg" name="toggleswitchsize" type="checkbox" checked="">
                                            <label for="size-lg" class="label-success mb-2"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-php"><code class="language-php">&lt;div class="d-flex align-items-center flex-wrap mb-4"&gt;
    &lt;div class=""&gt;&lt;p class="text-muted m-0"&gt;Small size toggle switch &lt;code&gt;toggle-sm&lt;/code&gt;&lt;/p&gt;&lt;/div&gt;
    &lt;div class="custom-toggle-switch toggle-sm ms-2"&gt;
        &lt;input id="size-sm" name="toggleswitchsize" type="checkbox" checked=""&gt;
        &lt;label for="size-sm" class="label-primary"&gt;&lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex align-items-center flex-wrap mb-4"&gt;
    &lt;div class=""&gt;&lt;p class="text-muted m-0"&gt;Default toggle switch&lt;/p&gt;&lt;/div&gt;
    &lt;div class="custom-toggle-switch ms-2"&gt;
        &lt;input id="size-default" name="toggleswitchsize" type="checkbox" checked=""&gt;
        &lt;label for="size-default" class="label-secondary mb-1"&gt;&lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="d-flex align-items-center flex-wrap"&gt;
    &lt;div class=""&gt;&lt;p class="text-muted m-0"&gt;Large size toggle switch &lt;code&gt;toggle-lg&lt;/code&gt;&lt;/p&gt;&lt;/div&gt;
    &lt;div class="custom-toggle-switch toggle-lg ms-2"&gt;
        &lt;input id="size-lg" name="toggleswitchsize" type="checkbox" checked=""&gt;
        &lt;label for="size-lg" class="label-success mb-2"&gt;&lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-8 -->

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
                      <a href="notifications.php"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.php"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.php"><span>Mail</span></a>
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
                            <a class="dropdown-item d-flex border-bottom border-top" href="profile.php">
                                <div class="d-flex"><i class="fe fe-user me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Profile</h6>
                                        <p class="fs-12 mb-0 text-muted">Profile Personal information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="default-chat.php">
                                <div class="d-flex"><i class="fe fe-message-square me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Messages</h6>
                                        <p class="fs-12 mb-0 text-muted">Person message information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="emailservices.php">
                                <div class="d-flex"><i class="fe fe-mail me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">My Mails</h6>
                                        <p class="fs-12 mb-0 text-muted">Persons mail information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="editprofile.php">
                                <div class="d-flex"><i class="fe fe-settings me-3 fs-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">Account Settings</h6>
                                        <p class="fs-12 mb-0 text-muted">Settings Information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="login.php">
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