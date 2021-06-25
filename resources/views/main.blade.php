@extends('layouts.user')
@section('content')

    <div class="header_content bg_cover" style="background-image: url(assets/images/hero.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title"></h3>
                    </div>
                </div>
            </div>
            <div class="header_search">
                <form method="get">
                    <div class="search_wrapper d-flex flex-wrap">
                        <div class="search_column d-flex ">
                            <div class="search_form mt-15">
                                <input type="text" placeholder="Location" name="location">
                            </div>
                            <div class="search_select mt-15">
                                <select  name="category" >
                                    <option value="">Select Category</option>
                                    <option value="1">Furniture</option>
                                    <option value="2">Car</option>
                                    <option value="2">Cell phone</option>
                                    <option value="4">Building</option>
                                    <option value="5">Electricity</option>
                                    <option value="6">Location</option>
                                    <option value="7">Accessory</option>
                                    <option value="8">Clothing</option>
                                </select>
                                <i class="fas fa-tag"></i>
                            </div>
                        </div>
                        <div class="search_column d-flex flex-wrap">
                            <div class="search_form mt-15">
                                <input type="text" placeholder="Type Your Keyword" name="title">
                            </div>
                            <div class="search_btn mt-15">
                                <button class="main-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--====== CATEGORY PART ENDS ======-->
    <!--====== ADS PART START ======-->

    <section class="ads_area pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ads_tabs d-sm-flex align-items-end justify-content-between pb-30">
                        <div class="section_title mt-45">
                            <h1 class="text-lg title">Ads</h1>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ads_tabs">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                        <div class="row">
                            @foreach($ads as $ads)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_ads_card mt-30">
                                    <div class="ads_card_image">
                                        <img src="{{url('upload').'/'.$ads->picture}}" alt="ads">
                                    </div>
                                    <div class="ads_card_content">
                                        <div class="meta d-flex justify-content-between">
                                        </div>
                                        <h3 class="title"><a href="product-details.html">{{$ads->title}}</a></h3>
                                        <p><i class="far fa-map"></i>{{$ads->location}}</p>
                                       <div class="ads_price_date justify-content-between">
                                            <div class="description">{{$ads->description}}</div>
                                           <div class="price">{{$ads->price}}$</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    <!--====== ADS PART ENDS ======-->
