<link rel="stylesheet" href="{{asset('admin/auth/css/index.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h5 class="text-center mb-4"><u><b>Admin Registration</u></b></h5>
            <form class="form-card" action="{{route('admin.register.post')}}" method="post">
                {{ csrf_field() }}
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="" > </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" > </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone No<span class="text-danger"> *</span></label> <input type="phone" id="phone" name="phone" placeholder="" > </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> <input type="password" id="password" name="password" placeholder="" > </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">Confirm Password<span class="text-danger"> *</span></label> <input type="password" id="cpassword" name="cpassword" placeholder="" > </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-6 flex-column d-flex">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                </div>
                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> 
                        <button type="submit" class="btn-block btn-primary">SIGN UP</button> 
                        <p>Dont Have Any Account?<a href="{{route('admin.login')}}">SIGN IN</a></p> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>