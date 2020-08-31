@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Set Permission Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-md-6">
                        <form action="{{ route('roles.savepermission', $id) }}" method="post">
                            @csrf
                            
                            @if (session('success'))
                                @alert(['type' => 'success'])
                                    {{ session('success') }}
                                @endalert
                            @endif
                            
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="150">Role</th>
                                            <td width="10">:</td>
                                            <td>{{ $role->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Guard Name</th>
                                            <td>:</td>
                                            <td>{{ $role->guard_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Permissions</th>
                                            <td>:</td>
                                            <td>
                                                @php $no = 1; @endphp
                                                @foreach ($permissions as $row)
                                                    <input type="checkbox" 
                                                        name="permission[]" 
                                                        class="minimal-red" 
                                                        value="{{ $row->name }}"
                                                        {{--  CHECK, JIKA PERMISSION TERSEBUT SUDAH DI SET, MAKA CHECKED --}}
                                                        {{ in_array($row->name, $hasPermission) ? 'checked':'' }}
                                                        > {{ $row->name }} <br>
                                                    @if ($no++%4 == 0)
                                                    <br>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm float-right">
                                       <i class="fa fa-save"></i> Set Permission
                                    </button>
                                    <a href="{!! route('roles.index') !!}" class="btn btn-default">Batal</a>
                                </div>
                        </form>
                    </div>
               </div>
           </div>
       </div>
   </div>
@endsection