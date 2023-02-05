<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\uploadbookModel;
use App\taskModel;
use App\useardash;
use App\LoginModel;

class StudentController extends Controller
{
    //
    public function Studash()
    {

        $s = session("aid");
        if ($s == null) {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
        } else {

            return view("studentzone.Studash");
        }
    }

    public function Downloadtask()
    {

        $s = session("aid");
        if ($s == null) {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
        } else {

            $data = taskModel::all();
            return view("StudentZone.Downloadtask", ['taskModel' => $data]);
        }
    }

    public function schangepaswd()
    {

        $s = session("aid");
        if ($s == null) {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
        } else {

            return view("studentzone.schangepaswd");
        }
    }

    public function sfeedback()
    {

        $s = session("aid");
        if ($s == null) {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
        } else {

            return view("studentzone.sfeedback");
        }
    }

    public function sdisscus()
    {

        $s = session("aid");
        if ($s == null) {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
        } else {

            return view("studentzone.sdisscus");
        }
    }

    public function Studybook()
    {

        $s = session("aid");
        if ($s == null) {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
        } else {

            $data = uploadbookModel::all();
            return view("studentzone.Studybook", ['uploadbookModel' => $data]);
        }
    }

    public function slogout()
    {

        $s = session("aid");
        if ($s == null) {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
        } else {

            return view("studentzone.slogout");
        }
    }

        public
        function useardash()
        {

            $s = session("aid");
            if ($s == null) {
                echo "<script>alert('Frist Login then goto next Zone');window.location.href='/useardash'</script>";
            } else {

            }
            return view("studentzone.useardash");
        }
    public function ALogout()
    {
        session()->forget("aid");
        echo "<script>alert('Logout');window.location.href='/login'</script>";
    }
    public function schangepasw()
    {
        $s=session("aid");

        if($s==null)
        {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
        }
        else {

            return view("studentzone.schangepaswd");
        }}

    public function sschangepass(Request $request )
{
    $opass=$request->opass;
    $npass=$request->npass;
    $cpass=$request->cpass;
    if($npass==$cpass)
    {
        $userid=session("aid");
        LoginModel::where('userid',$userid)->update(['passwd'=>$npass]);
        echo "<script>alert('Password change Succesfully');window.location.href='/login'</script>";
    }
    else
    {
        echo "<script>alert('please conform password');window.location.href='/schangepaswd'</script>";
    }

}


}

