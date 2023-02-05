@extends("layouts.base")
@section("login")

    <style>
        .img1{}
        .img1:hover{transform: rotate(50deg);}

    </style>
    <div class="container-fluid" style="min-height: 350px;">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2" data-aos="fade-right"><img src="photo/login.png" alt="" class="img1 hvr hvr-pop"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5" style="margin-top: 20px;" data-aos="fade-left">
                <h1><u>Login</u> Here..</h1>
                <form action="/ALogin" method="post">
                    @csrf
                    <select class="form-control" name="type">
                        <option selected disabled>select Type</option>
                        <option>admin</option>
                        <option>Student</option>
                    </select>

                    <label>User Id/Email :</label>
                    <input type="email" placeholder="Enter your user id/email.." class="form-control" name="userid"><br>

                    <label>Password :</label>
                     <i class="fa fa-key"></i>
                    <input type="password" name="passwd" placeholder="Enter your password.." class="form-control"name="passwd">
                <br>
                    <button class="btn btn-success">Login</button>&nbsp;<a href="/newreg";<button class="btn btn-success">SinUp</button></a> &nbsp;&nbsp;<a href="/forget">Forget Password?</a></form>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
