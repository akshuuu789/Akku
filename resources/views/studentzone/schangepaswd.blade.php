@extends("layouts.StudentLayout")
@section("schangepaswd")
    <div class="container-fluid">
        <div class="row">
            <h3><b>Change Password...</b></h3>
            <br><br>
            <div class="col-sm-12"></div>
            <div class="col-sm-4" style=""></div>
            <div class="col-sm-4" style="">
                <form action="/sschangepass" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <label> Old Password :</label>
                    <input type="password" name="opass" placeholder="Enter your Old password.." class="form-control" required>
                    <label> New Password :</label>
                    <input type="password" name="npass" placeholder="Enter your New password.." class="form-control"></textarea>
                    <label>  Conform Password :</label>
                    <input type="password" name="cpass" placeholder="Enter your Conform password.." class="form-control"><br>
                    <button class="btn btn-success" type="submit">SUBMIT</button><br/><br>
                </form>
            </div>
            <div class="col-sm-4" style=""></div>
        </div>
    </div>
@endsection
