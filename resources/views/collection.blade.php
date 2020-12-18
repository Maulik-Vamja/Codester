@extends('layouts.frontend.app')

@section('pageTitle')
Collection
@endsection

@section('content')

<div id="content" class="main-content bg-light">


    <div class="b-b bg-light lter">
        <div class="container m-b-sm p-t-sm ">
            <div class="row">
                <div class="col-xs-12 m-t-sm text-muted text-sm"><a href="https://www.codester.com/" title="">Home</a> \
                    <a href="https://www.codester.com/collections/" title="">Public collections</a></div>
                <div class="col-md-8">
                    <h1 class="font-thin h2 m-t-md m-b-sm">Collections</h1>
                </div>
                <div class="col-sm-4  visible-lg visible-md">

                </div>
            </div>
        </div>
    </div>

    <div class="container m-t">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="row row-sm m-b">
                    <div class="pull-right">

                        <form name="sortbyform">
                            <select name="sortby" class="form-control" onchange="document.location.href=
document.sortbyform.sortby.options[document.sortbyform.sortby.selectedIndex].value">
                                <option value="/collections/?sort_by=published_at&amp;order=desc" selected="selected">
                                    Most recent</option>

                                <option value="/collections/?sort_by=average_rating&amp;order=desc">Best rating</option>

                            </select>
                        </form>

                    </div>
                </div>
                <div class="row row-sm">


                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">
                                    <a href="#">
                                        <img class="img-full" alt="Hosting"
                                            src=" {{ asset('assets/frontend/images/default-collection.jpg') }} ">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/13498/hosting">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Hosting</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Michael113">





                                <a href="https://www.codester.com/Michael113">Michael113</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>29 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">

                                    <a href="https://www.codester.com/collections/13497/gamers">
                                        <img class="img-full" alt="gamers"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/13497/gamers">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">gamers</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Michael113">

                                <a href="https://www.codester.com/Michael113">Michael113</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>29 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">

                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/13375/">
                                        <img class="img-full" alt="эрхэм"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a href="https://www.codester.com/collections/13375/">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">эрхэм</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="erkhem">





                                <a href="https://www.codester.com/erkhem">erkhem</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/13363/best-scripts">
                                        <img class="img-full" alt="Best Scripts"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/13363/best-scripts">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Best Scripts</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">

                                <img src="./Collections _ Codester_files/A_aa2835aec83b693cb6bfcb1aae4b1d7d.png"
                                    class="profile-avatar-sm" alt="viperay" width="20" height="20">




                                <a href="https://www.codester.com/viperay">viperay</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/13322/hello">
                                        <img class="img-full" alt="Hello"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/13322/hello">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Hello</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Helloboss">





                                <a href="https://www.codester.com/Helloboss">Helloboss</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/13313/templates">
                                        <img class="img-full" alt="Templates"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/13313/templates">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Templates</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Shivam20">





                                <a href="https://www.codester.com/Shivam20">Shivam20</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/13234/interesting-templates">
                                        <img class="img-full" alt="Interesting Templates"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/13234/interesting-templates">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Interesting Templates</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Gaurav9">





                                <a href="https://www.codester.com/Gaurav9">Gaurav9</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12884/wakaboi">
                                        <img class="img-full" alt="wakaboi"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12884/wakaboi">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">wakaboi</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Hash">





                                <a href="https://www.codester.com/Hash">Hash</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>3 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12728/appsec-xss">
                                        <img class="img-full" alt="[ APPSEC # XSS ]"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12728/appsec-xss">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">[ APPSEC # XSS ]</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">

                                <img src="./Collections _ Codester_files/A_f890ce16848abf9ccb79ad0ff161f2d7.png"
                                    class="profile-avatar-sm" alt="exmi" width="20" height="20">




                                <a href="https://www.codester.com/exmi">exmi</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12679/movie-database">
                                        <img class="img-full" alt="movie database"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12679/movie-database">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">movie database</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="oxlade2020">





                                <a href="https://www.codester.com/oxlade2020">oxlade2020</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12672/ios">
                                        <img class="img-full" alt="IOS "
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12672/ios">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">IOS </h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="olagold50">





                                <a href="https://www.codester.com/olagold50">olagold50</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>17 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12483/">
                                        <img class="img-full" alt="신디코리아"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a href="https://www.codester.com/collections/12483/">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">신디코리아</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="leesan">





                                <a href="https://www.codester.com/leesan">leesan</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>10 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12400/jony">
                                        <img class="img-full" alt="Jony"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12400/jony">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Jony</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Jony14">





                                <a href="https://www.codester.com/Jony14">Jony14</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12360/bhaskara-rao">
                                        <img class="img-full" alt="Bhaskara Rao"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12360/bhaskara-rao">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Bhaskara Rao</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Bhaavya">





                                <a href="https://www.codester.com/Bhaavya">Bhaavya</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12356/bhaskara-rao">
                                        <img class="img-full" alt="Bhaskara Rao"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12356/bhaskara-rao">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Bhaskara Rao</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Bhaavya">





                                <a href="https://www.codester.com/Bhaavya">Bhaavya</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12333/xd">
                                        <img class="img-full" alt="#xD!"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12333/xd">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">#xD!</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">

                                <img src="./Collections _ Codester_files/A_dcadc14763c43136bd8eb863a029b66e.jpg"
                                    class="profile-avatar-sm" alt="laconexion220" width="20" height="20">




                                <a href="https://www.codester.com/laconexion220">laconexion220</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>3 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12295/whatsapp">
                                        <img class="img-full" alt="Whatsapp"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12295/whatsapp">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Whatsapp</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Zuberumarji">





                                <a href="https://www.codester.com/Zuberumarji">Zuberumarji</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12245/video">
                                        <img class="img-full" alt="VIDEO"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12245/video">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">VIDEO</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="apphost">





                                <a href="https://www.codester.com/apphost">apphost</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>8 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12178/medi">
                                        <img class="img-full" alt="medi"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12178/medi">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">medi</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="sarfrajpr">





                                <a href="https://www.codester.com/sarfrajpr">sarfrajpr</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12161/gobir-abdulsamad">
                                        <img class="img-full" alt="GOBIR ABDULSAMAD"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12161/gobir-abdulsamad">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">GOBIR ABDULSAMAD</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="agobir">





                                <a href="https://www.codester.com/agobir">agobir</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>4 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12098/new-tools">
                                        <img class="img-full" alt="New tools"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12098/new-tools">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">New tools</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="oppera7">





                                <a href="https://www.codester.com/oppera7">oppera7</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>3 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12096/new-york">
                                        <img class="img-full" alt="New York "
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12096/new-york">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">New York </h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="oppera7">





                                <a href="https://www.codester.com/oppera7">oppera7</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>3 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/12094/oppera7">
                                        <img class="img-full" alt="Oppera7 "
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/12094/oppera7">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">Oppera7 </h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="oppera7">





                                <a href="https://www.codester.com/oppera7">oppera7</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="panel b-a" style="height:265px;">


                            <div class="">
                                <div class="pos-rlt">





















                                    <a href="https://www.codester.com/collections/11929/damian">
                                        <img class="img-full" alt="damian"
                                            src="./Collections _ Codester_files/default-collection.jpg">

                                    </a>
                                </div>
                            </div>


                            <div class="m-l-sm text-md font-bold"><a
                                    href="https://www.codester.com/collections/11929/damian">
                                    <h2 class="text-md text-ellipsis font-bold m-t-sm">damian</h2>
                                </a>

                            </div>



                            <div class="text-ellipsis m-l-sm">
                                <span class="text-white">No description</span>
                            </div>


                            <div class="m-l-xs m-t-sm m-b-sm text-sm">
                                <img src="./Collections _ Codester_files/default-avatar.png" width="16" height="16"
                                    class="profile-avatar-sm" alt="Damian13">





                                <a href="https://www.codester.com/Damian13">Damian13</a></div>

                            <div class="">
                                <div class="m-l-sm m-b-sm pull-left">
                                    <strong>2 Items</strong>

                                </div>

                                <div class="pull-right m-r-sm">



                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">
                                    <img src="./Collections _ Codester_files/star-off.png" alt="">



                                </div>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
                <div class="text-right m-b-sm">
                    <ul class="pagination pagination-md">
                        <li class="active"><a
                                href="https://www.codester.com/collections+/6/?p=1&amp;sort_by=&amp;order=desc"> 1</a></li>
                        <li><a href="https://www.codester.com/collections/?p=2&amp;sort_by=&amp;order=desc"> 2</a></li>
                        <li><a href="https://www.codester.com/collections/?p=3&amp;sort_by=&amp;order=desc"> 3</a></li>
                        <li><a href="https://www.codester.com/collections/?p=4&amp;sort_by=&amp;order=desc"> 4</a></li>
                        <li><a href="https://www.codester.com/collections/?p=5&amp;sort_by=&amp;order=desc"> 5</a></li>
                        <li><a href="https://www.codester.com/collections/?p=6&amp;sort_by=&amp;order=desc"> 6</a></li>
                        <li><a href="https://www.codester.com/collections/?p=7&amp;sort_by=&amp;order=desc"> 7</a></li>
                        <li><a href="https://www.codester.com/collections/?p=2&amp;sort_by=&amp;order=desc"
                                title="Next page"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>





            </div>


















        </div>
    </div>




</div>

@endsection