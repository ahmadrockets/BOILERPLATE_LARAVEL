{!! Form::open(['route' => ['permissions.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('permissions.edit', $id) }}" class='btn btn-success btn-xs'>
        <i class="glyphicon glyphicon-edit"></i> Edit
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Hapus', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
