@role('admin')
<li class="treeview">
    <a href="#">
        <i class="fa fa-cog"></i>
        <span>Manajemen User</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
        </li>
        <li class="{{ Request::is('roles*') ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
        </li>
        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{{ route('permissions.index') }}"><i class="fa fa-edit"></i><span>Permissions</span></a>
        </li>            
    </ul>
</li>
@endrole

