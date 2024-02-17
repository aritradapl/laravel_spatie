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
                <div class="user-dashboard">
                    <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                        <h1 class="card-title">Employee List</h1>
                        </div>
                        <div class="card-body">
                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if($employees->count()>0)
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>
                                                {{$employee->name}}
                                            </td>
                                            <td>
                                                {{$employee->phone}}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.employees.remove.role.view',$employee->id)}}">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        </div>
                        <div class="card-footer text-muted">
                        <button id="addButton" class="btn btn-primary">Add Entry</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<!-- Your custom script -->
<script>
  $(document).ready(function() {
    // Initialize DataTable
    $('#dataTable').DataTable();

    // Add button click event
    $('#addButton').on('click', function() {
      // Implement your logic to add new entry
      // For example, you can show a modal or navigate to a new page
      console.log('Add button clicked');
    });
  });
</script>
</body>
</html>
