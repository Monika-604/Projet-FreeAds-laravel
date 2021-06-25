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
                        <ul class="nav" id="dashboard-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-listings" data-toggle="tab" href="#listings"
                                   role="tab" aria-controls="listings" aria-selected="true">My Listings</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: .dashboard-nav -->
    <div class="tab-content p-top-100" id="dashboard-tabs-content">
        <div class="container">
            <div class="row">
                @foreach($ads as $ads)
                    <div class="col-lg-4 col-sm-6">
                        <div class="atbd_single_listing atbd_listing_card">
                            <article class="atbd_single_listing_wrapper ">
                                <figure class="atbd_listing_thumbnail_area">
                                    <div class="atbd_listing_image">
                                        <a href=""><img src="{{url('upload').'/'.$ads->picture}}"
                                                        alt="listing image"></a>
                                    </div>
                                </figure>
                                <div class="atbd_listing_info">
                                    <div class="atbd_content_upper">
                                        <div class="atbd_dashboard_tittle_metas">
                                            <h4 class="atbd_listing_title">
                                                <a href="">{{$ads->description}}</a>
                                            </h4>
                                        </div>
                                        <div class="atbd_card_action">
                                            <div class="atbd_listing_meta">
                                                <span class="atbd_meta atbd_listing_rating">{{$ads->price}}$<i
                                                            class="la la-star"></i></span>
                                            </div>
                                            <div class="db_btn_area">
                                                <div class="dropup edit_listing">
                                                    <a href="{{url('ads'.'/'.$ads->id.'/edit')}}"
                                                       class="btn btn-sm btn-outline-secondary" style="float: right; margin-left: 10px">Edit</a>
                                                    <form action="{{route('ads.destroy',$ads->id)}}" method="POST"  style="float: right">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="directory_remove_btn btn btn-sm btn-outline-danger">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                                <!--ends-->
                                            </div>
                                        </div>
                                        <div class="atbd_listing_bottom_content">
                                            <div class="listing-meta">
                                                <p><span>Title:</span> {{$ads->title}}</p>

                                                <p><span>Category:</span>
                                                    @if($ads->category==1)
                                                        Furniture
                                                    @elseif($ads->category==2)
                                                        Car
                                                    @elseif($ads->category==3)
                                                        Cell phone
                                                    @elseif($ads->category==4)
                                                        Building
                                                    @elseif($ads->category==5)
                                                        Electricity
                                                    @elseif($ads->category==6)
                                                        Location
                                                    @elseif($ads->category==7)
                                                        Accessory
                                                    @elseif($ads->category==8)
                                                        Clothing
                                                    @endif
                                                </p>
                                                <p><span>Location</span>{{$ads->location}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- ends: .tab-pane -->
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





