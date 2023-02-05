@extends("layouts.StudentLayout")
@section("userdash")
    <div class="row">
        <div class="col-sm-4">
            <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
               <center><p  class="fa fa-user" style="font-size: 60px; color:#50b3ff;"></p><br>
                   <a href="/Downloadtask" style="font-size: 20px;"><b>Download Task</b></a></center>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
                <center><p class="fa fa-book" style="font-size: 60px;color:#50b3ff"></p><br/>
                    <a href="/Studybook" style="font-size: 20px;"><b>Study Materials</b></a></center>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px    ">
               <center> <p class="fa fa-location-arrow" style="font-size: 60px;color: #50b3ff"></p><br>
                   <a href="/sdisscus" style=" font-size: 20px;"><b>Discussion</b></a></center>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
                <center><p class="fa fa-lock" style="font-size: 60px;color: #50b3ff"></p>&nbsp;<br/>
                    <a href="/schangepaswd" style="font-size: 20px;"><b>Change Password</b></a></center>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well well-lg" style="border:2px solid;min-height: 150px;margin-top: 20px">
                <center> <p class="fa fa-power-off" style="font-size: 60px;color: #50b3ff"></p><br/>
                    <a href="/ALogout" style="font-size: 20px;"><b>Logout</b></a></center>
            </div>
        </div>


@endsection
