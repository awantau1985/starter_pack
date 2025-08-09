<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
    Add User
</button>

<div class="modal fade" id="userModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
            <form id="userForm">
            @csrf
            <div id="alert-error" class="alert alert-danger d-none"></div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username"  required autocomplete="username" >
            
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" >
            
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="role_name" required>
                        <option value="">Select Role</option>
                        @foreach($roles as $rl)
                            <option value="{{$rl->name}}">{{$rl->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="password" >
            
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"  required autocomplete="username" >
            
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Script untuk buka modal jika ada error -->
<script>
    $(document).ready(function() {

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('#userForm').on('submit', function(e) {
        e.preventDefault();
        $('#alert-error').addClass('d-none').html('');

        $.ajax({
            url: '{{route('users.store')}}',
            method: "POST",
            data: $(this).serialize(),
            success: function(res) {
                // alert("User berhasil dibuat!");
                $('#userForm')[0].reset();
                $('#userModal').modal('hide');
                $('#usersTable').DataTable().ajax.reload();
                toastr.success(response.message);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = "<ul>";
                    $.each(errors, function(key, value) {
                        errorHtml += "<li>" + value[0] + "</li>";
                    });
                    errorHtml += "</ul>";
                    $('#alert-error').removeClass('d-none').html(errorHtml);
                }
            }
        });
    });
});

</script>