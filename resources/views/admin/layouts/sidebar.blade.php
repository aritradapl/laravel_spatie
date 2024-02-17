<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
    <div>
        <img src="https://i.imgur.com/GMmCQHC.png" style="height: 80px; width: 200px;" class="w3-round" alt="Norway">
    </div>
    <div class="navi">
        <ul>
            @if(Auth::guard('admin')->user()->hasRole('admin'))
                @if(Auth::guard('admin')->user()->hasPermissionTo('view_home','admin'))
                    <li class="{{ Request::routeIs('admin.home') ? 'active' : '' }}"><a href="{{route('admin.home')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                @endif
                @if(Auth::guard('admin')->user()->hasPermissionTo('view_page1','admin'))
                    <li class="{{ Request::routeIs('admin.page1') ? 'active' : '' }}"><a href="{{route('admin.page1')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Page1</span></a></li>
                @endif
                @if(Auth::guard('admin')->user()->hasPermissionTo('add_employees_role','admin'))
                    <li class="{{ Request::routeIs('admin.employees') ? 'active' : '' }}"><a href="{{route('admin.employees')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Employees</span></a></li>
                @endif
                @if(Auth::guard('admin')->user()->hasPermissionTo('remove_employees_role','admin'))
                    <li class="{{ Request::routeIs('admin.employees.remove.role.view') ? 'active' : '' }}"><a href="{{route('admin.employees.remove.role.view')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Remove Employee Role</span></a></li>
                @endcan
            @endif
            @if(Auth::guard('admin')->user()->hasRole('employee'))
                @if(Auth::guard('admin')->user()->hasPermissionTo('view_home','admin'))
                    <li class="{{ Request::routeIs('admin.home') ? 'active' : '' }}"><a href="{{route('admin.home')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                @endif
                @if(Auth::guard('admin')->user()->hasPermissionTo('view_page1','admin'))
                    <li class="{{ Request::routeIs('admin.page1') ? 'active' : '' }}"><a href="{{route('admin.page1')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Page1</span></a></li>
                @endif
                @if(Auth::guard('admin')->user()->hasPermissionTo('add_employees_role','admin'))
                    <li class="{{ Request::routeIs('admin.employees') ? 'active' : '' }}"><a href="{{route('admin.employees')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Employees</span></a></li>
                @endif
                @if(Auth::guard('admin')->user()->hasPermissionTo('remove_employees_role','admin'))
                    <li class="{{ Request::routeIs('admin.employees.remove.role.view') ? 'active' : '' }}"><a href="{{route('admin.employees.remove.role.view')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Remove Employee Role</span></a></li>
                @endcan
            @endif
            {{-- <li class="{{ Request::routeIs('admin.home') ? 'active' : '' }}"><a href="{{route('admin.home')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
            <li class="{{ Request::routeIs('admin.page1') ? 'active' : '' }}"><a href="{{route('admin.page1')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Page1</span></a></li>
            <li class="{{ Request::routeIs('admin.employees') ? 'active' : '' }}"><a href="{{route('admin.employees')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Employees</span></a></li>
            <li class="{{ Request::routeIs('admin.employees.remove.role.view') ? 'active' : '' }}"><a href="{{route('admin.employees.remove.role.view')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Remove Employee Role</span></a></li> --}}
        </ul>
    </div>
</div>
