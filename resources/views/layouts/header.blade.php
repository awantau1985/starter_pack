<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> {{config('app.name')}} | Beta V 0.1</title>
 
  {{-- refactor path --}}
  <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/fontawesome.min.css')}}" />
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  {{-- end refactor path --}}
 
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
  