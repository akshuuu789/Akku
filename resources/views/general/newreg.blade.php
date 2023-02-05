@extends("layouts.base")
@section("newreg")
<script>
    function myFunction() {
        var x = document.getElementById("sh");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script>
    //this will be the function that will compare any two different string values
    function comparePassword(show1, show2) {
        if (show1 != show2) {
            $(".divDoPasswordsMatch").html("Passwords do not match!").css("color","red");
        }
        else {
            $(".divDoPasswordsMatch").html("Passwords match !.").css("color","green");
        }
    }
    $(document).ready(function(){
            $(".show1, .show2").keyup(function(){
                comparePassword($(".show1").val(), $(".show2").val());
            });
        }
    );
</script>
    <div class="container-fluid">
        <div class="row">
            <h1><center>Registration Here..</center></h1><hr/>
            <div class="col-sm-2"></div>
            <div class="col-sm-4" style="">
                <form action="/reg" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <label> Name :</label>
                    <input type="text" name="name" placeholder="Enter your name.." class="form-control" required>

                    <label> Date Of Birth :</label>
                    <input type="date" name="dob" class="form-control">
                    <label> Email :</label>
                    <input type="email" name="email" placeholder="Enter your email.." class="form-control">
                    <label>  Profile :</label>
                    <input type="file" name="profile" class="form-control">
                    <label>Aadhar Card :</label>
                    <input type="text" name="aadhar" class="form-control" placeholder="Enter your correct Aadhar no..">
                    <label> Mobile Number :</label>
                    <input type="number" id="t1" name="mob" placeholder="Enter your mobile no.." class="form-control">
                    <label> State :</label>
                    <input type="text" name="state" class="form-control" placeholder="Enter your correct State"><br/><br/>
                    <label>Captcha Code:</label>&nbsp; <span id="cap" style="font-size: 25px"><strike>Cfdhg</strike></span>
                    <input type="hidden" id="hcap" name="hcap"/> &nbsp;&nbsp;<span class="fa fa-refresh" onclick="ccode()" style="font-size: 20px;color: red;"></span>

            </div>
            <div class="col-sm-4">
                <label>Father's Name :</label>
                <input type="text" name="father" class="form-control" placeholder="Enter your Father Name..">

                <label>Gender:</label>
                <select name="gen" class="form-control">
                    <option>--Select--</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <label>User Id :</label>
                <input type="text" name="newid" class="form-control" placeholder="User Id">
                <label>Password :</label>
                <i class="fa fa-eye-slash"  onclick="myFunction()" style="position: absolute;top: 210px;right: 30px"></i>
                <input type="password" name="password" id="sh"  class="form-control show1" placeholder="Password">
                <label>Conform Password :</label>
                <i class="fa fa-eye-slash" onclick="myFunction()" style="position: absolute;top: 272px;right: 30px"></i><input type="password" class="form-control show2" placeholder="Conform Password">
                <span  style="font-family: monotype cursive" class="divDoPasswordsMatch"></span><br>
                <label> Distric :</label>
                <input type="text" name="distric" class="form-control" placeholder="Enter your correct Distric">
                <label>Address :</label>
                <textarea class="form-control" name="add" placeholder="Enter message.."></textarea>
                <label>Enter Captcha Code</label>
                <input type="text" name="ucap" class="form-control">
                <br>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-12"><center><button class="btn btn-success">SUBMIT</button></center><br/>
                </form>
            </div>
        </div>
    </div>


@endsection
