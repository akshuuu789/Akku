<?php

namespace App\Http\Controllers;

use App\EnquiryModel;
use App\LoginModel;
use App\RegistrationModel;
use App\uploadbookModel;
use App\taskModel;
use App\FeedbackModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function dash()
    {
        $s=session("aid");
        if($s==null)
        {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
        }
        else {

            return view("adminzone.dash");
        }
    }
    public  function contactmgmt()
    {
        $s=session("aid");
        if($s==null)
        {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
        }
        else {

            return view("adminzone.contactmgmt");
        }

    }
    public function ALogout()
    {
        session()->forget("aid");
        echo "<script>alert('Logout');window.location.href='/login'</script>";
    }
public function student()

{
    $s = session("aid");
    if ($s == null) {
        echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
    } else {
        $data = RegistrationModel::all();
        return view("adminzone.student.studentMgmt", ['RegistrationModel' => $data]);
    }
}
    public function rdelete($id)
{
    $data=RegistrationModel::find($id);
    $data->delete();
    echo "<script>alert('Record Delete');window.location.href='/student'</script>";
}

public function upload()
{
    $s=session("aid");
    if($s==null)
    {
        echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
    }
    else {

        $data=taskModel::all();
    return view("adminzone.student.upload",['taskModel'=>$data]);
}}
    public function taskdelete($id)
    {
        $data=taskModel::find($id);
        $data->delete();
        echo "<script>alert('Record Delete');window.location.href='/upload'</script>";
    }
public  function  uptask(Request $request)
{
    $task=new taskModel();
    $file = $request->task;
    if ($file->getClientOriginalName() == "" || $file->getClientOriginalName() == null) {
        echo "<script>alert('file is not uploaded');window.location.href='/upload'</script>";
    } else
        {
            $task->Subject = $request->Subject;
            $task->Discription = $request->Discription;
            $task->task = $file->getClientOriginalName();
            $folderName = "UploadTask";
            $file->move($folderName, $file->getClientOriginalName());
            $task->save();
        //'pecho "saved";
        echo "<script>alert('your file is uploaded');window.location.href='/upload'</script>";

    }
}

public function study()
{
    $s = session("aid");
    if ($s == null) {
        echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
    } else {

        $data = uploadbookModel::all();
        return view("adminzone.student.studyMaterials", ['uploadbookModel' => $data]);
    }
}
    public function bookdelete($id)
    {
        $data=uploadbookModel::find($id);
        $data->delete();
        echo "<script>alert('Record Delete');window.location.href='/study'</script>";
    }
    public  function  upbook(Request $request)
    {
        $uploadbook=new uploadbookModel();
        $file = $request->task;
        if ($file->getClientOriginalName() == "" || $file->getClientOriginalName() == null) {
            echo "<script>alert('file is not uploaded');window.location.href='/study'</script>";
        } else
        {
            $uploadbook->Subject = $request->Subject;
            $uploadbook->Discription = $request->Discription;
            $uploadbook->task = $file->getClientOriginalName();
            $folderName = "UploadStudyMaterial";
            $file->move($folderName, $file->getClientOriginalName());
            $uploadbook->save();
            //'pecho "saved";
            echo "<script>alert('your file is uploaded');window.location.href='/study'</script>";
        }
    }

public function loginmgmt()
{ $s=session("aid");
    if($s==null)
    {
        echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
    }
    else {

        return view("adminzone.student.loginmgmt");
}}


public function enquirymgmt()
{
    $s=session("aid");
    if($s==null)
    {
        echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
    }
    else {

        $data=EnquiryModel::all();
    return view("adminzone.responseMgmt.enquiryMgmt",['EnquiryModel'=>$data]);
}}
public function delete($id)
{
    $data=EnquiryModel::find($id);
    $data->delete();
    echo "<script>alert('Record Delete');window.location.href='/enquirymgmt'</script>";
}
public function feedbackmgmt()
{
    $s=session("aid");
    if($s==null)
    {
        echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
    }
    else {

        $data=FeedbackModel::all();
    return view("adminzone.responseMgmt.feedbackMgmt",['FeedbackModel'=>$data]);
}}
    public function feedbackdelete($id)
    {
        $data=FeedbackModel::find($id);
        $data->delete();
        echo "<script>alert('Record Delete');window.location.href='/feedback'</script>";
    }
    public function AChangepassword()
    {
        $s=session("aid");

        if($s==null)
        {
            echo "<script>alert('Frist Login then goto next Zone');window.location.href='/logins'</script>";
        }
        else {

            return view("adminzone.student.AChangepassword");
    }}
    public function changepass( Request $request)
    {
        /*$data=LoginModel::find($request->userid);
        $data->passwd=$request->opass;
        $npass=$request->npass;
        $cpass=$request->cpass;
        if($npass==$cpass)
        {
            $userid=session("aid");
            LoginModel::where('usearid',$userid,'passwd',$npass)->update('$npass');
            $data->save();
            echo "<script>alert('Password change Succesfully');window.location.href='/login'</script>";
        }
        else
        {
            echo "<script>alert('please conform password');window.location.href='/AChangepassword'</script>";
        }*/
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
            echo "<script>alert('please conform password');window.location.href='/AChangepassword'</script>";
        }

    }

}

