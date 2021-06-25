
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Home | Publish-site</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{('/assets/images/favicon.png')}}" type="image/png">

    <!--====== Nice Select CSS ======-->
    <link rel="stylesheet" href="{{('/assets/css/nice-select.css')}}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{('/assets/css/fontawesome/css/all.css')}}">

    <!--====== Font myfont CSS ======-->
    <link rel="stylesheet" href="{{('/assets/myfont/styles.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{('/assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{('/assets/css/style.css')}}">

    </head>
<!--====== HEADER PART START ======-->
<body>
<header class="header_area">

    <div class="header_navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                   <!-- <img src="assets/images/logo.png" alt="logo"> -->
                    <h5>MVC_Free_Ads</h5>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="fasse" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li>
                            <a class="active" href="{{url('/')}}">Home <span class="line"></span></a>
                        </li>

                        <li><a href="{{url('/contact')}}">Contact <span class="line"></span></a></li>
                    </ul>
                </div>

                <div class="navbar_btn">
                    <ul>

                    @guest
                        <li><a class="sign-up" href="{{url('/login')}}">Login</a></li>
                        @else
                            <li><a class="sign-up" href="{{url('/ads/create')}}">Post ads</a></li>
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="fasse">{{ Auth::user()->name }}</a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <ul>

                                            <li><a href="{{url('/ads')}}"><i class="fas fa-layer-group"></i> My Ads</a></li>
                                            <?php

                                            $id=\Illuminate\Support\Facades\Auth::user()->id;
                                            $user=\App\Models\User::find($id);

                                            ?>
                                            <li><a href="{{url('/user').'/'.$user->id.'/edit'}}"><i class="fas fa-layer-group"></i> My Profile</a></li>

                                            <li>
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Sign Out<i class="fas fa-sign-out"></i>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>


                                                    </a>
                                                   </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--====== HEADER PART ENDS ======-->


        @yield('content')


<!--====== FOOTER PART START ======-->
<footer>
    <div class="footer_copyright mt-5 pt-15 pb-30">
        <div class="container">
            <div class="footer_copyright_wrapper text-center d-sm-flex justify-content-between align-items-center">
                <div class="copyright mt-15">
                    <ul class="link d-flex">
                        <li class="m-2"><a href="#">Home</a></li>
                        <li class="m-2"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--====== FOOTER PART ENDS ======-->


<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Nice Select js ======-->
<script src="assets/js/jquery.nice-select.min.js"></script>

<!--====== Counter Up js ======-->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

<!--====== Price Range js ======-->
<script src="assets/js/ion.rangeSlider.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="assets/js/ajax-contact.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>


</body>
</html>
