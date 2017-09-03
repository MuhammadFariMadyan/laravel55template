<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon_1.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Chart C3 --}}
    <link href="{{ url('/') }}/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

    <!-- DataTables -->
    <link href="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- DatePicker -->
    <link href="{{ url('/') }}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ url('/') }}/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

		<link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ url('/') }}/assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

      <!-- Top Bar Start -->
      @include('layouts.admin.partials._topbar')
      <!-- Top Bar End -->


      <!-- ========== Left Sidebar Start ========== -->
      @include('layouts.admin.partials._sidebar')
      <!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					@yield('content')
        </div> <!-- content -->

          <footer class="footer">
              © 2017. All rights reserved.
          </footer>

      </div>
      <!-- ============================================================== -->
      <!-- End Right content here -->
      <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/js/detect.js"></script>
    <script src="{{ url('/') }}/assets/js/fastclick.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ url('/') }}/assets/js/waves.js"></script>
    <script src="{{ url('/') }}/assets/js/wow.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.scrollTo.min.js"></script>


    <script src="{{ url('/') }}/assets/js/jquery.core.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery.app.js"></script>

    <!--C3 Chart-->
    <script type="text/javascript" src="{{ url('/') }}/assets/plugins/d3/d3.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/plugins/c3/c3.min.js"></script>
    <script src="{{ url('/') }}/assets/pages/jquery.c3-chart.init.js"></script>

    {{-- Datatables --}}
    <script src="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="{{ url('/') }}/assets/pages/datatables.init.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
        });
    </script>

    <!-- Datepicker -->
    <script src="{{ url('/') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function() {
                  
        // Date Picker
        jQuery('#datepicker').datepicker({
          format: "yyyy-mm-dd"
        });
        jQuery('#datepicker-autoclose').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: "yyyy-mm-dd"
        });
        jQuery('#datepicker-inline').datepicker();
        jQuery('#datepicker-multiple-date').datepicker({
          format: "mm/dd/yyyy",
          clearBtn: true,
          multidate: true,
          multidateSeparator: ","
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        
      });
    </script>

    {{-- Sweet-Alert 2 --}}
    <script src="{{ url('/') }}/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="{{ url('/') }}/assets/pages/jquery.sweet-alert2.init.js"></script>
    
	
	</body>
</html>
