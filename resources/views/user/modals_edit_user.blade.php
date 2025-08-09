<!-- Modal Edit -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editUserForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" id="editUserId">

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" id="editName">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="editEmail">
                    </div>

                    <div class="mb-3">
                        <label>Status</label>
                        <select name="is_status" id="editStatus" class="form-control">
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>User Role</label>
                        <select id="editRoles" name="roles" class="form-control">
                            @foreach($roles as $role) <!-- $roles = Role::all() passed from view -->
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btnUpdate">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
$(document).on('submit', '#editUserForm', function(e) {
    e.preventDefault();

    let id = $('#editUserId').val(); // hidden input ID user
    let formData = $(this).serialize();

    $.ajax({
        url: "/users/" + id,
        type: "PUT",
        data: formData,
        dataType: "json",
        beforeSend: function() {
            $('#btnUpdate').prop('disabled', true).text('Updating...');
        },
        success: function(response) {
            if (response.success) {
                $('#editUserModal').modal('hide');
                $('#editUserForm')[0].reset();
                $('#usersTable').DataTable().ajax.reload();
                toastr.success(response.message);
            } else {
                toastr.error(response.message);
            }
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(key, value) {
                    toastr.error(value[0]);
                });
            } else {
                toastr.error("Terjadi kesalahan saat mengupdate data.");
            }
        },
        complete: function() {
            $('#btnUpdate').prop('disabled', false).text('Update');
        }
    });
});
</script>