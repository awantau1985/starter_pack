<form class="form-horizontal" action="{{ route('roles.update',$role->id)}}" method="POST" >
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Roles</label>
                <input id="role_name" type="text" class="form-control @error('role_name') is-invalid @enderror" name="role_name" value="{{ $role->name }}" required autocomplete="role" readonly>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    {{-- permission --}}
    <label for="">Permission</label>
    <div class="row">
        @foreach($permission as $per)
        <div class="col-md-3 pt-2">
            <div class="icheck-primary d-inline">
                <input type="checkbox" id="{{$per->name}}" name="permission_id[]" value="{{$per->id}}" 
                {{ in_array($per->id, $role_permission) ? 'checked' : '' }}>
                <label for="{{$per->name}}">{{$per->name}}
                </label>
            </div>
        </div>
        @endforeach
    </div>
    {{-- end permission --}}
    <div class="card-footer mt-2">
        <button class="btn btn-success float-right"><i class="fa fa-floppy-o"> Save</i></button>
    </div>
</form>




