@extends('layouts.frontend.app')

@section('pageTitle')
Free Files
@endsection

@push('css')
<link rel="stylesheet" href=" {{ asset('assets/frontend/css/soon.min.css') }} " type="text/css">
@endpush

@section('content')
<div id="content" class="main-content bg-light">

    <div class="b-b bg-black lter frontpage-header"
        style="background: url(&quot; {{ asset('assets/frontend/images/frontpage-bg-morning.jpg') }} &quot;) 50% 50% / cover no-repeat; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 padder-v text-center">
                    <div class="m-t-xxl m-b-xl ">
                        <h1 class="font-thin  m-t-xl m-b-sm text-white padder-v animated fadeInDown">
                            Free Files of the Week</h1>
                        <h3 class="text-white animated fadeInUp">Download these files before they are gone</h3>

                        <style type="text/css">
                            #my-soon-counter .soon-reflection {
                                background-color: #000000;
                                background-image: linear-gradient(#000000 25%, rgba(0, 0, 0, 0));
                            }

                            #my-soon-counter {
                                background-position: top;
                            }

                            #my-soon-counter {
                                color: #dddada;
                            }
                        </style>
                        <div class="soon" id="my-soon-counter" data-due="2020-12-07T00:00:00"
                            data-layout="group label-lowercase label-small" data-format="d,h,m,s"
                            data-face="flip color-dark corners-sharp" data-initialized="true" data-scale="m">
                            <span class="soon-group " data-value="186090"><span class="soon-group-inner"><span
                                        class="soon-group soon-group-sub" data-value="4"><span
                                            class="soon-group-inner"><span class="soon-repeater soon-value "><span
                                                    class="soon-flip "><span class="soon-flip-inner soon-flip-animate"
                                                        style="width: 1em;"><span class="soon-flip-card"><span
                                                                class="soon-flip-front soon-flip-face"> </span><span
                                                                class="soon-flip-back soon-flip-face">4</span><span
                                                                class="soon-flip-top soon-flip-face">4</span><span
                                                                class="soon-flip-bottom soon-flip-face"> </span><span
                                                                class="soon-flip-bounding">8</span></span></span></span></span><span
                                                class="soon-text soon-label">Days</span></span></span><span
                                        class="soon-group soon-group-sub" data-value="12"><span
                                            class="soon-group-inner"><span class="soon-repeater soon-value "><span
                                                    class="soon-flip "><span class="soon-flip-inner soon-flip-animate"
                                                        style="width: 1em;"><span class="soon-flip-card"><span
                                                                class="soon-flip-front soon-flip-face"> </span><span
                                                                class="soon-flip-back soon-flip-face">1</span><span
                                                                class="soon-flip-top soon-flip-face">1</span><span
                                                                class="soon-flip-bottom soon-flip-face"> </span><span
                                                                class="soon-flip-bounding">8</span></span></span></span><span
                                                    class="soon-flip "><span class="soon-flip-inner soon-flip-animate"
                                                        style="width: 1em;"><span class="soon-flip-card"><span
                                                                class="soon-flip-front soon-flip-face"> </span><span
                                                                class="soon-flip-back soon-flip-face">2</span><span
                                                                class="soon-flip-top soon-flip-face">2</span><span
                                                                class="soon-flip-bottom soon-flip-face"> </span><span
                                                                class="soon-flip-bounding">8</span></span></span></span></span><span
                                                class="soon-text soon-label">Hours</span></span></span><span
                                        class="soon-group soon-group-sub" data-value="31"><span
                                            class="soon-group-inner"><span class="soon-repeater soon-value "><span
                                                    class="soon-flip "><span class="soon-flip-inner soon-flip-animate"
                                                        style="width: 1em;"><span class="soon-flip-card"><span
                                                                class="soon-flip-front soon-flip-face"> </span><span
                                                                class="soon-flip-back soon-flip-face">3</span><span
                                                                class="soon-flip-top soon-flip-face">3</span><span
                                                                class="soon-flip-bottom soon-flip-face"> </span><span
                                                                class="soon-flip-bounding">8</span></span></span></span><span
                                                    class="soon-flip "><span class="soon-flip-inner soon-flip-animate"
                                                        style="width: 1em;"><span class="soon-flip-card"><span
                                                                class="soon-flip-front soon-flip-face">2</span><span
                                                                class="soon-flip-back soon-flip-face">1</span><span
                                                                class="soon-flip-top soon-flip-face">1</span><span
                                                                class="soon-flip-bottom soon-flip-face">2</span><span
                                                                class="soon-flip-bounding">8</span></span></span></span></span><span
                                                class="soon-text soon-label">Minutes</span></span></span><span
                                        class="soon-group soon-group-sub" data-value="3"><span
                                            class="soon-group-inner"><span class="soon-repeater soon-value "><span
                                                    class="soon-flip "><span class="soon-flip-inner soon-flip-animate"
                                                        style="width: 1em;"><span class="soon-flip-card"><span
                                                                class="soon-flip-front soon-flip-face">1</span><span
                                                                class="soon-flip-back soon-flip-face">0</span><span
                                                                class="soon-flip-top soon-flip-face">0</span><span
                                                                class="soon-flip-bottom soon-flip-face">1</span><span
                                                                class="soon-flip-bounding">8</span></span></span></span><span
                                                    class="soon-flip "><span class="soon-flip-inner soon-flip-animate"
                                                        style="width: 1em;"><span class="soon-flip-card"><span
                                                                class="soon-flip-front soon-flip-face">4</span><span
                                                                class="soon-flip-back soon-flip-face">3</span><span
                                                                class="soon-flip-top soon-flip-face">3</span><span
                                                                class="soon-flip-bottom soon-flip-face">4</span><span
                                                                class="soon-flip-bounding">8</span></span></span></span></span><span
                                                class="soon-text soon-label">Seconds</span></span></span></span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container m-t-lg">
        <div class="row">

            <div class="col-sm-12">
                <div class="row row-sm ">
                    <div class="col-md-3 col-sm-4 ">
                        <div class="item-panel panel b-a">
                            <div class="item m-l-n-xxs m-r-n-xxs">
                                <div class="pos-rlt">
                                    <a href="https://www.codester.com/items/22788/taurushelp-helpdesk-ticketing-system">
                                        <div class="item-header-overlay">

                                        </div>
                                    </a>

                                    <a href="https://www.codester.com/items/22788/taurushelp-helpdesk-ticketing-system"><img
                                            alt="TaurusHelp - Helpdesk Ticketing System"
                                            src="./Free Files of the Week _ Codester_files/preview-small.jpg"
                                            class="img-full"></a>
                                </div>
                            </div>
                            <div class="row no-gutter m-l-sm item-listing-title">
                                <div class="m-l-sm">
                                    <div class=" m-r-sm text-md font-bold text-center"><a
                                            href="https://www.codester.com/items/22788/taurushelp-helpdesk-ticketing-system"
                                            title="TaurusHelp - Helpdesk Ticketing System">
                                            <h2 class="text-md font-bold m-t-sm">TaurusHelp - Helpdesk Ticketing System
                                            </h2>
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="row no-gutter item-listing-extra m-t-xs ">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                        class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>
                                    <span id="like-button-holder-22788">
                                        <a title="Like" href="https://www.codester.com/sign_up/"
                                            class="btn btn-sm btn-icon btn-default hidden-md  "><i
                                                class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    </span>

                                </div>


                                <div class="pull-right m-r-sm">

                                    <img src="./Free Files of the Week _ Codester_files/star-on.png" alt="">

                                    <img src="./Free Files of the Week _ Codester_files/star-on.png" alt="">

                                    <img src="./Free Files of the Week _ Codester_files/star-on.png" alt="">

                                    <img src="./Free Files of the Week _ Codester_files/star-on.png" alt="">

                                    <img src="./Free Files of the Week _ Codester_files/star-on.png" alt="">
                                </div>

                            </div>



                            <div class="row no-gutter b-t b-light">

                                <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                                    <a class="text-muted"
                                        href="https://www.codester.com/categories/10/php-scripts-php-code" title="">
                                        <img alt="PHP Scripts &amp; PHP Code" width="20" class="m-b-xs" height="20"
                                            src="./Free Files of the Week _ Codester_files/icon.png"></a>
                                    <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                            href="https://www.codester.com/categories/10/php-scripts-php-code"
                                            title="">PHP Scripts</a> </span>


                                </div>



                                <div class="m-b-sm m-r-sm m-t-sm pull-right">
                                    <span class="label text-muted label-md"><del>$12</del></span>
                                    <a href="https://www.codester.com/items/22788/taurushelp-helpdesk-ticketing-system"
                                        class="btn btn-xs btn-success font-bold w-xxs item-price-button">Free</a>





                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-sm-4 ">
                        <div class="item-panel panel b-a">


                            <div class="item m-l-n-xxs m-r-n-xxs">
                                <div class="pos-rlt">
                                    <a
                                        href="https://www.codester.com/items/22759/daily-timesheet-management-system-wordpress-plugin">
                                        <div class="item-header-overlay">



                                        </div>
                                    </a>
                                    <a
                                        href="https://www.codester.com/items/22759/daily-timesheet-management-system-wordpress-plugin"><img
                                            alt="Daily Timesheet Management System WordPress Plugin"
                                            src="./Free Files of the Week _ Codester_files/preview-small(1).jpg"
                                            class="img-full"></a>
                                </div>
                            </div>
                            <div class="row no-gutter m-l-sm item-listing-title">
                                <div class="m-l-sm">
                                    <div class=" m-r-sm text-md font-bold text-center"><a
                                            href="https://www.codester.com/items/22759/daily-timesheet-management-system-wordpress-plugin"
                                            title="Daily Timesheet Management System WordPress Plugin">
                                            <h2 class="text-md font-bold m-t-sm">Daily Timesheet Management System
                                                WordPress Plugin</h2>
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="row no-gutter item-listing-extra m-t-xs ">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                        class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                                    <span id="like-button-holder-22759">
                                        <a title="Like" href="https://www.codester.com/sign_up/"
                                            class="btn btn-sm btn-icon btn-default hidden-md  "><i
                                                class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    </span>
                                </div>


                                <div class="pull-right m-r-sm">



                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>
                            <div class="row no-gutter b-t b-light">

                                <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                                    <a class="text-muted"
                                        href="https://www.codester.com/categories/32/wordpress-plugins" title=""> <img
                                            alt="WordPress Plugins" width="20" class="m-b-xs" height="20"
                                            src="./Free Files of the Week _ Codester_files/icon(1).png"></a>
                                    <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                            href="https://www.codester.com/categories/32/wordpress-plugins"
                                            title="">WordPress</a> </span>


                                </div>
                                <div class="m-b-sm m-r-sm m-t-sm pull-right">
                                    <span class="label text-muted label-md"><del>$4</del></span>
                                    <a href="https://www.codester.com/items/22759/daily-timesheet-management-system-wordpress-plugin"
                                        class="btn btn-xs btn-success font-bold w-xxs item-price-button">Free</a>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-sm-4 ">
                        <div class="item-panel panel b-a">


                            <div class="item m-l-n-xxs m-r-n-xxs">
                                <div class="pos-rlt">
                                    <a
                                        href="https://www.codester.com/items/22706/comion-multipurpose-coming-soon-html-template">
                                        <div class="item-header-overlay">
                                        </div>
                                    </a>

                                    <a
                                        href="https://www.codester.com/items/22706/comion-multipurpose-coming-soon-html-template"><img
                                            alt="Comion - Multipurpose Coming Soon HTML Template"
                                            src="./Free Files of the Week _ Codester_files/preview-small(2).jpg"
                                            class="img-full"></a>
                                </div>
                            </div>


                            <div class="row no-gutter m-l-sm item-listing-title">
                                <div class="m-l-sm">
                                    <div class=" m-r-sm text-md font-bold text-center"><a
                                            href="https://www.codester.com/items/22706/comion-multipurpose-coming-soon-html-template"
                                            title="Comion - Multipurpose Coming Soon HTML Template">
                                            <h2 class="text-md font-bold m-t-sm">Comion - Multipurpose Coming Soon HTML
                                                Template</h2>
                                        </a>

                                    </div>

                                </div>
                            </div>

                            <div class="row no-gutter item-listing-extra m-t-xs ">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <a href="https://www.codester.com/sign_up/" title="Add bookmark"
                                        class="btn btn-sm btn-icon btn-default"><i class="fa fa-folder-open"></i></a>



                                    <span id="like-button-holder-22706">
                                        <a title="Like" href="https://www.codester.com/sign_up/"
                                            class="btn btn-sm btn-icon btn-default hidden-md  "><i
                                                class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    </span>
                                </div>
                                <div class="pull-right m-r-sm">

                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                    <img src="./Free Files of the Week _ Codester_files/star-off.png" alt="">
                                </div>
                            </div>
                            <div class="row no-gutter b-t b-light">

                                <div class="m-l-sm m-t-sm m-b-xs pull-left text-sm">

                                    <a class="text-muted"
                                        href="https://www.codester.com/categories/8/html-website-templates" title="">
                                        <img alt="HTML Website Templates" width="20" class="m-b-xs" height="20"
                                            src="./Free Files of the Week _ Codester_files/icon(2).png"></a>
                                    <span class="m-l-xs m-b-sm text-muted"><a class="text-muted"
                                            href="https://www.codester.com/categories/8/html-website-templates"
                                            title="">HTML</a> </span>
                                </div>
                                <div class="m-b-sm m-r-sm m-t-sm pull-right">
                                    <span class="label text-muted label-md"><del>$8</del></span>
                                    <a href="https://www.codester.com/items/22706/comion-multipurpose-coming-soon-html-template"
                                        class="btn btn-xs btn-success font-bold w-xxs item-price-button">Free</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white padder-v">
        <div class="container m-b-lg">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="  padder-v ">
                        Don't forget to share these free files with your friends</h3>

                    <div><a rel="nofollow" target="_blank" class="btn btn-md btn-facebook"
                            href="https://www.facebook.com/sharer/sharer.php?u=https://www.codester.com/free/"><i
                                class="fa fa-facebook fa-fw"></i> Share on Facebook</a> <a rel="nofollow"
                            target="_blank" class="m-l-sm btn btn-md btn-twitter"
                            href="https://twitter.com/intent/tweet?text=Check+out+this+weeks+free+scripts,+source%20codes,+themes+and+graphics+on+Codester.+Via+@codesterhq&amp;url=https://www.codester.com/free/&amp;hashtags=webdev,webdesign"><i
                                class="fa  fa-twitter fa-fw"></i> Share on Twitter</a><br>
                        <strong>Link:</strong> <input type="text form-control" class="w-sm m-t-sm"
                            value=" {{ url('/free')}} " onclick="this.select();" name="ref-url">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('js')
<script type="text/javascript" src=" {{ asset('assets/frontend/js/soon.min.js') }}"></script>
@endpush