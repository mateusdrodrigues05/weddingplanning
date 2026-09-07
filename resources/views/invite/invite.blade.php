<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Convite - Margarida & David</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Vem festejar este dia tão importante connosco">

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body data-mobile-nav-style="classic">


    @if (session('success'))
        <div class="rsvp-success-banner">
            {{ session('success') }}
        </div>
    @endif



    <!-- start banner slider -->
    <section id="home" class="pb-0 full-screen md-h-600px sm-h-650px position-relative top-space-padding"
        data-parallax-background-ratio="0.3"
        style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('img/fotoDavidMargarida.png') }}'); color: white;">
        <div class="container h-100 position-relative xs-p-0">
            <div class="row align-items-center h-100 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "scale": [0.7, 1], "opacity": [0,1], "duration": 300, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center">
                    <div
                        class="w-700px h-700px lg-w-600px lg-h-600px md-w-450px md-h-450px xs-w-300px xs-h-300px mx-auto border-radius-100">
                        <div class="border-radius-100 w-100 h-100 xs-w-350px xs-h-350px xs-left-minus-22px position-relative d-flex justify-content-center flex-column align-items-center cover-background pt-18 xl-pt-12 md-pt-24 xs-pt-25 box-shadow-quadruple-large fs-70"
                            data-atropos-offset="-2"
                            style="background-image: url('images/demo-wedding-invitation-banner.png')">
                            {{-- <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100"
                                data-particle="true"
                                data-particle-options='{"particles":{"number":{"value":10,"density":{"enable":true,"value_area":100}},"color":{"value": ["#e30050", "#ff7423", "#ffffff"]},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":10},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":2}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'>
                            </div> --}}
                            <div class="xl-fs-50 sm-fs-50 xl-lh-80 sm-lh-65 lh-110 alt-font text-uppercase ls-5px"
                                style="color: white !important;">
                                <span class="text-gradient-cerise-salmon-red">Margarida</span>
                                <span class="fs-40 d-table mx-auto ls-1px mb-10px xl-mb-5px text-white"> & </span>
                                <span class="text-gradient-salmon-red-cerise">David</span>
                            </div>
                            <div class="d-flex align-items-center fs-19 mt-5 text-white">
                                <div>Maio</div><span class="w-1px h-20px bg-extra-medium-gray ms-15px me-15px"></span>
                                <div class="fs-50 ls-minus-1px text-white alt-font">8</div><span
                                    class="w-1px h-20px bg-extra-medium-gray ms-15px me-15px"></span>
                                <div>2027</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end banner slider -->
    {{-- <!-- start section -->
    <section id="couple" class="bg-very-light-gray position-relative">
        <div class="position-absolute left-0px top-minus-50px lg-top-minus-25px sm-top-minus-20px xs-top-minus-12px background-position-left-top w-100 h-100px lg-h-60px md-h-50px background-size-100 background-no-repeat"
            style="background-image: url('images/demo-wedding-invitation-banner-effect.png')"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 text-center"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <h1 class="alt-font text-dark-gray fw-400 text-uppercase">We're getting married!</h1>
                </div>
            </div>
            <div class="row text-center align-items-center justify-content-center">
                <div class="col-md-6 col-lg-3 xs-mb-30px"
                    data-anime='{ "translateX": [-40, 0], "opacity": [0,1], "duration": 300, "delay": 400, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color alt-font text-uppercase">The Bride</span>
                    <h3 class="fw-400 text-dark-gray text-uppercase alt-font mb-10px">Lorene Sophia</h3>
                    <p>Lorem ipsum consectetur adipiscing elit eiusmod tempor incididunt labore dolore magna minim
                        veniam exercitation.</p>
                    <div class="elements-social social-icon-style-09">
                        <ul class="medium-icon dark">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i><span></span></a></li>
                            <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i><span></span></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                        class="fa-brands fa-twitter"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 order-first order-inherit lg-mb-50px xs-mb-30px"
                    data-anime='{ "scale": [0.8, 1], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <img src="https://placehold.co/555x544" alt="">
                </div>
                <div class="col-md-6 col-lg-3 xs-mb-30px"
                    data-anime='{ "translateX": [40, 0], "opacity": [0,1], "duration": 300, "delay": 400, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color alt-font text-uppercase">The Groom</span>
                    <h3 class="fw-400 text-dark-gray text-uppercase alt-font mb-10px">Robert Bieber</h3>
                    <p>Lorem ipsum consectetur adipiscing elit eiusmod tempor incididunt labore dolore magna minim
                        veniam exercitation.</p>
                    <div class="elements-social social-icon-style-09">
                        <ul class="medium-icon dark">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i><span></span></a></li>
                            <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                        class="fa-brands fa-instagram"></i><span></span></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                        class="fa-brands fa-twitter"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section --> --}}
    {{-- <!-- start section -->
    <section class="py-0 border-top lg-border-top-0 border-color-medium-gray bg-very-light-gray position-relative">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 g-0"
                data-anime='{"el": "childs", "translateX": [40, 0], "opacity": [0,1], "duration": 300, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start process step item -->
                <div class="col process-step-style-06 hover-box md-mb-50px">
                    <div class="process-step-icon-box position-relative top-minus-14px">
                        <span class="progress-step-separator bg-medium-gray w-100 separator-line-1px"></span>
                        <div
                            class="step-box d-flex align-items-center justify-content-center bg-base-color border-radius-100 w-25px h-25px">
                            <span class="w-9px h-9px bg-white border-radius-100"></span>
                        </div>
                    </div>
                    <span class="d-block fs-19 text-dark-gray fw-600 mt-20px mb-5px">First time we met</span>
                    <p class="w-80 xl-w-90 md-w-80 xs-w-100 mb-20px">Lorem ipsum consectetur adipiscing elit eiusmod.
                    </p>
                    <div class="fs-80 alt-font text-outline text-outline-color-westar-grey">2018</div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-06 hover-box md-mb-50px">
                    <div class="process-step-icon-box position-relative top-minus-14px">
                        <span class="progress-step-separator bg-medium-gray w-100 separator-line-1px"></span>
                        <div
                            class="step-box d-flex align-items-center justify-content-center bg-base-color border-radius-100 w-25px h-25px">
                            <span class="w-9px h-9px bg-white border-radius-100"></span>
                        </div>
                    </div>
                    <span class="d-block fs-19 text-dark-gray fw-600 mt-20px mb-5px">Our first date</span>
                    <p class="w-80 xl-w-90 md-w-80 xs-w-100 mb-20px">Lorem ipsum consectetur adipiscing elit eiusmod.
                    </p>
                    <div class="fs-80 alt-font text-outline text-outline-color-westar-grey">2019</div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-06 hover-box lg-mb-50px md-mb-0 xs-mb-50px">
                    <div class="process-step-icon-box position-relative top-minus-14px">
                        <span class="progress-step-separator bg-medium-gray w-100 separator-line-1px"></span>
                        <div
                            class="step-box d-flex align-items-center justify-content-center bg-base-color border-radius-100 w-25px h-25px">
                            <span class="w-9px h-9px bg-white border-radius-100"></span>
                        </div>
                    </div>
                    <span class="d-block fs-19 text-dark-gray fw-600 mt-20px mb-5px">Our marriage proposal</span>
                    <p class="w-80 xl-w-90 md-w-80 xs-w-100 mb-20px">Lorem ipsum consectetur adipiscing elit eiusmod.
                    </p>
                    <div class="fs-80 alt-font text-outline text-outline-color-westar-grey">2020</div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-06 hover-box lg-mb-50px md-mb-0">
                    <div class="process-step-icon-box position-relative top-minus-14px">
                        <span class="progress-step-separator bg-medium-gray w-100 separator-line-1px"></span>
                        <div
                            class="step-box d-flex align-items-center justify-content-center bg-base-color border-radius-100 w-25px h-25px">
                            <span class="w-9px h-9px bg-white border-radius-100"></span>
                        </div>
                    </div>
                    <span class="d-block fs-19 text-dark-gray fw-600 mt-20px mb-5px">Our engagement</span>
                    <p class="w-80 xl-w-90 md-w-80 xs-w-100 mb-20px">Lorem ipsum consectetur adipiscing elit eiusmod.
                    </p>
                    <div class="fs-80 alt-font text-outline text-outline-color-westar-grey">2023</div>
                </div>
                <!-- end process step item -->
            </div>
        </div>
    </section>
    <!-- end section --> --}}
    {{-- <!-- start section -->
    <section id="gallery" class="bg-very-light-gray sm-pb-0">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 align-items-center justify-content-center d-block d-md-flex text-center text-md-start"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <span
                        class="d-inline-block text-base-color fs-22 alt-font md-mb-10px border-end sm-border-end-0 border-color-extra-medium-gray pe-30px me-30px sm-pe-0 sm-me-0 text-uppercase">Photo
                        gallery</span>
                    <h2 class="mb-0 alt-font text-dark-gray text-uppercase fw-400">Captured Moments</h2>
                </div>
            </div>
            <div class="row">
                <div class="col px-md-0">
                    <ul class="image-gallery-style-04 gallery-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-3col sm-grid-2col xs-grid-1col gutter-large"
                        data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start gallery item -->
                        <li class="grid-item gallery-box transition-inner-all sm-w-100">
                            <div class="gallery-box">
                                <a href="https://placehold.co/800x905" data-group="lightbox-group-gallery-item-4"
                                    title="Lightbox gallery image title">
                                    <div class="position-relative gallery-image bg-dark-gray">
                                        <img src="https://placehold.co/800x905" alt="" />
                                        <div
                                            class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                            <div
                                                class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-1 border-color-transparent-white-light">
                                                <i class="bi bi-camera text-white icon-extra-medium"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item grid-item-double gallery-box transition-inner-all">
                            <div class="gallery-box">
                                <a href="https://placehold.co/1024x560" data-group="lightbox-group-gallery-item-4"
                                    title="Lightbox gallery image title">
                                    <div class="position-relative gallery-image bg-dark-gray">
                                        <img src="https://placehold.co/1024x560" alt="" />
                                        <div
                                            class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                            <div
                                                class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-1 border-color-transparent-white-light">
                                                <i class="bi bi-camera text-white icon-extra-medium"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item gallery-box transition-inner-all">
                            <div class="gallery-box">
                                <a href="https://placehold.co/800x905" data-group="lightbox-group-gallery-item-4"
                                    title="Lightbox gallery image title">
                                    <div class="position-relative gallery-image bg-dark-gray">
                                        <img src="https://placehold.co/800x905" alt="" />
                                        <div
                                            class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                            <div
                                                class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-1 border-color-transparent-white-light">
                                                <i class="bi bi-camera text-white icon-extra-medium"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item gallery-box transition-inner-all">
                            <div class="gallery-box">
                                <a href="https://placehold.co/800x905" data-group="lightbox-group-gallery-item-4"
                                    title="Lightbox gallery image title">
                                    <div class="position-relative gallery-image bg-dark-gray">
                                        <img src="https://placehold.co/800x905" alt="" />
                                        <div
                                            class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                            <div
                                                class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-1 border-color-transparent-white-light">
                                                <i class="bi bi-camera text-white icon-extra-medium"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item grid-item-double gallery-box sm-w-100 transition-inner-all">
                            <div class="gallery-box">
                                <a href="https://placehold.co/1024x560" data-group="lightbox-group-gallery-item-4"
                                    title="Lightbox gallery image title">
                                    <div class="position-relative gallery-image bg-dark-gray">
                                        <img src="https://placehold.co/1024x560" alt="" />
                                        <div
                                            class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                            <div
                                                class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-1 border-color-transparent-white-light">
                                                <i class="bi bi-camera text-white icon-extra-medium"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item gallery-box transition-inner-all sm-w-100">
                            <div class="gallery-box">
                                <a href="https://placehold.co/800x905" data-group="lightbox-group-gallery-item-4"
                                    title="Lightbox gallery image title">
                                    <div class="position-relative gallery-image bg-dark-gray">
                                        <img src="https://placehold.co/800x905" alt="" />
                                        <div
                                            class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                            <div
                                                class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-1 border-color-transparent-white-light">
                                                <i class="bi bi-camera text-white icon-extra-medium"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!-- end gallery item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section --> --}}


    <!-- start section -->
    <section id="timeline" class="bg-white cover-background background-position-center-bottom position-relative">
        <div class="container">
            <div class="row justify-content-center mb-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <div
                    class="col-lg-10 align-items-center justify-content-center d-block d-md-flex flex-xl-row flex-column text-center text-md-start">
                    <h2
                        class="mb-0 lg-mb-30px alt-font text-dark-gray text-uppercase fw-400 border-end lg-border-end-0 border-color-extra-medium-gray pe-30px me-30px lg-pe-0 lg-me-0">
                        Falta</h2>
                    <div class="d-flex justify-content-center countdown-style-03 xs-w-80 xs-mx-auto mt-2">
                        <div data-enddate="2027/05/08 00:00:00" class="countdown"></div>
                    </div>
                </div>
            </div>


            {{-- <div class="row">
                <div class="col-md-6 pt-10 position-relative">
                    <div
                        data-anime='{ "el": "childs", "translateY": [0, 0], "scale": [0.8, 1], "rotateZ": [20, 0], "opacity": [0,1], "duration": 300, "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <img src="https://placehold.co/330x360" data-bottom-top="transform: translateY(40px)"
                            data-top-bottom="transform: translateY(-40px)" alt="" />
                    </div>
                </div>
                <div class="col-md-6 text-end pt-25 sm-pt-15 xs-pt-8 position-relative">
                    <div
                        data-anime='{ "el": "childs", "translateY": [0, 0], "scale": [0.8, 1], "rotateZ": [20, 0], "opacity": [0,1], "duration": 300, "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <img src="https://placehold.co/330x360" data-bottom-top="transform: translateY(40px)"
                            data-top-bottom="transform: translateY(-40px)" alt="" />
                    </div>
                </div>
            </div> --}}


        </div>
    </section>


    <!-- end section -->
    {{-- <!-- start section -->
    <section id="people" class="bg-very-light-gray pt-2">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 align-items-center justify-content-center d-block d-md-flex text-center text-md-start"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <span
                        class="d-inline-block text-base-color fs-22 alt-font border-end sm-border-end-0 border-color-extra-medium-gray pe-30px me-30px sm-pe-0 sm-me-0 md-mb-10px text-uppercase">Best
                        friends</span>
                    <h2 class="mb-0 alt-font text-dark-gray text-uppercase fw-400">Groomsman & Bridesmaid</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <!-- start team member item -->
                <div class="col text-center team-style-11 mb-30px last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">stefano smith</span>
                    <p>Groomsman</p>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-11 mb-30px last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">Evan thomson</span>
                    <p>Groomsman</p>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-11 mb-30px last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">Bryan jonhson</span>
                    <p>Groomsman</p>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-11 mb-30px last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">Pablo dante</span>
                    <p>Groomsman</p>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-11 md-mb-30px last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">Didier hendrix</span>
                    <p>Bridesmaid</p>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-11 md-mb-30px last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">Samantha jones</span>
                    <p>Bridesmaid</p>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-11 md-mb-30px last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">Nick hempherson</span>
                    <p>Bridesmaid</p>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-11 last-paragraph-no-margin">
                    <img src="https://placehold.co/255x255" class="mb-10px" alt="" />
                    <span class="fs-19 lh-22 fw-600 text-dark-gray d-block">Jonathan james</span>
                    <p>Bridesmaid</p>
                </div>
                <!-- end team member item -->
            </div>
        </div>
    </section>
    <!-- end section --> --}}
    <!-- start section-->
    <section class="m-0 pt-0 pb-10">
        <div class="d-flex flex-column align-items-center text-center">

            <p class="wp-invite-text">
                Há dias que queremos guardar para sempre. <br>
                <span class="wp-invite-highlight">E este queremos vivê-lo junto de quem faz parte da nossa
                    história.</span>
                <br>
                É com muita alegria que vos convidamos a celebrar connosco.
            </p>

            <div class="wp-invite-video-wrap mt-5">
                <video id="conviteVideo" class="wp-invite-video" loop muted playsinline
                    src="{{ asset('video/VideoInvite.mp4') }}">
                </video>
            </div>

        </div>
    </section>
    <!-- start section -->
    <section id="when" class="bg-very-light-gray position-relative mb-0">
        <div class="position-absolute left-0px top-minus-50px lg-top-minus-25px sm-top-minus-20px xs-top-minus-15px background-position-left-top w-100 h-100px lg-h-60px md-h-50px background-size-100 background-no-repeat"
            style="background-image: url('images/demo-wedding-invitation-home-effect-01.png')"></div>
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-lg-8 align-items-center justify-content-center d-block d-md-flex text-center text-md-start"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <span
                        class="d-inline-block text-base-color fs-22 alt-font md-mb-10px border-end sm-border-end-0 border-color-extra-medium-gray pe-30px me-30px sm-pe-0 sm-me-0 text-uppercase">Data
                        e local</span>
                    <h2 class="mb-0 alt-font text-dark-gray text-uppercase fw-400">Quando e onde</h2>
                </div>
            </div>
            <div class="row justify-content-center g-0">
                <div class="col-12 sliding-box-style-02 sliding-box d-flex lg-flex-nowrap flex-wrap"
                    data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>


                    {{-- <!-- start interactive banners item -->
                    <div class="sliding-box-item box-shadow-extra-large md-mb-30px active">
                        <div class="sliding-box-img position-relative">
                            <img src="https://placehold.co/580x695" alt="" class="w-100" />
                            <time
                                class="alt-font text-center bg-dark-gray text-white text-uppercase fw-500 d-inline-block w-80px pt-20px pb-20px position-absolute bottom-25px left-25px">
                                <span class="fs-45 lh-40 d-block">24</span>
                                <span class="d-block lh-20">Março</span>
                            </time>
                        </div>
                        <div
                            class="d-flex flex-column align-items-start justify-content-center sliding-box-content bg-very-light-gray p-30px">
                            <div class="content-hover w-100 last-paragraph-no-margin">
                                <i class="line-icon-Plates text-dark-gray icon-large mb-40px"></i>
                                <div class="text-dark-gray mb-5px fs-19 fw-600">A receção</div>
                                <p class="lh-28">175 Broadway, Brooklyn, Nova Iorque 11244, EUA</p>
                                <div
                                    class="text-dark-gray d-flex align-items-center border-top border-color-extra-medium-gray mt-20px pt-20px">
                                    <i class="feather icon-feather-clock align-middle icon-small me-5px"></i>
                                    <span class="fs-15 text-uppercase">Das 12:00 às 15:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banners item --> --}}


                    <!-- start interactive banners item -->
                    <div class="sliding-box-item box-shadow-extra-large md-mb-30px active">
                        <div class="sliding-box-img position-relative">
                            <img src="{{ asset('/img/Sé_Catedral_de_Beja.jpg') }}" alt="" class="w-100" />
                            {{-- <time
                                class="alt-font text-center bg-dark-gray text-white text-uppercase fw-500 d-inline-block w-80px pt-20px pb-20px position-absolute bottom-25px left-25px">
                                <span class="fs-45 lh-40 d-block">8</span>
                                <span class="d-block lh-20">Maio</span>
                            </time> --}}
                        </div>
                        <div
                            class="d-flex flex-column align-items-start justify-content-center sliding-box-content bg-very-light-gray p-30px">
                            <div class="content-hover w-100 last-paragraph-no-margin">
                                <i class="fa-solid fa-church fa-2x"></i>
                                <div class="text-dark-gray mb-5px fs-19 fw-600">A cerimónia</div>
                                <p class="lh-28">Sé Catedral de Beja</p>
                                <div
                                    class="text-dark-gray d-flex align-items-center border-top border-color-extra-medium-gray mt-20px pt-20px">
                                    <i class="fa-solid fa-clock "></i>
                                    <span class="fs-15 text-uppercase ms-2">12:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="sliding-box-item box-shadow-extra-large ">
                        <div class="sliding-box-img position-relative">
                            <img src="{{ asset('img/party.jpg') }}" alt="A festa após a cerimónia"
                                class="w-100 h-290px" />
                            {{-- <time class="alt-font text-center bg-dark-gray text-white text-uppercase fw-500 d-inline-block w-80px pt-20px pb-20px position-absolute bottom-25px left-25px">
                                <span class="fs-45 lh-40 d-block">25</span>
                                <span class="d-block lh-20">Março</span>
                            </time> --}}
                        </div>
                        <div
                            class="d-flex flex-column align-items-start justify-content-center sliding-box-content bg-very-light-gray p-30px">
                            <div class="content-hover w-100 last-paragraph-no-margin">
                                <i class="fa-solid fa-champagne-glasses fa-2x"></i>
                                <div class="text-dark-gray mb-5px fs-19 fw-600">A festa após a cerimónia</div>
                                <p class="lh-28">Quinta dos Magalhães em Beringel</p>
                                {{-- <div
                                    class="text-dark-gray d-flex align-items-center border-top border-color-extra-medium-gray mt-20px pt-20px">
                                    <i class="fa-solid fa-clock"></i>
                                    <span class="fs-15 text-uppercase ms-2">15:00</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section id="rsvp" class="bg-white position-relative mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <h5 class="mb-30px alt-font text-dark-gray text-uppercase fw-400">
                        Confirme a sua Presença
                    </h5>

                    <div class="d-flex flex-column align-items-center">

                        <button type="button" class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge"
                            data-bs-toggle="modal" data-bs-target="#rsvpModal">
                            Confirmar Presença
                        </button>

                        <p class="mt-2">Até <span>1 de Março</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- start rsvp modal -->
    <div class="modal fade" id="rsvpModal" tabindex="-1" aria-labelledby="rsvpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius:14px;">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 px-md-5 pb-4 pt-0">

                    <!-- step indicator -->
                    <div class="rsvp-steps-nav" id="rsvpStepsNav">
                        <div class="rsvp-step-item active" data-step="1">
                            <div class="rsvp-step-circle">1</div>
                            <div class="rsvp-step-label">Contacto</div>
                        </div>
                        <div class="rsvp-step-connector"></div>
                        <div class="rsvp-step-item" data-step="2">
                            <div class="rsvp-step-circle">2</div>
                            <div class="rsvp-step-label">Acompanhantes</div>
                        </div>
                        <div class="rsvp-step-connector"></div>
                        <div class="rsvp-step-item" data-step="3">
                            <div class="rsvp-step-circle">3</div>
                            <div class="rsvp-step-label">Alergias</div>
                        </div>
                    </div>

                    <form id="rsvpForm" method="POST" action="{{ route('invite.store', $guest->rsvp_token) }}">
                        @csrf

                        <div class="rsvp-form-error" id="rsvpFormError" hidden>
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        {{-- STEP 1 --}}
                        <div class="rsvp-panel" data-panel="1">
                            <h6>Os seus dados</h6>

                            <div class="rsvp-field">
                                <label for="guestName">Nome completo *</label>

                                <input type="text" id="guestName" name="guest_name" placeholder="O seu nome"
                                    value="{{ old('guest_name') }}" required>
                            </div>

                            <div class="rsvp-field">
                                <label>Como prefere ser contactado? *</label>

                                <div class="contact-toggle">
                                    <button type="button" class="active" data-contact-type="email">
                                        Email
                                    </button>

                                    <button type="button" data-contact-type="phone">
                                        Telefone
                                    </button>
                                </div>

                                <input type="text" id="contactValue" name="contact_value"
                                    placeholder="exemplo@email.com" value="{{ old('contact_value') }}" required>

                                <input type="hidden" name="contact_type" id="contactType" value="email">
                            </div>
                        </div>


                        {{-- STEP 2 --}}
                        <div class="rsvp-panel" data-panel="2" hidden>

                            <h6>Vai levar acompanhantes?</h6>

                            <div class="rsvp-field">
                                <label for="companionsCount">
                                    Número de acompanhantes
                                </label>

                                <input type="number" id="companionsCount" name="companions_count" min="0"
                                    max="10" value="{{ old('companions_count', 0) }}">
                            </div>

                            <div id="companionsContainer"></div>

                        </div>


                        {{-- STEP 3 --}}
                        <div class="rsvp-panel" data-panel="3" hidden>

                            <h6>Alguma alergia ou restrição alimentar?</h6>

                            <div id="allergiesContainer"></div>

                        </div>


                        <div class="rsvp-actions">

                            <button type="button" class="btn-back" id="btnBack" disabled>
                                Voltar
                            </button>

                            <button type="button" class="btn-next" id="btnNext">
                                Seguinte
                            </button>

                            <button type="submit" class="btn-submit" id="btnSubmit" hidden>
                                Confirmar presença
                            </button>

                        </div>
                    </form>

                    <!-- success state -->
                    <div class="rsvp-success" id="rsvpSuccess" hidden>
                        <div class="icon">&#10003;</div>
                        <h5>Presença confirmada!</h5>
                        <p>Obrigado por nos avisar. Mal podemos esperar para celebrar convosco.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end rsvp modal -->
    <!-- end section -->


    {{-- <!-- start section -->
    <section id="rsvp" class="bg-very-light-gray">
        <div class="container">
            <div class="row row-cols-md-1 justify-content-center">
                <div class="col-xl-10">
                    <form action="email-templates/contact-form.php" method="post"
                        class="contact-form-style-03 position-relative">
                        <div class="row"
                            data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                            <div class="col-12 text-center mb-6">
                                <div class="alt-font text-dark-gray mb-0 fs-80">Are you attending?</div>
                            </div>
                        </div>
                        <div class="row"
                            data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label text-dark-gray fw-600 mb-0">Enter
                                    your name*</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                    <input
                                        class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                        id="exampleInputEmail1" type="text" name="name"
                                        placeholder="What's your good name?" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label text-dark-gray fw-600 mb-0">Your
                                    email address*</label>
                                <div class="position-relative form-group mb-25px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input
                                        class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                        id="exampleInputEmail2" type="email" name="email"
                                        placeholder="Enter your email address" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label text-dark-gray fw-600 mb-0">Number
                                    of guests</label>
                                <div class="position-relative form-group mb-25px">
                                    <select
                                        class="form-select ps-0 bg-transparent border-radius-0px border-bottom border-color-extra-medium-gray"
                                        name="guests" aria-label="Default select example">
                                        <option value="One">One</option>
                                        <option value="Two">Two</option>
                                        <option value="Three">Three</option>
                                        <option value="Four">Four</option>
                                        <option value="Five">Five</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label text-dark-gray fw-600 mb-0">Will you
                                    attend?</label>
                                <div class="position-relative form-group mb-25px">
                                    <select
                                        class="form-select ps-0 bg-transparent border-radius-0px border-bottom border-color-extra-medium-gray"
                                        name="select" aria-label="Default select example">
                                        <option value="">All</option>
                                        <option value="The reception">The reception</option>
                                        <option value="The ceremony">The ceremony</option>
                                        <option value="The afterparty">The afterparty</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-30px">
                                <label for="exampleInputEmail1" class="form-label text-dark-gray fw-600 mb-0">Your
                                    message</label>
                                <div class="position-relative form-group form-textarea mb-0">
                                    <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" name="comment"
                                        placeholder="Describe about your message" rows="4"></textarea>
                                    <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                </div>
                            </div>
                            <div class="col-md-8 sm-mb-30px">
                                <p class="mb-0 fs-14 lh-24 w-80 md-w-100">We are committed to protecting your privacy.
                                    We will never collect information about you without your explicit consent.</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <input id="exampleInputEmail3" type="hidden" name="redirect" value="">
                                <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge submit"
                                    type="submit">Send message</button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section --> --}}
    {{-- <!-- start section -->
    <footer class="bg-gradient-porcelain-grey position-relative xs-pt-50px xs-pb-50px">
        <div class="position-absolute left-0px top-minus-50px lg-top-minus-25px sm-top-minus-20px xs-top-minus-15px background-position-left-top w-100 h-100px lg-h-60px md-h-50px background-size-100 background-no-repeat"
            style="background-image: url('images/demo-wedding-invitation-home-effect-02.png')"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-md-end text-center order-md-1 order-2 sm-mb-30px">
                    <span class="fs-19 fw-600 text-dark-gray d-block">Call us directly</span>
                    <a href="tel:1800222000" class="text-light-medium-gray">1-800-222-000</a>
                </div>
                <div class="col-md-4 text-center order-md-2 order-1 sm-mb-30px">
                    <a href="demo-wedding-invitation.html"><img src="images/demo-wedding-invitation-footer-logo.png"
                            alt=""></a>
                </div>
                <div class="col-md-4 text-md-start text-center order-3">
                    <span class="fs-19 fw-600 text-dark-gray d-block">Send a message</span>
                    <a href="mailto:info@yourdomain.com" class="text-light-medium-gray">info@yourdomain.com</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end section --> --}}


    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script>
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
        window.addEventListener('load', () => {
            window.scrollTo(0, 0);
        });
    </script>
    <script>
        (function() {
            const video = document.getElementById('conviteVideo');
            if (!video) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        video.play().catch(() => {});
                    } else {
                        video.pause();
                    }
                });
            }, {
                threshold: 0.5, // at least 50% of the video visible before it plays
            });

            observer.observe(video);
        })();
    </script>

</body>

</html>
