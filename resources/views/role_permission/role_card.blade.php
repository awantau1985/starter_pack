@foreach($role as $rl)
<div class="col-md-2">
    <a href="{{route('roles.edit',$rl->id)}}">
        <div class="card">
            <div class="card-body">
                {{$rl->name}}
            </div>
        </div>
    </a>
</div>
@endforeach