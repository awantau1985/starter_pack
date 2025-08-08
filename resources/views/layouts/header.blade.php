<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title> {{config('app.name')}} | Beta V 0.1</title>
  <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/font-awesome.min.css')}}" />

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->

  <link rel="stylesheet" href="{{ asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- datatables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- <link rel="stylesheet" href="{{ asset ('plugins/jqvmap/jqvmap.min.css')}}"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset ('plugins/summernote/summernote-bs4.min.css')}}">
  <script src="{{ asset ('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

  <script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('js/adminlte.js')}}"></script>
  <!-- <script src="{{ asset ('js/online_offline_detection.js')}}"></script> -->
  <style>
    /* Perkecil font dan padding */
    body {
        font-size: 0.9rem;
    }
    .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.85rem;
    }
    .form-control, .form-select {
        padding: 0.25rem 0.5rem;
        font-size: 0.85rem;
    }
    .table {
    font-size: 0.85rem;
    }

    .table th,
    .table td {
        padding: 0.4rem 0.5rem;
    }
    nav.navbar {
        padding-top: 0.3rem;
        padding-bottom: 0.3rem;
    }
</style>
  <style>
    .hide {
  display: none;
}
  </style>
