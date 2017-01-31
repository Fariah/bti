<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset("/assets/css/datatables.min.css")}}" rel="stylesheet" type="text/css" />

    {{--<link href="{{ asset("/assets/css/bootstrap-modal.css")}}" rel="stylesheet" type="text/css" />--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @include('admin/header')

            <!-- Sidebar -->
    @include('admin/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin/content-header')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('admin/footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/assets/js/datatables.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

<script src="{{ asset('/assets/js/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" ></script>
<script src="{{ asset('/assets/js/bootstrap-confirmation.min.js') }}" type="text/javascript" charset="utf-8" ></script>

<script src="{{ asset ("/js/admin.js") }}" type="text/javascript"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
@yield('scripts')
</body>
</html>