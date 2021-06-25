<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title> Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href="{{('/assets/Admin/img/favicon.png')}}" rel="icon">
    <link href="{{('/assets/Admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{('/assets/Admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{('/assets/Admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{('/assets/Admin/lib/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{('/assets/Admin/lib/bootstrap-daterangepicker/daterangepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{('/assets/Admin/lib/bootstrap-timepicker/compiled/timepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{('/assets/Admin/lib/bootstrap-datetimepicker/datertimepicker.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{('/assets/Admin/css/style.css')}}" rel="stylesheet">
    <link href="{{('/assets/Admin/css/style-responsive.css')}}" rel="stylesheet">


</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    @include('layouts.admin.header')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
  @include('layouts.admin.sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

@yield('content')



</section>


<!-- js placed at the end of the document so the pages load faster -->
<script src="{{('/assets/Admin/lib/jquery/jquery.min.js')}}"></script>
<script src="{{('/assets/Admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{('/assets/Admin/lib/jquery.dcjqaccordion.2.7.js')}}></script>
<script src="{{('/assets/Admin/lib/jquery.scrollTo.min.js')}}" > </script>
<script src="{{('/assets/Admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--common script for all pages-->
<script src="{{('/assets/Admin/lib/common-scripts.js')}}"></script>
<!--script for this page-->
<script src="{{('/assets/Admin/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script type="text/javascript" src="{{('/assets/Admin/lib/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
<script type="text/javascript" src="{{('/assets/Admin/lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{('/assets/Admin/lib/bootstrap-daterangepicker/date.js')}}"></script>
<script type="text/javascript" src="{{('/assets/Admin/lib/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{('/assets/Admin/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{('/assets/Admin/lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{('/assets/Admin/lib/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script src="{{('/assets/Admin/lib/advanced-form-components.js')}}"></script>



</body>

</html>
