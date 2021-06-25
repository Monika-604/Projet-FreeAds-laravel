@extends('layouts.admin.admin-master')
@section('content')

    <section id="container">

        <section id="main-content">
            <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Advanced Form Components</h3>
            <div class="row mt">
                <!--  DATE PICKERS -->
                <div class="col-lg-12">
                    <div class="form-panel">

                        <form method="POST" action="{{route('adses.update',$model->id)}}"  class="form-horizontal style-form" enctype="multipart/form-data" >
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-3">Title</label>
                                <div class="col-md-3 col-xs-11">
                                    <input class="form-control form-control-inline input-medium default-date-picker" name="title" value="{{$model->title}}" size="16" type="text" >

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">description</label>
                                <div class="col-md-3 col-xs-11">
                                    <input class="form-control form-control-inline input-medium default-date-picker" name="description" value="{{$model->description}}" size="16" type="text" >

                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">price</label>
                                    <div class="col-md-3 col-xs-11">
                                        <input class="form-control form-control-inline input-medium default-date-picker" name="price" value="{{$model->price}}" size="16" type="text" >

                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">category</label>
                                <div class="col-md-3 col-xs-11">
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

                            <div class="form-group">
                                <label class="control-label col-md-3">location</label>
                                <div class="col-md-3 col-xs-11">
                                    <input class="form-control form-control-inline input-medium default-date-picker" name="location" value="{{$model->location}}" size="16" type="text" >

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">picture</label>
                                <div class="col-md-3 col-xs-11">

                                        <input type="file" name="picture" class="default">

                                </div>
                            </div>
                            <button type="submit" class="btn btn-theme"> update</button>
                        </form>
                    </div>

                </div>

        </section>
    </section>

@endsection



<script src="lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="lib/sparkline-chart.js"></script>
<script src="lib/zabuto_calendar.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashio!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: 'img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
