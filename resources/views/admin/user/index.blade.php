@extends('layouts.admin.admin-master')
@section('content')
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="../index.blade.php" class="logo"><b>Panel<span>User</span></b></a>
      <!--logo end-->

        <!--  notification end -->

    </header>
    <!--header end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> User Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>Email</th>
                    <th><i class="fa fa-bookmark"></i>Price</th>
                    <th><i class=" fa fa-edit"></i>Number</th>
                      <th><i class=" fa fa-edit"></i> Category</th>
                      <th><i class=" fa fa-edit"></i> Function</th>
                      <th><i class=" fa fa-edit"></i> Location</th>
                    <th></th>
                  </tr>
                </thead>
                @foreach($user as $user)
                  <tr>
                    <td><a href="index.blade.php#">{{$user->name}}</a></td>
                    <td class="hidden-phone">{{$user->email}}</td>
                    <td>{{$user->price}}$</td>
                      <td>{{$user->phone_number}}</td>
                      <td>{{$user->category}}</td>
                      <td>
                          <div class="dropup edit_listing">
                              <a href="{{url('admin/useres'.'/'.$user->id.'/edit')}}"  class="btn btn-sm btn-outline-secondary">Edit</a>
                              <form action="{{route('useres.destroy',$user->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="directory_remove_btn btn btn-sm btn-outline-danger" >Delete</button>
                              </form>
                      </td>

                      <td>
                          {{$user->location}}
                      </td>
                  </tr>
                @endforeach

                </body>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
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
