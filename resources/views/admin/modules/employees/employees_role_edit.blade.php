<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{asset('admin/css/dashboard.css')}}">
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            @include('admin.layouts.sidebar')
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                @include('admin.layouts.header')
                </div>
                <div class="employee-dashboard">
                    <h1>Edit Role and Permission</h1>
                    <form id="" action="{{route('admin.employees.edit.role',$employee->id)}}" method="post">
                        @csrf
                        <div class="form-group col-md-2">
                            <label>Name: </label><br>
                            <p>{{ $employee->name }}</p>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Phone: </label><br>
                            <p>{{ $employee->phone }}</p>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Role:</label><br>
                            <select name="role_id" class="form-control form_input" id="">
                                <option value="" disabled>Select Role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ $employee->roles->contains($role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Permissions:</label><br>
                            @foreach($permissions as $permission)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" {{ $employee->permissions->contains($permission->id) ? 'checked' : '' }}> {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').click(function(){
           $("#navigation").toggleClass("hidden-xs");
        });
    });
</script>
