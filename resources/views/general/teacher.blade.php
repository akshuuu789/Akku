@extends("layouts.base")
@section("teacher")
    <div class="container-fluid">
        <div class="row">
            <h1><center>Teacher Registration Here..</center></h1>
            <div class="col-sm-2"></div>
            <div class="col-sm-4" style="">
                <form action="/tech" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <label> Name :</label>
                    <input type="text" name="name" placeholder="Enter your name.." class="form-control" required>

                    <label> Date Of Birth :</label>
                    <input type="date"name="dob" class="form-control">

                    <label> Email :</label>
                    <input type="email"name="email" placeholder="Enter your email.." class="form-control">
                    <label>  Profile :</label>
                    <input type="file"name="profile" class="form-control">
                    <label>Aadhar Card :</label>
                    <input type="text" name="aadhar" class="form-control" placeholder="Enter your correct Aadhar no..">
                    <label> Mobile Number :</label>
                    <input type="number" id="t1" name="mob" placeholder="Enter your mobile no.." class="form-control">
                    <span class="mt"></span><br>
                    <label> State :</label>
                    <input type="text" class="form-control"name="state" placeholder="Enter your correct State"><br/><br/>
                    <label>Captcha Code:</label>&nbsp; <span id="cap" style="font-size: 25px;"><strike>Cfdhg</strike></span>
                    <input type="hidden" id="hcap"name="hcap"/> &nbsp;&nbsp;<span onclick="ccode()" class="fa fa-refresh" style="font-size: 20px;color: red;"></span>
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
                <label>Language Known :</label>
                <input name="lang" type="text" class="form-control" placeholder="Language Known">
                <label>Qualification :</label>
                <input type="text" name="quli" class="form-control" placeholder="Qualification">
                <label>Experience :</label>
                <input type="text" name="exp" class="form-control" placeholder="Experience">
                <label> Distric :</label>
                <input type="text" name="distric" class="form-control" placeholder="Enter your correct Distric">
                <label>Address :</label>
                <textarea class="form-control" name="add" placeholder="Enter message.."></textarea>
                <label>Enter Captcha Code</label>
                <input type="text" class="form-control">
                <br>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-12"><center><button class="btn btn-success" type="submit">SUBMIT</button></center><br/>
                </form>
            </div>
        </div>
    </div>



@endsection
