<div class="table-responsive table-bordered">
    <table class="table" id="users-table">
        <thead>
        <tr>
            <th width="10">No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="200">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; ?>
        @foreach($users as $user)
            <tr>
                <td>{!! $no++ !!}</td>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email !!}</td>
                <td>
                     @foreach ($user->getRoleNames() as $role)
                    <label for="" class="badge badge-info">{{ $role }}</label>
                    @endforeach
                </td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('users.setrole', [$user->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-user"></i> Set Role</a>
                        <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-success btn-xs'><i
                                class="glyphicon glyphicon-edit"></i> Edit</a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Hapus', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
