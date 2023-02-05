@extends("layouts.AdminLayout")
@section("dash")
<div class="row">
    <div class="col-sm-4">
        <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 15px">
            <center><p class="fa fa-user" style="font-size: 60px;color: #50b3ff;"></p></center>
            <center><a href="/student" style="font-size: 15px;"><b>Student Management</b></a></center>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
            <center><p  class="fa fa-pie-chart" style="font-size: 60px;color: #50b3ff"></p></center>
            <a href="/upload" style="font-size: 15px"><b>Upload Management</b></a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
            <center><p class="fa fa-book" style="font-size: 60px;color: #50b3ff"></p></center>
            <center> <a href="/study" style="font-size: 15px"><b>Student Materials</b></a></center>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
            <center><p  class="fa fa-envelope-square" style="font-size: 60px;color: #50b3ff">&nbsp;</p><br/>
                <a href="/enquirymgmt" style="font-size: 15px;"><b>Enquiry Management</b></a></center>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
           <center> <p class="fa fa-feed" style="font-size: 60px;color: #50b3ff"></p><br/>
               <a href="/feedback" style="font-size: 15px;"><b>Feedback</b></a></center>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
            <center><p  class="fa fa-lock" style="font-size: 60px;color: #50b3ff"></p><br/>
                <a href="/AChangepassword"style="font-size: 15px"><b>Change Password</b></a></center>

        </div>
    </div>
    <div class="col-sm-4">
        <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px    ">
           <center> <p class="fa fa-power-off" style="font-size: 60px;color: #50b3ff"></p><br/>
               <a href="/ALogout" style="font-size: 15px"><b>Logout</b></a></center>
        </div>
    </div>
</div>

@endsection
