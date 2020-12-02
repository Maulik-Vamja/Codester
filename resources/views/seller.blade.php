@extends('layouts.frontend.app')

@section('pageTitle')
Sell Your Work
@endsection

@section('content')
<div id="content" class="main-content bg-light">
    <div class="frontpage-header"
        style="background: url(&quot; {{ asset('assets/frontend/images/frontpage-bg-morning.jpg') }} &quot;) 50% 50% / cover no-repeat; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="m-t-xxl m-b-xxl padder-v">
                        <h1 class="font-thin l-h-1x m-t-xxl text-white padder-v animated fadeInDown">
                            Become a Seller</h1>
                        <h3 class="text-white m-t-xl l-h-1x">Start making money by selling your
                            <strong>Scripts</strong>, <strong>Themes</strong>, <strong>App Source Codes</strong>
                            and <strong>Plugins</strong> to the thousands of buyers on Codester.</h3>
                    </div>
                    <p class="text-center m-b-xxl wrapper">
                        <a href=" {{ Auth::check() ? route('upload') : route('register') }} " target="_blank"
                            class="btn btn-lg btn-success text-lg m-b-lg m-r-md animated fadeInDown"> {{ Auth::check() ? 'Upload your work' : 'Sign Up now' }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white-only">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">
                <div class="col-sm-5">
                    <img src=" {{ asset('assets/frontend/images/seller-screenshot.png') }}" class="w-full">
                </div>
                <div class="col-sm-7 text-lg">
                    <h3 class="text-dark font-bold m-b-lg">Your business is up and running in just a few steps
                    </h3>
                    <strong>1.</strong> Sign up.<br>
                    <strong>2.</strong> Upload your item.<br>
                    <strong>3.</strong> Our review team will review your item.<br>
                    <strong>4.</strong> Once your item has been approved it will appear on Codester.<br>
                    <strong>5.</strong> Have your earnings transferred to you by Paypal or wire transfer once a
                    month.<br>


                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="row m-t-xl m-b-xxl">
                <div class="col-sm-7">
                    <h3 class="text-dark font-bold m-b-lg">Enjoy our 70% commission rate without any
                        restrictions</h3>
                    <ul class="list-unstyled  m-t-xl">
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-xs text-success"></i>
                            <p class="clear m-b-md text-lg">Receive a commission rate of <strong>70%</strong>.
                            </p>
                        </li>
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-xs text-success"></i>
                            <p class="clear m-b-md text-lg"><strong>No minimum</strong> number of sales
                                required.</p>
                        </li>
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-xs text-success"></i>
                            <p class="clear m-b-md text-lg"><strong>No exclusivity</strong> required. Feel free
                                to keep selling your products on your own website.</p>
                        </li>
                    </ul>


                </div>
                <div class="col-sm-5 text-center">
                    <img src=" {{ asset('assets/frontend/images/pie-chart.png') }} " class="w-lg">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white-only">
        <div class="container">
            <div class="row m-t-xl m-b-xxl text-center">
                <h3 class="text-dark font-bold m-b-xxl">What can you sell?</h3>
                <div class="col-sm-3 tex-center fadeInUp animated" data-ride="animated"
                    data-animation="fadeInUp" data-delay="300">
                    <span class="text-3x text-muted"><i class="fa fa-code text-2x"></i></span><br>
                    <span class="text-lg ">Scripts &amp; Code</span>
                </div>
                <div class="col-sm-3 tex-center fadeInUp animated" data-ride="animated"
                    data-animation="fadeInUp" data-delay="600">
                    <span class="text-3x text-muted"><i class="fa fa-paint-brush text-2x"></i></span><br>
                    <span class="text-lg ">Themes</span>
                </div>
                <div class="col-sm-3 tex-center fadeInUp animated" data-ride="animated"
                    data-animation="fadeInUp" data-delay="900">
                    <span class="text-3x text-muted"><i class="fa fa-plug text-2x"></i></span><br>
                    <span class="text-lg ">Plugins</span>
                </div>
                <div class="col-sm-3 tex-center fadeInUp animated" data-ride="animated"
                    data-animation="fadeInUp" data-delay="1200">
                    <span class="text-3x text-muted"><i class="fa fa-mobile text-2x"></i></span><br>
                    <span class="text-lg ">App Source Code</span>
                </div>

            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="container">
            <div class="row m-t-xl m-b-xxl text-center">
                <h3 class="text-dark font-bold m-b-lg fadeInDown animated" data-ride="animated"
                    data-animation="fadeInDown" data-delay="1200">Start your business today</h3>
                <a href="" class="btn btn-success w-xl btn-lg flipInX animated"
                    data-ride="animated" data-animation="flipInX" data-delay="1800">Sign up now</a>

            </div>
        </div>
    </div>
</div>
@endsection
