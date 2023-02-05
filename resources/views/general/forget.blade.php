@extends("layouts.base")
@section("forget")

    <script>
function pass() {
document.getElementById("f1").style.display="block";
}
    </script>
    <div class="container-fluid">
        <div class="row">
            <h2><b>Forget Password..</b></h2>
            <br><br>

            <div class="col-sm-4" style=""></div>
            <div class="col-sm-4" style="">
                <form action="" method="" enctype="multipart/form-data" role="form">
                    @csrf
                    <label> User Id :</label>
                    <input type="text" name="usear"   placeholder="Enter your user id.."   class="form-control" required><br/>


                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <span>Send OTP</span>
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <h3>Enter OTP</h3>

                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                       <input type="number" class="form-control" placeholder="Enter your OTP" required><br/>
                                        <button class="btn btn-success"style="margin-left: 510px" id="n1" onclick="pass()">Next</button><br/>
                                        <div style="display: none;" id="f1">
                                            <label> New Password :</label>
                                            <input type="password" name="npass" placeholder="Enter your New password.." class="form-control"></textarea>
                                            <label>  Conform Password :</label>
                                            <input type="password" name="cpass" placeholder="Enter your Conform password.." class="form-control"><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Change Password</button>
                                        </form>
                                </div>
                            </div>
    </div>
    </div>
    </div>
    </div>

@endsection
