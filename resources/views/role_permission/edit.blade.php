@extends('layouts.master_page')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Roles</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                            </ol>
                        </div><!-- /.col -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      @include('alert.toast')
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    {{-- start table --}}
                    @include('role_permission.role_edit')
                    {{-- end table --}}
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
@push('myScript')

@endpush