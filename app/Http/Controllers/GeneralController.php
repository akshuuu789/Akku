<?php

namespace App\Http\Controllers;
use App\EnquiryModel;
use App\FeedbackModel;
use App\LoginModel;
use App\RegistrationModel;
use App\teacherModel;
use App\TeacherRegModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MongoDB\Driver\Session;

class GeneralController extends Controller
{
    //
    public function home()
    {
        return View("general.index");

    }
    public function login()
    {
        return view("general.login");
    }
    public function ALogin(Request $request)
    {
        $userid=$request->userid;
        $passwd=$request->passwd;
        $type=$request->type;
        $data=LoginModel::where('userid',$userid)->where('passwd',$passwd)->where('type',$type)->first();
       if($data)
       {
           if($type=="admin") {
               session(['aid' => $userid]);
               echo "<script>alert('Welcom to AdminZone');window.location.href='/dashboard'</script>";
           }
           else if($type=="Student")
           {
               session(['aid' => $userid]);
               echo "<script>alert('Welcom to StudentZone');window.location.href='/useardash'</script>";
           }

       }
       else
       {
           echo "<script>alert('Invlid UsearId password');window.location.href='/login'</script>";
       }
    }

    public function newreg()
    {
        return View("general.newreg");
    }

    public function teacher()
    {
        return View("general.teacher");
    }

    public function gallery()
    {
        return View("general.gallery");
    }
    public function contact()
    {
        return view("general.contact");
    }
    public function mission()
    {
        return view("general.mission");
    }

    public function course()
    {
        return View("general.course");
    }
    public function cpassword()
    {
        return view("general.cpassword");
    }
    public function forget()
    {
        return view("general.forget");
    }
    public function review()
    {
        return view("general.review");
    }
    public function SaveEnquiry(Request $request)
    {
    $table=new EnquiryModel();
    $table->name=$request->name;
    $table->mob=$request->mob;
    $table->massage=$request->massage;
    $table->save();
    //'pecho "saved";
    echo "<script>alert('Thanks As soon as Contact You');window.location.href='/'</script>";
    }
    public function reg(Request $request)
    {

        if($request->hcap==$request->ucap)
        {
            $reg = new RegistrationModel();
            //$cap=$request->hcap;
            $file = $request->profile;
            if ($file->getClientOriginalName() == "" || $file->getClientOriginalName() == null) {
                echo "<script>alert('file is not uploaded');window.location.href='/newreg'</script>";
            }
            else
                {
                $reg->name = $request->name;
                $reg->dob = $request->dob;
                $reg->email = $request->email;
                $reg->profile = $file->getClientOriginalName();
                $folderName = "profiles";
                $file->move($folderName, $file->getClientOriginalName());
                $reg->aadhar = $request->aadhar;
                $reg->mob = $request->mob;
                $reg->state = $request->state;
                $reg->father = $request->father;
                $reg->gen = $request->gen;
                $reg->newid = $request->newid;
                $reg->distric = $request->distric;
                $reg->password = $request->password;
                $reg->add = $request->add;
                $reg->save();
                //insert data into login
                $lg=new LoginModel();
                $lg->userid=$request->newid;
                $lg->passwd=$request->password;
                $lg->type="Student";
                $lg->save();
                echo "<script>alert('Registration completed');window.location.href='/newreg'</script>";
            }
        }
        else
        {
            echo "<script>alert('Invlid Your Capcha Code');window.location.href='/newreg'</script>";
        }
    }
    public function tech(Request $request)
    {
        if ($request->hcap == $request->ucap)
        {
            $tech = new teacherModel();
            $file = $request->profile;
            if ($file->getClientOriginalName() == "" || $file->getClientOriginalName() == null) {
                echo "<script>alert('fil e is not uploaded');window.location.href='/teacher'</script>";
            } else {
                $tech->name = $request->name;
                $tech->dob = $request->dob;
                $tech->email = $request->email;
                $tech->profile = $file->getClientOriginalName();
                $folderName = "profiles";
                $file->move($folderName, $file->getClientOriginalName());
                $tech->aadhar = $request->aadhar;
                $tech->mob = $request->mob;
                $tech->father = $request->father;
                $tech->gen = $request->gen;
                $tech->lang = $request->lang;
                $tech->quli = $request->quli;
                $tech->exp = $request->exp;
                $tech->state = $request->state;
                $tech->distric = $request->distric;
//            $tech->nid=$request->nid;
                $tech->add = $request->add;
                $tech->save();
                echo "<script>alert('Registration completed');window.location.href='/teacher'</script>";
            }
        }
        else
        {
            echo "<script>alert('Invlid Your Capcha Code');window.location.href='/newreg'</script>";
        }
    }

    public function feedback(Request $request)
    {
       $table=new FeedbackModel();
        $file = $request->profile;
        if ($file->getClientOriginalName() == "" || $file->getClientOriginalName() == null) {
            echo "<script>alert('file is not uploaded');window.location.href='/feedback'</script>";
        }
        else
        {

        $table->name=$request->name;
        $table->email=$request->email;
            $table->profile = $file->getClientOriginalName();
            $folderName = "profiles";
            $file->move($folderName, $file->getClientOriginalName());
        $table->msg=$request->msg;
        $table->star=$request->star;
        $table->save();
        //'pecho "saved";
        echo "<script>alert('Thankyou');window.location.href='/'</script>";
    }
    }
    public function OPTGenerator()
    {
        $code='';
        $n1=rand(5,2);
        $n2=rand(2,6);
        $n3=rand(5,3);
        $n4=rand(5,8);
        $n5=rand(5,7);
        $n6=rand(8,9);
        $code=$code."".$n1."".$n2."".$n3."".$n4."".$n5."".$n6;
        return $code;
    }
    public function forgot()
    {
        $otp=$this->OPTGenerator();
        echo "OTP is" .$otp;
        $to_name="Ram";
        $to_email="triyambak2015@gmail.com";
        $data=array('name'=>'Hello Guys','body'=>'This mail from my portal,Your OTP Code is'.$otp);
         Mail::send('general.mymail',$data,function ($message)use($to_name,$to_email){
             $message->to($to_email)->subject('Web Testing mail');
         });
         echo"Email send successfully";
    }

}
