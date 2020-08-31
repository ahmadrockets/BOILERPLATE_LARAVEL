@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Set Role User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-md-6">
                        <form action="{{ route('users.saverole', $user->id) }}" method="post">
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
                                            <th>Nama</th>
                                            <td>:</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td><a href="#">{{ $user->email }}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Role</th>
                                            <td>:</td>
                                            <td>
                                                @php $no = 1; @endphp
                                                @foreach ($roles as $row)
                                                    <input type="checkbox" 
                                                        name="role[]" 
                                                        class="minimal-red" 
                                                        value="{{ $row->name }}"
                                                        {{--  CHECK, JIKA ROLE TERSEBUT SUDAH DI SET, MAKA CHECKED --}}
                                                        {{ $user->hasRole($row->name) ? 'checked':'' }}
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
                                       <i class="fa fa-save"></i> Set Role
                                    </button>
                                    <a href="{!! route('users.index') !!}" class="btn btn-default">Batal</a>
                                </div>
                        </form>
                    </div>
               </div>
           </div>
       </div>
   </div>
@endsection