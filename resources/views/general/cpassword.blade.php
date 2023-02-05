@extends("layouts.base")
@section("forget")

    <div class="container-fluid" style="min-height: 350px;">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5" style="margin-top: 20px;" data-aos="fade-left">
                <h1><u>Change</u> Password</h1>
                <form action="schangepass" method="post">
                    <label>Old Password :</label>
                    <input type="password" placeholder="Old password" class="form-control" ><br>

                    <label>New Password :</label>

                    <input  type="password" placeholder="New password.." class="form-control">
                    <br>
                    <label>Conform New Password :</label>

                    <input  type="password" placeholder="Conform new password.." class="form-control">
                    <br>
                    <button class="btn btn-success">Conform</button>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection
