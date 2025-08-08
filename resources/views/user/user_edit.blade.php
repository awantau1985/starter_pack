<form class="form-horizontal" action="{{ route('users.update',$data->id)}}" method="POST" >
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Username</label>
                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $data->username }}" required autocomplete="username" >
    
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email" readonly>
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
            
    <div class="card-footer">
        <button class="btn btn-success float-right"><i class="fa fa-floppy-o"> Save</i></button>
    </div>
</form>