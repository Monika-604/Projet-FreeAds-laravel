@extends('layouts.user')
@section('content')


    <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post ads</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/brands.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/select2.min.css">
    <link rel="stylesheet" href="../../../public/assets/ads/vendor_assets/css/slick.css">
    <link rel="stylesheet" href="{{('/assets/ads/style.css')}}">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{('/assets/ads/img/fevicon.png')}}">
</head>

<body>
<section class="add-listing-wrapper border-bottom section-bg section-padding-strict">
    <div class="container">

            <form method="POST" action="{{route('ads.update',$model->id)}}"  enctype="multipart/form-data" >
                @method('PUT')
                {{ csrf_field() }}
                <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-user"></span>General Information</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <form action="/">
                            <div class="form-group">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$model->title}}" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-label">Description</label>
                                <textarea name="description" rows="8" class="form-control" value="{{$model->description}}" placeholder="Description"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Price</label>

                                <div class="pricing-option-inputs">
                                    <input type="text" name="price" value="{{$model->price}}" class="form-control" placeholder="Price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ad_category" class="form-label">Select Category</label>
                                <div class="select-basic">
                                    <select class="form-control ad_search_category"  name="category">
                                        <option>Select Category</option>
                                        <option value="1" {{$model->category =="1" ? 'selected': ''}}>Furniture</option>
                                        <option value="2" {{$model->category =="2" ? 'selected': ''}}>Car</option>
                                        <option value="3" {{$model->category =="3" ? 'selected': ''}}>Cell phone</option>
                                        <option value="4" {{$model->category =="4" ? 'selected': ''}}>Building</option>
                                        <option value="5" {{$model->category =="5" ? 'selected': ''}}>Electricity</option>
                                        <option value="6" {{$model->category =="8" ? 'selected': ''}}>&nbsp;&nbsp; Location</option>
                                        <option value="7" {{$model->category =="9" ? 'selected': ''}}>Shopping</option>
                                        <option value="8" {{$model->category =="10" ? 'selected': ''}}>&nbsp;&nbsp; Accessories</option>
                                        <option value="9" {{$model->category =="11" ? 'selected': ''}}>&nbsp;&nbsp; Clothing</option>
                                        <option>Places</option>
                                        <option>Travel</option>

                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                    <!-- part map -->

                            <div class="col-lg-10 offset-lg-1">
                              <!--  <div class="atbd_content_module">
                                    <div class="atbd_content_module__tittle_area">
                                        <div class="atbd_area_title">
                                            <h4><span class="la la-calendar-check-o"></span> Location (Map)</h4>
                                        </div>
                                    </div>
                                    <div class="atbdb_content_module_contents">
                                        <label class="not_empty form-label">Set the Marker by clicking anywhere on the Map</label>
                                        <div class="map" id="map-one"></div>
                                        <div class="cor-wrap form-group">
                                            <div class="contact_map">
                                                <div class="gmap_canvas">
                                                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div>
                                    <input type="text" id="address"  placeholder="Address" name="location"
                                           value="{{$model->location}}" class="form-control controls" maxlength="100" tabindex="6"/>
                                </div>
                                <div class="form-group">
                                    <div id="map-canvas-address"></div>
                                </div>
                            </div>

                                        <!-- end on map -->

            <div class="col-lg-10 offset-lg-1">
                <div class="atbd_content_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-calendar-check-o"></span> Images </h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <div id="_listing_gallery">
                            <div class="add_listing_form_wrapper" id="gallery_upload">
                                <div class="form-group text-center">
                                    <!--  add & remove image links -->
                                    <p class="hide-if-no-js">
                                        <input type="file" name="picture" class="upload-header btn btn-outline-secondary"></input>
                                    </p>
                                </div>
                            </div>
                            <!--ends add_listing_form_wrapper-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="btn_wrap list_submit m-top-25">
                    <button type="submit" class="btn btn-primary btn-lg listing_submit_btn">Submit</button>
                </div>
        </div>
                    </div>
            </form>
    </div>
</section>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
<!-- inject:js-->
<script src="{{asset('assets/ads/vendor_assets/js/jquery/jquery-1.12.3.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/bootstrap/popper.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/jquery.barrating.min.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/ads/vendor_assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="../../../public/assets/ads/vendor_assets/js/masonry.pkgd.min.js"></script>
<script src="../../../public/assets/ads/vendor_assets/js/owl.carousel.min.js"></script>
<script src="../../../public/assets/ads/vendor_assets/js/select2.full.min.js"></script>
<script src="../../../public/assets/ads/vendor_assets/js/slick.min.js"></script>
<script src="../../../public/assets/ads/theme_assets/js/locator.js"></script>
<script src="../../../public/assets/ads/theme_assets/js/main.js"></script>
<script src="../../../public/assets/ads/theme_assets/js/map.js"></script>


<!-- endinject-->

</body>
</html>

@endsection
