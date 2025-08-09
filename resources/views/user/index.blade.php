@extends('layouts.master_page')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0">Users</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                <div class="card-header">
                    @include('user.modals_add_user')
                </div>
                <div class="card-body">
                    {{-- start table --}}
                    @include('user.user_table')
                    {{-- end table --}}
                </div>
            </div>
        </div>
        @include('user.modals_edit_user')
    </section>

</div>
@endsection
@push('myScript')
<script>
$(document).ready(function() {
    let table = $('#usersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
                // url: '/user-list',
                url: '{{route('user.list')}}',
                dataSrc: function(json) {
                    console.log("Data diterima dari server:", json.data); // debug di browser
                    return json.data;
                }
            },
        columns: [
            { data: 'username', name: 'username' },
            { data: 'email', name: 'email' },
            { data: 'roles', name: 'roles' , orderable: false, searchable: false },
            { data: 'status', name: 'status'},
            { data: 'created_at', name: 'created_at'},
            { data: 'action', name: 'action', orderable: false, searchable: false } 
        ]
    });

    // Action delete
    $(document).on('click', '.delete-btn', function() {
        console.log("here")
        let userId = $(this).data('id');
        if (confirm('Yakin ingin menghapus data ini?')) {
            $.ajax({
                url: "/users/" + userId,
                type: "DELETE",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    alert(res.message);
                    table.ajax.reload(); // refresh datatable tanpa reload page
                },
                error: function(err) {
                    console.log(err.responseText);
                }
            });
        }
    });

    // Action Edit
    $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');

        $.get(`/users/${id}/edit`, function (data) {
            $('#editUserId').val(data.id);
            console.log(data.id)
            $('#editName').val(data.name);
            $('#editEmail').val(data.email);
            $('#editStatus').val(data.is_status);
            $('#editRole').val(data.roles).trigger('change');
            console.log(data.roles);
            $('#editUserModal').modal('show');
        });
    });
});
</script>
@endpush