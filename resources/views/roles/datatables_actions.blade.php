{!! Form::open(['route' => ['roles.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
     <a href="{{ route('roles.setpermission', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-user"></i> Set Permissions
    </a>
    <a href="{{ route('roles.edit', $id) }}" class='btn btn-success btn-xs'>
        <i class="glyphicon glyphicon-edit"></i> Edit
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Hapus', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
