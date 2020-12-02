@extends('layouts.frontend.app')

@section('pageTitle')
Buy Code, Scripts, Themes, Plugins and more | Codester
@endsection

@push('css')

@endpush

@section('content')
<div id="content" class="main-content bg-light">

    <!--  -->
    
    <div class="bg-black lter frontpage-header"
        style="background: url('{{ asset('public/assets/images/frontpage-bg-morning.jpg') }}') 50% 50% / cover no-repeat; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="padder-v">
                        <h1 class="text-white m-t-lg m-b-lg h2 l-h-1x animated fadeInDown">Buy premium
                            <strong>PHP scripts</strong>, <strong>app templates</strong>,
                            <strong>themes</strong> and <strong>plugins</strong> and create amazing websites
                            &amp; apps.</h1>


                        <!-- search form -->
                        <form id="search" action="" method="GET" class=""
                            ui-shift="prependTo" data-target=".navbar-collapse" role="search"
                            ng-controller="TypeaheadDemoCtrl">
                            <div class="form-group frontpage-search m-b-xxl ">
                                <div class="input-group">
                                    <input type="text" name="term" ng-model="selected"
                                        class="form-control input-lg bg-light white-transparant-bg no-border  padder w-sm"
                                        placeholder="for example &#39;social networking script&#39;">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-lg bg-light "><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>

                        </form>
                        <!-- / search form -->

                        {{-- <script type="application/ld+json">
                            {
                            "@context": "http://schema.org",
                            "@type": "WebSite",
                            "url": "https://www.codester.com/",
                            "potentialAction": {
                                "@type": "SearchAction",
                                "target": "https://www.codester.com/search/?term={search_term_string}",
                                "query-input": "required name=search_term_string"
                            }
                            }
                        </script> --}}

                        <div class="m-b-lg">
                            <a href=""
                                class="btn btn-lg btn-success text-lg m-r-md  m-b-sm ">Create a free account</a>
                            <a href=""
                                class="btn btn-lg btn-transparant-white m-r-md b-white text-lg text-white  m-b-sm  ">Browse
                                new items</a>
                            <a href=""
                                class="btn btn-lg btn-transparant-white b-white text-lg m-r-md text-white  m-b-sm">Sell
                                your work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark dker text-white ">
        <div class="container ">
            <div class="row">
                <div class="wrapper m-t-sm m-b-sm text-center">
                    <span class=" h3 link-info "><a class="m-l-xs font-bold "
                            href="">Create an account</a> today and
                        <strong>Download 4 Free Files</strong> every Week
                    </span></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="m-t-lg"></div>
        <div class="row">
            <div class="wrapper">
                <span class="font-thin h3 m-t-sm"><i class="fa fa-file text-info m-r-sm"
                        aria-hidden="true"></i><b>Featured</b> Items <a class=" pull-right btn-default btn-sm font-bold"
                        href="">Browse All Items</a></span>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">
                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="">
                                <div class="item-header-overlay">
                                </div>
                            </a>
                            <div class="item-label"><span class="bg-info"><i class="fa fa-file m-r-xs"
                                        aria-hidden="true"></i>Featured</span></div>
                            <a href=""><img
                                    alt="Invoza - Angular 10 Landing Page Template"
                                    src=" {{ asset('assets/frontend/images/preview-small.jpg') }}"
                                    class="img-full"></a>
                        </div>
                    </div>
                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href=""
                                    title="Invoza - Angular 10 Landing Page Template">
                                    <h2 class="text-md font-bold m-t-sm">Invoza - Angular 10 Landing Page
                                        Template</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>
                            <span id="like-button-holder-26140">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>
                        </div>
                        <div class="pull-right m-r-sm">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">

                        </div>

                    </div>
                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/8/html-website-templates"
                                title="">
                                <img alt="HTML Website Templates" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon.png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/8/html-website-templates"
                                    title="">HTML</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26140/invoza-angular-10-landing-page-template"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$22</a>




                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26268/hotelpro-flutter-template-ui-kit">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-info"><i class="fa fa-file m-r-xs"
                                        aria-hidden="true"></i>Featured</span></div>
                            <a href="https://www.codester.com/items/26268/hotelpro-flutter-template-ui-kit"><img
                                    alt="HotelPro - Flutter Template UI Kit"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(1).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26268/hotelpro-flutter-template-ui-kit"
                                    title="HotelPro - Flutter Template UI Kit">
                                    <h2 class="text-md font-bold m-t-sm">HotelPro - Flutter Template UI Kit</h2>
                                </a>

                            </div>

                        </div>
                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-26268">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>
                            <a rel="nofollow"
                                href="https://youtu.be/IS6xHiY6adM&amp;lightbox[width]=854&amp;lightbox[height]=480&amp;lightbox[modal]=true&amp;hd=1"
                                data-toggle="tooltip" data-placement="top" title=""
                                class="btn btn-sm btn-icon lightbox btn-default" data-original-title="Video"><i
                                    class="fa fa-video-camera"></i></a>
                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/317/flutter-templates"
                                title=""> <img alt="Flutter Templates" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(1).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/317/flutter-templates"
                                    title="">Flutter</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26268/hotelpro-flutter-template-ui-kit"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$35</a>




                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26562/whatsapp-messaging-plugin-for-wordpress">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>
                            <a href="https://www.codester.com/items/26562/whatsapp-messaging-plugin-for-wordpress"><img
                                    alt="Whatsapp Messaging Plugin For WordPress"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(2).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26562/whatsapp-messaging-plugin-for-wordpress"
                                    title="Whatsapp Messaging Plugin For WordPress">
                                    <h2 class="text-md font-bold m-t-sm">Whatsapp Messaging Plugin For WordPress
                                    </h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-26562">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/32/wordpress-plugins"
                                title=""> <img alt="WordPress Plugins" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(2).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/32/wordpress-plugins"
                                    title="">WordPress</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26562/whatsapp-messaging-plugin-for-wordpress"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$4</a>




                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">
                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26349/pdf-slider-viewer-wordpress-plugin">
                                <div class="item-header-overlay">
                                </div>
                            </a>
                            <div class="item-label"><span class="bg-info"><i class="fa fa-file m-r-xs"
                                        aria-hidden="true"></i>Featured</span></div>
                            <a href="https://www.codester.com/items/26349/pdf-slider-viewer-wordpress-plugin"><img
                                    alt="PDF Slider Viewer - WordPress Plugin"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(3).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>
                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26349/pdf-slider-viewer-wordpress-plugin"
                                    title="PDF Slider Viewer - WordPress Plugin">
                                    <h2 class="text-md font-bold m-t-sm">PDF Slider Viewer - WordPress Plugin
                                    </h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-26349">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/32/wordpress-plugins"
                                title=""> <img alt="WordPress Plugins" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(2).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/32/wordpress-plugins"
                                    title="">WordPress</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26349/pdf-slider-viewer-wordpress-plugin"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$10</a>




                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">
                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26487/firebase-auth-integration-flutter">
                                <div class="item-header-overlay">
                                </div>
                            </a>
                            <div class="item-label"><span class="bg-info"><i class="fa fa-file m-r-xs"
                                        aria-hidden="true"></i>Featured</span></div>
                            <a href="https://www.codester.com/items/26487/firebase-auth-integration-flutter"><img
                                    alt="Firebase Auth Integration - Flutter"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(4).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>
                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26487/firebase-auth-integration-flutter"
                                    title="Firebase Auth Integration - Flutter">
                                    <h2 class="text-md font-bold m-t-sm">Firebase Auth Integration - Flutter
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-26487">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/317/flutter-templates"
                                title=""> <img alt="Flutter Templates" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(1).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/317/flutter-templates"
                                    title="">Flutter</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26487/firebase-auth-integration-flutter"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$29</a>




                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">
                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26560/quick-tennis-ios-source-code">
                                <div class="item-header-overlay">
                                </div>
                            </a>
                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>
                            <a href="https://www.codester.com/items/26560/quick-tennis-ios-source-code"><img
                                    alt="Quick Tennis - iOS Source Code"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(5).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>
                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26560/quick-tennis-ios-source-code"
                                    title="Quick Tennis - iOS Source Code">
                                    <h2 class="text-md font-bold m-t-sm">Quick Tennis - iOS Source Code</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-26560">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>





                            <a rel="nofollow"
                                href="https://www.youtube.com/watch?v=SHzlD0hsHWY&amp;lightbox[width]=854&amp;lightbox[height]=480&amp;lightbox[modal]=true&amp;hd=1"
                                data-toggle="tooltip" data-placement="top" title=""
                                class="btn btn-sm btn-icon lightbox btn-default" data-original-title="Video"><i
                                    class="fa fa-video-camera"></i></a>



                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted"
                                href="https://www.codester.com/categories/28/ios-app-templates-source-codes" title="">
                                <img alt="iOS App Templates &amp; Source Codes" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(3).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/28/ios-app-templates-source-codes"
                                    title="">iOS</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26560/quick-tennis-ios-source-code"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$49</a>




                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26645/photoportfolio-php-script">
                                <div class="item-header-overlay">
                                </div>
                            </a>
                            <div class="item-label"><span class="bg-info"><i class="fa fa-file m-r-xs"
                                        aria-hidden="true"></i>Featured</span></div>
                            <a href="https://www.codester.com/items/26645/photoportfolio-php-script"><img
                                    alt="PhotoPortfolio PHP Script"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(6).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>
                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26645/photoportfolio-php-script"
                                    title="PhotoPortfolio PHP Script">
                                    <h2 class="text-md font-bold m-t-sm">PhotoPortfolio PHP Script</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>
                            <span id="like-button-holder-26645">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>
                        </div>
                        <div class="pull-right m-r-sm">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                title="">
                                <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                    Scripts</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26645/photoportfolio-php-script"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$15</a>




                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26205/superfly-full-buildbox-game">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-info"><i class="fa fa-file m-r-xs"
                                        aria-hidden="true"></i>Featured</span></div>




















                            <a href="https://www.codester.com/items/26205/superfly-full-buildbox-game"><img
                                    alt="Superfly - Full Buildbox Game"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(7).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26205/superfly-full-buildbox-game"
                                    title="Superfly - Full Buildbox Game">
                                    <h2 class="text-md font-bold m-t-sm">Superfly - Full Buildbox Game</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-26205">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted"
                                href="https://www.codester.com/categories/211/buildbox-games-templates" title=""> <img
                                    alt="Buildbox Games &amp; Templates " width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(5).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/211/buildbox-games-templates"
                                    title="">Buildbox</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26205/superfly-full-buildbox-game"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$29</a>




                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- Populer Items -->
        <div class="row clear">
            <div class="wrapper">
                <span class="font-thin h3 m-t-sm"><i class="fa fa-fire text-danger m-r-sm"
                        aria-hidden="true"></i><b>Popular</b> Items <a class=" pull-right btn-default btn-sm font-bold"
                        href="https://www.codester.com/categories/all/?sort_by=popular&amp;order=desc">Browse
                        Popular Items</a></span>

            </div>
        </div>
        <div class="row row-sm">
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/25775/google-drive-proxy-player-php-script">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/25775/google-drive-proxy-player-php-script"><img
                                    alt="Google Drive Proxy Player  - PHP Script"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(8).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/25775/google-drive-proxy-player-php-script"
                                    title="Google Drive Proxy Player  - PHP Script">
                                    <h2 class="text-md font-bold m-t-sm">Google Drive Proxy Player - PHP Script
                                    </h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-25775">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                title="">
                                <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                    Scripts</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/25775/google-drive-proxy-player-php-script"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$49</a>




                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/8807/ultimate-minecraft-server-list">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/8807/ultimate-minecraft-server-list"><img
                                    alt="Ultimate Minecraft Server List"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(9).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/8807/ultimate-minecraft-server-list"
                                    title="Ultimate Minecraft Server List">
                                    <h2 class="text-md font-bold m-t-sm">Ultimate Minecraft Server List</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-8807">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                title="">
                                <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                    Scripts</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/8807/ultimate-minecraft-server-list"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$25</a>




                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/6450/proads-online-advertising-network-script">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/6450/proads-online-advertising-network-script"><img
                                    alt="ProAds - Online Advertising Network Script"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(10).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/6450/proads-online-advertising-network-script"
                                    title="ProAds - Online Advertising Network Script">
                                    <h2 class="text-md font-bold m-t-sm">ProAds - Online Advertising Network
                                        Script</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-6450">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>





                            <a rel="nofollow"
                                href="https://www.youtube.com/watch?v=QeUTA2rd2NU&amp;lightbox[width]=854&amp;lightbox[height]=480&amp;lightbox[modal]=true&amp;hd=1"
                                data-toggle="tooltip" data-placement="top" title=""
                                class="btn btn-sm btn-icon lightbox btn-default" data-original-title="Video"><i
                                    class="fa fa-video-camera"></i></a>



                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                title="">
                                <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                    Scripts</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/6450/proads-online-advertising-network-script"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$39</a>




                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/26526/based-google-cse-php-search-engine-script">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/26526/based-google-cse-php-search-engine-script"><img
                                    alt="Based - Google CSE PHP Search Engine Script"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(11).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/26526/based-google-cse-php-search-engine-script"
                                    title="Based - Google CSE PHP Search Engine Script">
                                    <h2 class="text-md font-bold m-t-sm">Based - Google CSE PHP Search Engine
                                        Script</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-26526">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                title="">
                                <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                    Scripts</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/26526/based-google-cse-php-search-engine-script"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$39</a>




                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/22592/boardcraft-modern-multicraft-theme">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/22592/boardcraft-modern-multicraft-theme"><img
                                    alt="BoardCraft - Modern MultiCraft Theme"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(12).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/22592/boardcraft-modern-multicraft-theme"
                                    title="BoardCraft - Modern MultiCraft Theme">
                                    <h2 class="text-md font-bold m-t-sm">BoardCraft - Modern MultiCraft Theme
                                    </h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-22592">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted"
                                href="https://www.codester.com/categories/320/miscellaneous-website-templates-themes"
                                title=""> <img alt="Miscellaneous Website Templates &amp; Themes" width="20"
                                    class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(6).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/320/miscellaneous-website-templates-themes"
                                    title="">Miscellaneous</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/22592/boardcraft-modern-multicraft-theme"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$7</a>




                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/25473/bubble-shooter-unity-template-project">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/25473/bubble-shooter-unity-template-project"><img
                                    alt="Bubble Shooter - Unity Template Project"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(13).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/25473/bubble-shooter-unity-template-project"
                                    title="Bubble Shooter - Unity Template Project">
                                    <h2 class="text-md font-bold m-t-sm">Bubble Shooter - Unity Template Project
                                    </h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-25473">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>





                            <a rel="nofollow"
                                href="https://www.youtube.com/watch?v=OAP_RGo1Hbo&amp;lightbox[width]=854&amp;lightbox[height]=480&amp;lightbox[modal]=true&amp;hd=1"
                                data-toggle="tooltip" data-placement="top" title=""
                                class="btn btn-sm btn-icon lightbox btn-default" data-original-title="Video"><i
                                    class="fa fa-video-camera"></i></a>



                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted"
                                href="https://www.codester.com/categories/51/unity-game-source-codes-templates"
                                title=""> <img alt="Unity Game Source Codes &amp; Templates" width="20" class="m-b-xs"
                                    height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(7).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/51/unity-game-source-codes-templates"
                                    title="">Unity</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/25473/bubble-shooter-unity-template-project"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$29</a>




                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a
                                href="https://www.codester.com/items/15202/ba-plus-before-and-after-image-slider-wordpress">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a
                                href="https://www.codester.com/items/15202/ba-plus-before-and-after-image-slider-wordpress"><img
                                    alt="BA Plus - Before And After Image Slider WordPress"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(14).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/15202/ba-plus-before-and-after-image-slider-wordpress"
                                    title="BA Plus - Before And After Image Slider WordPress">
                                    <h2 class="text-md font-bold m-t-sm">BA Plus - Before And After Image Slider
                                        WordPress</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-15202">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/32/wordpress-plugins"
                                title=""> <img alt="WordPress Plugins" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(2).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/32/wordpress-plugins"
                                    title="">WordPress</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/15202/ba-plus-before-and-after-image-slider-wordpress"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$15</a>




                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/20471/smart-survey-survey-php-script">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/20471/smart-survey-survey-php-script"><img
                                    alt="Smart Survey - Survey PHP Script"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(15).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/20471/smart-survey-survey-php-script"
                                    title="Smart Survey - Survey PHP Script">
                                    <h2 class="text-md font-bold m-t-sm">Smart Survey - Survey PHP Script</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-20471">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                title="">
                                <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                    Scripts</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <a href="https://www.codester.com/items/20471/smart-survey-survey-php-script"
                                class="btn btn-xs btn-default font-bold w-xxs item-price-button">$15</a>




                        </div>
                    </div>

                </div>


            </div>









        </div>
        <!-- End Populer Items -->
        <!-- Flash sales -->
        <div class="row">
            <div class="wrapper">
                <span class="font-thin h3 m-t-sm"><i class="fa fa-usd text-success m-r-sm"
                        aria-hidden="true"></i><b>Flash</b> Sale<a class="pull-right btn-default btn-sm font-bold"
                        href="https://www.codester.com/sale/">Browse Items on Sale</a></span>

            </div>
        </div>
        <div class="row row-sm">
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/25368/2d-zombie-age-complete-unity-source-code">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/25368/2d-zombie-age-complete-unity-source-code"><img
                                    alt="2D Zombie Age - Complete Unity Source Code"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(16).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/25368/2d-zombie-age-complete-unity-source-code"
                                    title="2D Zombie Age - Complete Unity Source Code">
                                    <h2 class="text-md font-bold m-t-sm">2D Zombie Age - Complete Unity Source
                                        Code</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-25368">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>





                            <a rel="nofollow"
                                href="https://www.youtube.com/watch?v=MynZMDhDwcw&amp;lightbox[width]=854&amp;lightbox[height]=480&amp;lightbox[modal]=true&amp;hd=1"
                                data-toggle="tooltip" data-placement="top" title=""
                                class="btn btn-sm btn-icon lightbox btn-default" data-original-title="Video"><i
                                    class="fa fa-video-camera"></i></a>



                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted"
                                href="https://www.codester.com/categories/51/unity-game-source-codes-templates"
                                title=""> <img alt="Unity Game Source Codes &amp; Templates" width="20" class="m-b-xs"
                                    height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(7).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/51/unity-game-source-codes-templates"
                                    title="">Unity</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <span class="label text-muted label-md"><del>$99</del></span>
                            <a href="https://www.codester.com/items/25368/2d-zombie-age-complete-unity-source-code"
                                class="btn btn-xs btn-danger font-bold w-xxs item-price-button">$50</a>





                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/25232/find-the-hole-with-admob-unity-source-code">
                                <div class="item-header-overlay">



                                </div>
                            </a>

                            <div class="item-label"><span class="bg-danger"><i class="fa fa-fire m-r-xs"
                                        aria-hidden="true"></i>Popular</span></div>

















                            <a href="https://www.codester.com/items/25232/find-the-hole-with-admob-unity-source-code"><img
                                    alt="Find The Hole With Admob - Unity Source Code"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(17).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/25232/find-the-hole-with-admob-unity-source-code"
                                    title="Find The Hole With Admob - Unity Source Code">
                                    <h2 class="text-md font-bold m-t-sm">Find The Hole With Admob - Unity Source
                                        Code</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-25232">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>





                            <a rel="nofollow"
                                href="https://www.youtube.com/watch?v=IDSlc5aJ8FA&amp;lightbox[width]=854&amp;lightbox[height]=480&amp;lightbox[modal]=true&amp;hd=1"
                                data-toggle="tooltip" data-placement="top" title=""
                                class="btn btn-sm btn-icon lightbox btn-default" data-original-title="Video"><i
                                    class="fa fa-video-camera"></i></a>



                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">

                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-on.png"
                                alt="">





                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted"
                                href="https://www.codester.com/categories/51/unity-game-source-codes-templates"
                                title=""> <img alt="Unity Game Source Codes &amp; Templates" width="20" class="m-b-xs"
                                    height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(7).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/51/unity-game-source-codes-templates"
                                    title="">Unity</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <span class="label text-muted label-md"><del>$29</del></span>
                            <a href="https://www.codester.com/items/25232/find-the-hole-with-admob-unity-source-code"
                                class="btn btn-xs btn-danger font-bold w-xxs item-price-button">$15</a>





                        </div>
                    </div>

                </div>


            </div>









        </div>
        <!-- End Flash Sales -->
        <!-- Free Files -->
        <div class="row">
            <div class="wrapper">
                <span class="font-thin h3 m-t-sm"><i class="fa fa-gift text-primary m-r-sm"
                        aria-hidden="true"></i><b>Free</b> Files<a class="pull-right btn-default btn-sm font-bold"
                        href="https://www.codester.com/free/">Browse Free Files</a></span>

            </div>
        </div>
        <div class="row row-sm">
            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/22449/game-background-mountain">
                                <div class="item-header-overlay">



                                </div>
                            </a>























                            <a href="https://www.codester.com/items/22449/game-background-mountain"><img
                                    alt="Game Background Mountain"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(18).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/22449/game-background-mountain"
                                    title="Game Background Mountain">
                                    <h2 class="text-md font-bold m-t-sm">Game Background Mountain</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-22449">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/59/game-graphic-assets"
                                title=""> <img alt="Game Graphic Assets" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(8).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/59/game-graphic-assets" title="">Game
                                    Assets</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <span class="label text-muted label-md"><del>$4</del></span>
                            <a href="https://www.codester.com/items/22449/game-background-mountain"
                                class="btn btn-xs btn-success font-bold w-xxs item-price-button">Free</a>





                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/22402/insurance-management-system">
                                <div class="item-header-overlay">



                                </div>
                            </a>























                            <a href="https://www.codester.com/items/22402/insurance-management-system"><img
                                    alt="Insurance Management System"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(19).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/22402/insurance-management-system"
                                    title="Insurance Management System">
                                    <h2 class="text-md font-bold m-t-sm">Insurance Management System</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-22402">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                title="">
                                <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                    Scripts</a> </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <span class="label text-muted label-md"><del>$29</del></span>
                            <a href="https://www.codester.com/items/22402/insurance-management-system"
                                class="btn btn-xs btn-success font-bold w-xxs item-price-button">Free</a>





                        </div>
                    </div>

                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class="item-panel panel b-a">


                    <div class="item m-l-n-xxs m-r-n-xxs">
                        <div class="pos-rlt">
                            <a href="https://www.codester.com/items/22310/water-drop-logo">
                                <div class="item-header-overlay">



                                </div>
                            </a>























                            <a href="https://www.codester.com/items/22310/water-drop-logo"><img alt="Water Drop Logo"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/preview-small(20).jpg"
                                    class="img-full"></a>
                        </div>
                    </div>


                    <div class="row no-gutter m-l-sm item-listing-title">
                        <div class="m-l-sm">
                            <div class=" m-r-sm text-md font-bold text-center"><a
                                    href="https://www.codester.com/items/22310/water-drop-logo" title="Water Drop Logo">
                                    <h2 class="text-md font-bold m-t-sm">Water Drop Logo</h2>
                                </a>

                            </div>

                        </div>






                    </div>

                    <div class="row no-gutter item-listing-extra m-t-xs ">
                        <div class="m-l-sm m-b-sm pull-left">
                            <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                            <span id="like-button-holder-22310">
                                <a title="Like" href="https://www.codester.com/sign_up/"
                                    class="btn btn-sm btn-icon btn-default hidden-md  "><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></a>
                            </span>








                        </div>


                        <div class="pull-right m-r-sm">



                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">
                            <img src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                alt="">



                        </div>

                    </div>



                    <div class="row no-gutter b-t b-light">

                        <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                            <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates" title="">
                                <img alt="Logo Templates" width="20" class="m-b-xs" height="20"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                            <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                    href="https://www.codester.com/categories/61/logo-templates" title="">Logos</a>
                            </span>


                        </div>



                        <div class="m-b-sm m-r-sm m-t-sm pull-right">
                            <span class="label text-muted label-md"><del>$9</del></span>
                            <a href="https://www.codester.com/items/22310/water-drop-logo"
                                class="btn btn-xs btn-success font-bold w-xxs item-price-button">Free</a>





                        </div>
                    </div>

                </div>


            </div>









        </div>
        <!-- End Free Files -->
        <!-- New Release -->

        <div class="row clear">
            <div class="wrapper">
                <span class="font-thin h3 m-t-sm"><i class="fa fa-star text-warning m-r-sm"
                        aria-hidden="true"></i><b>New</b> Releases <a
                        class="text-sm pull-right btn-default btn-sm font-bold"
                        href="https://www.codester.com/categories/all/">Browse New Items</a></span>

            </div>
        </div>
        <div class="row row-sm">
            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">
                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27250/black-friday-special-deal-60-buildbox-games"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27250/icon-small.png"
                                alt="Black Friday Special Deal - 60 Buildbox Games" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small.png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27250/black-friday-special-deal-60-buildbox-games">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Black Friday Special Deal
                                        - 60 Buildbox Games</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted"
                                    href="https://www.codester.com/categories/211/buildbox-games-templates" title="">
                                    <img alt="Buildbox Games &amp; Templates " width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(5).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/211/buildbox-games-templates"
                                        title="">Buildbox</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $199

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>

            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">

                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27244/digisell-single-vendor-digital-marketplace"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27244/icon-small.png"
                                alt="DigiSell - Single Vendor Digital Marketplace" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(1).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27244/digisell-single-vendor-digital-marketplace">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">DigiSell - Single Vendor
                                        Digital Marketplace</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/10/php-scripts-php-code"
                                    title="">
                                    <img alt="PHP Scripts &amp; PHP Code" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(4).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/10/php-scripts-php-code" title="">PHP
                                        Scripts</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $19

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27241/ios-auto-renewable-subscription-manager-sdk"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27241/icon-small.png"
                                alt="iOS Auto-renewable Subscription manager SDK" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(2).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27241/ios-auto-renewable-subscription-manager-sdk">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">iOS Auto-renewable
                                        Subscription manager SDK</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted"
                                    href="https://www.codester.com/categories/28/ios-app-templates-source-codes"
                                    title=""> <img alt="iOS App Templates &amp; Source Codes" width="16" class="m-b-xs "
                                        height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(3).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/28/ios-app-templates-source-codes"
                                        title="">iOS</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $249

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27236/dna-square-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27236/icon-small.png"
                                alt="DNA Square Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(3).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27236/dna-square-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">DNA Square Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27235/digital-arrow-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27235/icon-small.png"
                                alt="Digital Arrow Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(4).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27235/digital-arrow-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Digital Arrow Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27234/digital-city-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27234/icon-small.png"
                                alt="Digital City Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(5).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27234/digital-city-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Digital City Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27233/digital-d-letter-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27233/icon-small.png"
                                alt="Digital D Letter Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(6).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27233/digital-d-letter-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Digital D Letter Logo
                                    </h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27232/digital-rotation-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27232/icon-small.png"
                                alt="Digital Rotation Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(7).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27232/digital-rotation-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Digital Rotation Logo
                                    </h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27231/digital-pro-d-letter-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27231/icon-small.png"
                                alt="Digital Pro D Letter Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(8).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27231/digital-pro-d-letter-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Digital Pro D Letter Logo
                                    </h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27230/digital-heart-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27230/icon-small.png"
                                alt="Digital Heart Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(9).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27230/digital-heart-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Digital Heart Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27229/digital-agency-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27229/icon-small.png"
                                alt="Digital Agency Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(10).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27229/digital-agency-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Digital Agency Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27228/diamond-spa-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27228/icon-small.png"
                                alt="Diamond Spa Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(11).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27228/diamond-spa-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Diamond Spa Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27227/diamond-eco-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27227/icon-small.png"
                                alt="Diamond Eco Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(12).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27227/diamond-eco-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Diamond Eco Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27226/diamond-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27226/icon-small.png"
                                alt="Diamond Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(13).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27226/diamond-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Diamond Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27225/dental-care-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27225/icon-small.png"
                                alt="Dental Care Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(14).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27225/dental-care-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Dental Care Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27224/crown-tech-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27224/icon-small.png"
                                alt="Crown Tech Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(15).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27224/crown-tech-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Crown Tech Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27223/crown-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27223/icon-small.png"
                                alt="Crown Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(16).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27223/crown-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Crown Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27216/e-shoppers-ecommerce-html5-template"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27216/icon-small.png"
                                alt="E-shoppers - eCommerce HTML5 Template" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(17).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27216/e-shoppers-ecommerce-html5-template">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">E-shoppers - eCommerce
                                        HTML5 Template</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted"
                                    href="https://www.codester.com/categories/8/html-website-templates" title=""> <img
                                        alt="HTML Website Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon.png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/8/html-website-templates"
                                        title="">HTML</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $12

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27205/lamp-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27205/icon-small.png"
                                alt="Lamp Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(18).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27205/lamp-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Lamp Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $30

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27198/d-letter-line-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27198/icon-small.png"
                                alt="D Letter Line Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(19).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27198/d-letter-line-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">D Letter Line Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27197/dental-care-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27197/icon-small.png"
                                alt="Dental Care Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(20).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27197/dental-care-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Dental Care Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27196/dental-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27196/icon-small.png"
                                alt="Dental Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(21).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27196/dental-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Dental Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27195/delta-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27195/icon-small.png"
                                alt="Delta Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(22).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27195/delta-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Delta Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27194/d-letter-leaf-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27194/icon-small.png"
                                alt="D Letter Leaf Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(23).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27194/d-letter-leaf-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">D Letter Leaf Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27193/delivery-food-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27193/icon-small.png"
                                alt="Delivery Food Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(24).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27193/delivery-food-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Delivery Food Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27192/deer-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27192/icon-small.png"
                                alt="Deer Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(25).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27192/deer-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Deer Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27191/letter-d-data-trade-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27191/icon-small.png"
                                alt="Letter D - Data Trade Logo " class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(26).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27191/letter-d-data-trade-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Letter D - Data Trade
                                        Logo </h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27190/data-tech-d-letter-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27190/icon-small.png"
                                alt="Data Tech D Letter Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(27).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27190/data-tech-d-letter-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Data Tech D Letter Logo
                                    </h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27189/crown-host-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27189/icon-small.png"
                                alt="Crown Host Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(28).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27189/crown-host-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Crown Host Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>



                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>







                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>


                            </div>





                        </div>






                    </div>








                </div>


            </div>




            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">





                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27188/cloud-shop-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27188/icon-small.png"
                                alt="Cloud Shop Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(29).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27188/cloud-shop-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Cloud Shop Logo</h2>
                                </a>



                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>
                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">

                            </div>
                            <div class="text-sm m-r-sm m-t-n-md pull-right">

                                <div class="m-t-xs"><strong>

                                        $35

                                    </strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">
                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27187/bull-logo"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27187/icon-small.png"
                                alt="Bull Logo" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(30).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27187/bull-logo">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Bull Logo</h2>
                                </a>
                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">

                                <a class="text-muted" href="https://www.codester.com/categories/61/logo-templates"
                                    title=""> <img alt="Logo Templates" width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(9).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/61/logo-templates"
                                        title="">Logos</a></span>
                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                            </div>
                            <div class="text-sm m-r-sm m-t-n-md pull-right">
                                <div class="m-t-xs"><strong>
                                        $35
                                    </strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class=" panel b-a">
                    <div class="clearfix item-listing-title-sm">
                        <a href="https://www.codester.com/items/27186/puzzlerz-full-buildbox-game"
                            class="pull-left m-l-sm m-t-sm m-r-sm thumb-md ">
                            <img data-src="https://www.codester.com/static/uploads/items/000/027/27186/icon-small.png"
                                alt="Puzzlerz - Full Buildbox Game" class="img-rounded lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon-small(31).png">
                        </a>
                        <div class="clear">
                            <div class=" m-r-xs text-md font-bold"><a
                                    href="https://www.codester.com/items/27186/puzzlerz-full-buildbox-game">
                                    <h2 class="text-md font-bold m-t-sm text-ellipsis">Puzzlerz - Full Buildbox
                                        Game</h2>
                                </a>
                            </div>
                            <div class="pull-left text-sm m-t-n-xs row padder w-lg">
                                <a class="text-muted"
                                    href="https://www.codester.com/categories/211/buildbox-games-templates" title="">
                                    <img alt="Buildbox Games &amp; Templates " width="16" class="m-b-xs " height="16"
                                        src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/icon(5).png"></a>
                                <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                        href="https://www.codester.com/categories/211/buildbox-games-templates"
                                        title="">Buildbox</a></span>
                                <br>
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                                <img width="12" height="12"
                                    src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/star-off.png"
                                    alt="">
                            </div>
                            <div class="text-sm m-r-sm m-t-n-md pull-right">
                                <div class="m-t-xs"><strong>
                                        $29
                                    </strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Release -->
        <!-- Blog Artical -->
        <div class="row clear">
            <div class="wrapper ">
                <span class="font-thin h3 m-t-sm"><i class="fa fa-file-text-o m-r-sm" aria-hidden="true"></i><b>Blog</b>
                    Articles<a class="text-sm pull-right btn-default btn-sm font-bold"
                        href="https://www.codester.com/blog/">Visit Our Blog</a></span>

            </div>
        </div>
        <div class="row row-sm m-b-md">
            <div class="col-md-3 col-sm-6">
                <div class="panel b-a blog-panel">
                    <div>

                        <a href="https://www.codester.com/blog/trends-shaping-the-world-of-web-development/"
                            class="grow"><img
                                data-src="https://www.codester.com/blog/wp-content/uploads/2020/11/web-development-trends.jpg"
                                class="img-full lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/web-development-trends.jpg"></a>
                    </div>
                    <div class="panel-body">
                        <div class="link-info ">Business</div>
                        <h2 class="h3 m-t-xs h-xs"><a
                                href="https://www.codester.com/blog/trends-shaping-the-world-of-web-development/">Trends
                                Shaping The World Of Web Development In 2021</a></h2>
                        <div class="text-muted m-t-xs">
                            <i class="fa fa-clock-o text-muted"></i><span class="m-r-sm"> 4 November 2020</span>

                        </div>

                    </div>


                </div>

            </div>




            <div class="col-md-3 col-sm-6">
                <div class="panel b-a blog-panel">
                    <div>

                        <a href="https://www.codester.com/blog/summer-upload-contest-2020-winners-announced/"
                            class="grow"><img
                                data-src="https://www.codester.com/blog/wp-content/uploads/2020/09/summer-upload-contest-20.jpg20-winners.jpg"
                                class="img-full lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/summer-upload-contest-20.jpg20-winners.jpg"></a>
                    </div>
                    <div class="panel-body">
                        <div class="link-info ">Site news</div>
                        <h2 class="h3 m-t-xs h-xs"><a
                                href="https://www.codester.com/blog/summer-upload-contest-2020-winners-announced/">Summer
                                Upload Contest 2020 Winners Announced</a></h2>
                        <div class="text-muted m-t-xs">
                            <i class="fa fa-clock-o text-muted"></i><span class="m-r-sm"> 11 September
                                2020</span>

                        </div>

                    </div>


                </div>

            </div>




            <div class="col-md-3 col-sm-6">
                <div class="panel b-a blog-panel">
                    <div>

                        <a href="https://www.codester.com/blog/the-2000-summer-upload-contest-2020/" class="grow"><img
                                data-src="https://www.codester.com/blog/wp-content/uploads/2020/07/upload-contest-2020.jpg"
                                class="img-full lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/upload-contest-2020.jpg"></a>
                    </div>
                    <div class="panel-body">
                        <div class="link-info ">Site news</div>
                        <h2 class="h3 m-t-xs h-xs"><a
                                href="https://www.codester.com/blog/the-2000-summer-upload-contest-2020/">The
                                $2000 Summer Upload Contest 2020</a></h2>
                        <div class="text-muted m-t-xs">
                            <i class="fa fa-clock-o text-muted"></i><span class="m-r-sm"> 3 July 2020</span>

                        </div>

                    </div>


                </div>

            </div>




            <div class="col-md-3 col-sm-6">
                <div class="panel b-a blog-panel">
                    <div>

                        <a href="https://www.codester.com/blog/how-to-create-a-mobile-app-using-android-studio/"
                            class="grow"><img
                                data-src="https://www.codester.com/blog/wp-content/uploads/2020/01/create-app-android-studio2.jpg"
                                class="img-full lazyloaded"
                                src="./Buy Code, Scripts, Themes, Plugins and more _ Codester_files/create-app-android-studio2.jpg"></a>
                    </div>
                    <div class="panel-body">
                        <div class="link-info ">Web development</div>
                        <h2 class="h3 m-t-xs h-xs"><a
                                href="https://www.codester.com/blog/how-to-create-a-mobile-app-using-android-studio/">How
                                To Create A Mobile App Using Android Studio</a></h2>
                        <div class="text-muted m-t-xs">
                            <i class="fa fa-clock-o text-muted"></i><span class="m-r-sm"> 30 January 2020</span>

                        </div>

                    </div>


                </div>

            </div>
        </div>
        <!-- End Blog Artical -->
    </div>
</div>
@endsection