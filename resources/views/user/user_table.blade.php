<table id="tableUser" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>User Role</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dt)
        <tr>
            <td><a href="{{route('users.edit',$dt->id)}}">{{$dt->username}}</a></td>
            <td>{{$dt->email}}</td>
            <td>@if(!empty($dt->getRoleNames()))
                @foreach($dt->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
            </td>
            <td></td>
            <td>{{$dt->created_at}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>