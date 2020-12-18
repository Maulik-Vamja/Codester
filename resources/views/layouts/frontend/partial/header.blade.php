<!-- header -->
<header id="header" class="navbar navbar-fixed-top box-shadow affix-top" data-spy="affix" data-offset-top="1">
    <div class="bg-black">
        <div class="container">
            <div class="navbar-header">
                <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a href=" {{ route('home') }} " class="navbar-brand m-r-n m-l-n-md"><img title="Codester"
                        alt="Buy &amp; Sell PHP Scripts, App Templates, Plugins, Themes, Templates and more"
                        src=" {{ asset('assets/frontend/images/logo-dark.png') }}" /></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav m-l-n visible-sm visible-md visible-lg visible-xl">
                    <li>
                        <a href=" {{ route('freefiles') }} ">
                            <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                            <span>Free Files</span>
                        </a>
                    </li>

                    <li>
                        <a href=" {{ route('seller') }} ">
                            <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                            <span>Start selling</span>
                        </a>
                    </li>
                    <li class="visible-md visible-lg visible-xl">
                        <a href=" {{ route('affilate') }} ">
                            <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                            <span>Become an affiliate</span>
                        </a>
                    </li>
                    <li>
                        <a href=" {{ route('forum') }} ">
                            <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                            <span>Forum</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href=" {{ route('collection') }} ">
                            <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                            <span>Collections</span>
                        </a>
                    </li>
                    <li class="visible-lg visible-xl">
                        <a href="https://www.siteground.com/go/webhosting-h" rel="nofollow" target="_blank">
                            <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                            <span>Hosting</span>
                        </a>
                    </li>
                </ul>
                @php
                $categories = App\Category::get()
                @endphp
                <ul class="nav navbar-nav m-l-n visible-xs">
                    @foreach ($categories as $item)
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown" class="dropdown-toggle">
                            <span>{{ $item->name }}</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="">
                                    <span class="font-bold">New Releases</span>
                                </a>
                            </li>

                            <li class="b-b">
                                <a href="">
                                    <span class="font-bold">Most Popular</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>PHP Scripts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ul>
                @if (Auth::check())
                <ul class="nav navbar-nav navbar-right m-r-xs">

                    <li class="dropdown visible-md visible-lg visible-xl">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="icon-envelope  text-lg m-t-xl"></i>
                            <span class="visible-xs-inline">Messages</span>
                        </a>
                        <!-- dropdown -->
                        <div class="dropdown-menu w-xl ">
                            <div class="panel bg-white">
                                <div class="panel-heading b-light bg-light">
                                    You have <span class="font-bold">0</span> new messages </div>
                                <div class="list-group link-bg-light-hover ">
                                    <div class="panel-body text-center text-muted">No messages</div>

                                </div>
                                <div class="panel-footer text-sm">
                                    <a href="/messages/" class="btn btn-default btn-sm btn-block">View all</a>
                                </div>
                            </div>
                        </div>
                        <!-- / dropdown -->
                    </li>

                    <li class="dropdown visible-md visible-lg visible-xl">
                        <a href="#" id="notification-dropdown" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="icon-bell fa-fw text-lg m-t-xl" aria-hidden="true"></i>
                            <span class="visible-xs-inline">Notifications</span>
                        </a>
                        <!-- dropdown -->
                        <div class="dropdown-menu w-xl ">
                            <div class="panel bg-white">
                                <div class="panel-heading b-light bg-light">
                                    You have <span class="font-bold">0</span> new notifications </div>
                                <div id="headerbar-notifications" class="list-group link-bg-light-hover ">


                                    <div class="panel-body text-center text-muted m-t-sm h3"><span class="spinner"><i
                                                class="fa fa-circle-o-notch fa-spin"></i></span></div>
                                </div>
                                <div class="panel-footer text-sm">
                                    <a href="/notifications/" class="btn btn-default btn-sm btn-block">View all</a>
                                </div>
                            </div>
                        </div>
                        <!-- / dropdown -->
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
                            <b class="caret pull-right m-t-sm m-l-xs"></b>
                            <span class="thumb-xs pull-right m-t-n-xs m-b-n-sm ">
                                <img alt="{{ Auth::user()->username }}" class="img-rounded"
                                    title="{{ Auth::user()->username }}"
                                    src="https://www.codester.com/static/img/default-avatar.png" />

                            </span>
                        </a>
                        <!-- dropdown -->
                        <ul class="dropdown-menu w-md ">
                            <li class="wrapper b-b m-b-sm bg-light m-t-n-xs ">
                                <div>
                                    <p>Credit balance: <strong>$0.00</strong></p>
                                </div>
                                <div class="">
                                    <a href="/deposit/" class="btn btn-success font-bold btn-sm w-full">Add Credit</a>
                                </div>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="/maulikvamja/">
                                    <span><i class="fa fa-user m-r-xs "></i> Profile</span>
                                </a>
                            </li>

                            <li>
                                <a href="/edit/">
                                    <span><i class="fa fa-cog  m-r-xs"></i> Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="/download/">
                                    <span><i class="fa  fa-cloud-download m-r-xs"></i> Downloads</span>
                                </a>
                            </li>
                            <li>
                                <a href="/orders/">
                                    <span><i class="fa fa-history m-r-xs"></i> Order history</span>
                                </a>
                            </li>

                            <li>
                                <a href="/user/collections/maulikvamja/">
                                    <span><i class="fa fa-folder-open m-r-xs"></i> Collections</span>
                                </a>
                            </li>
                            <li>

                                <a href="/badges/">
                                    <span><i class="fa fa-trophy m-r-xs"></i> Achievements</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/author_dashboard/">
                                    <span><i class="fa fa-tachometer m-r-xs"></i> Author Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="/my-items/">
                                    <span><i class="fa fa-files-o m-r-xs"></i> Items</span>
                                </a>
                            </li>
                            <li>
                                <a href="/upload/index/">
                                    <span><i class="fa fa-cloud-upload  m-r-xs"></i> Upload</span>
                                </a>
                            </li>
                            <li>
                                <a href="/earnings/">
                                    <span><i class="fa fa-money  m-r-xs"></i> Earnings</span>
                                </a>
                            </li>
                            <li>
                                <a href="/statement/">
                                    <span><i class="fa fa-list  m-r-xs"></i> Statements</span>
                                </a>
                            </li>
                            <li>
                                <a href="/refunds/">
                                    <span><i class="fa fa-undo  m-r-xs"></i> Refund requests</span>
                                </a>
                            </li>
                            <li>
                                <a href="/withdrawal/">
                                    <span><i class="fa fa-caret-square-o-down  m-r-xs"></i> Withdrawal</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <span><i class="fa fa-sign-out m-r-xs"></i> Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        <!-- / dropdown -->
                    </li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right m-r-xs">
                    <li>
                        <div class="m-t-sm">
                            <a href=" {{ route('login') }} " class="btn btn-black btn-sm">Login</a>
                            <a href=" {{ route('register') }} " class="btn btn-sm btn-success m-l-sm">Sign up</a>
                        </div>
                    </li>
                </ul>
                @endif

            </div>
        </div>
    </div>
    @include('layouts.frontend.partial.secondNavbar')
</header>