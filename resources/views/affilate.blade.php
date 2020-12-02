@extends('layouts.frontend.app')

@section('pageTitle')
Affilate Program
@endsection

@section('content')
<div id="content" class="main-content bg-light">


    <div style="background-image: url(&#39; {{ asset('assets/frontend/images/money-bg.jpg') }}&#39;);height: 400px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="m-t-xxl m-b-xxl padder-v">
                        <h1 class="font-thin l-h-1x m-t-xxl text-white padder-v animated fadeInDown">Affiliate Program
                        </h1>
                        <h3 class="text-white m-t-xl l-h-1x animated fadeInUp">Refer new customers to Codester and
                            receive 10% of their purchases</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-white-only">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">
                <div class="col-sm-5 m-t-md">
                    <img src=" {{ asset('assets/frontend/images/affiliate.png') }} " class="w-full">
                </div>
                <div class="col-sm-7 text-lg">
                    <h3 class="text-dark font-bold m-b-lg">Spread the word &amp; start making money</h3>
                    Refer new customers to Codester using your affiliate link and you will receive <strong>10%</strong>
                    of any their purchases. Our affiliate tracking cookie lasts 90 days. You will receive commission
                    from all customers that sign up within 90 days after clicking on your affiliate links.

                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">
                <div class="col-sm-8 text-lg link-info">
                    <h3 class="text-dark font-bold m-b-lg">Creating your affiliate links</h3>
                    <p class="text-sm"> To be able to use our affiliate program. You will need to link to Codester using
                        your affiliate links.<br><br>
                        Add "<strong>?ref=USERNAME</strong>" to a link, replace USERNAME with your Codester username and
                        you are ready to go.
                        <br><br>
                        <strong>Here are some examples:</strong><br><br>

                        <strong>Frontpage:</strong> https://www.codester.com?ref=<strong>USERNAME</strong>
                        <br>
                        <strong>Item page:</strong>
                        https://www.codester.com/items/1/a-very-great-source-code-component.html?ref=<strong>USERNAME</strong>
                        <br>
                        <strong>Category listing:</strong>
                        https://www.codester.com/categories/2/Objective-C?ref=<strong>USERNAME</strong></p>
                </div>
                <div class="col-sm-4 text-center m-t-md">
                    <span class="text-3x text-muted"><span class="text-2x"><i
                                class="icon-link text-2x"></i></span></span>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-white-only">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">

                <div class="col-sm-4 text-center m-t-xl fadeInLeft animated" data-ride="animated"
                    data-animation="fadeInLeft" data-delay="300">
                    <img src=" {{ asset('assets/frontend/images/social.png') }} ">
                </div>
                <div class="col-sm-8 text-lg link-info fadeInRight animated" data-ride="animated"
                    data-animation="fadeInRight" data-delay="300">
                    <h3 class="text-dark font-bold m-b-lg">Social Sharing </h3>
                    <p>On every item's page there are share buttons to share an item across several social networks
                        including Facebook and Twitter. If you are logged in, you will automatically share your
                        affiliate link. Just click on any share button and you will receive commission on every referred
                        sale.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">
                <div class="col-sm-8 text-lg link-info fadeInLeft animated" data-ride="animated"
                    data-animation="fadeInLeft" data-delay="300">
                    <h3 class="text-dark font-bold m-b-lg">Banners</h3>
                    <p>For your convenience we have created ready-to-use banners for your website. Feel free to use them
                        on your website. We have packed them in one .zip file. </p>
                    <br><a href="https://www.codester.com/downloads/banners.zip" class="btn btn-info">Download
                        banners</a>




                </div>
                <div class="col-sm-4 text-center m-t-md fadeInRight animated" data-ride="animated"
                    data-animation="fadeInRight" data-delay="300">
                    <img src=" {{ asset('assets/frontend/images/banner.png') }}" class="w-full">
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white-only">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">

                <div class="col-sm-6 text-center m-t-xxl fadeInLeft animated" data-ride="animated"
                    data-animation="fadeInLeft" data-delay="300">
                    <img src=" {{ asset('assets/fronetnd/images/logo-v1-transparant.png') }}">
                </div>
                <div class="col-sm-6 text-lg link-info fadeInRight animated" data-ride="animated"
                    data-animation="fadeInRight" data-delay="300">
                    <h3 class="text-dark font-bold m-b-lg">Logos</h3>
                    <p>We have created a .zip file with several versions of our logo. Feel free to integrate them into
                        your own content or publish them on your website.</p>
                    <br><a href="https://www.codester.com/downloads/logos.zip" class="btn btn-info ">Download logos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript" src=" {{ asset('assets/frontend/js/pandalocker.2.0.7.js') }}"></script>
@endpush