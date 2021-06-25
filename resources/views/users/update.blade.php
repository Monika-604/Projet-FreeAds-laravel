@extends('layouts.user')
@section('content')

    <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Direo Template</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="vendor_assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="vendor_assets/css/brands.css">
    <link rel="stylesheet" href="vendor_assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="vendor_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="vendor_assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="vendor_assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="vendor_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="vendor_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor_assets/css/select2.min.css">
    <link rel="stylesheet" href="vendor_assets/css/slick.css">
    <link rel="stylesheet" href="{{('/assets/ads/style.css')}}">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{('/assets/ads/img/fevicon.png')}}">
</head>

<body>
<section class="header-breadcrumb bgimage overlay overlay--dark">

    <div class="breadcrumb-wrapper content_above">
        <div class="container">
            <div class="row">
                </div>
            </div>
    </div>
</section>
<section class="dashboard-wrapper section-bg p-bottom-70">
    <div class="dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-nav-area">
                        <ul class="nav" id="dashboard-tabs" >

                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab"  href="#profile" role="tab" aria-controls="profile" aria-selected="true">My Profile</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: .dashboard-nav -->
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-8">
                    <div class="atbd_author_module">
                        <div class="atbd_content_module">
                            <div class="atbd_content_module__tittle_area">
                                <div class="atbd_area_title">
                                    <h4><span class="la la-user"></span>My Profile</h4>
                                </div>
                            </div>
                            <div class="atbdb_content_module_contents">
                                <form method="POST" action="{{route('user.update',$user->id)}}"  class="form-horizontal style-form" enctype="multipart/form-data" >
                                    @method('PUT')
                                    {{ csrf_field() }}
                                <div class="user_info_wrap">
                                    <!--Full name-->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user_name" class="not_empty">Name</label>
                                                <input class="form-control"  name="name" placeholder="Name" type="text" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name" class="not_empty">Nickname</label>
                                                <input class="form-control" id="first_name" type="text" name="nickname" placeholder="Nickname" value="{{$user->nickname}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name" class="not_empty">Phone_number</label>
                                                <input class="form-control" id="last_name" name="phone_number" type="text" placeholder="Phone_number" value="{{$user->phone_number}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="req_email" class="not_empty">Email</label>
                                                <input class="form-control" id="req_email"  name="email" type="text" placeholder="mail@example.com" required="" value="{{$user->eamil}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone" class="not_empty">Password</label>
                                                <input class="form-control" type="password" placeholder="Password" id="phone" name="password" value="{{$user->password}}">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary" id="update_user_profile">Save Changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
<!-- inject:js-->
<script src="vendor_assets/js/jquery/jquery-1.12.3.js"></script>
<script src="vendor_assets/js/bootstrap/popper.js"></script>
<script src="vendor_assets/js/bootstrap/bootstrap.min.js"></script>
<script src="vendor_assets/js/jquery-ui.min.js"></script>
<script src="vendor_assets/js/jquery.barrating.min.js"></script>
<script src="vendor_assets/js/jquery.counterup.min.js"></script>
<script src="vendor_assets/js/jquery.magnific-popup.min.js"></script>
<script src="vendor_assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="vendor_assets/js/jquery.waypoints.min.js"></script>
<script src="vendor_assets/js/masonry.pkgd.min.js"></script>
<script src="vendor_assets/js/owl.carousel.min.js"></script>
<script src="vendor_assets/js/select2.full.min.js"></script>
<script src="vendor_assets/js/slick.min.js"></script>
<script src="theme_assets/js/locator.js"></script>
<script src="theme_assets/js/main.js"></script>
<script src="theme_assets/js/map.js"></script>
<!-- endinject-->
</body>

</html>


@endsection





