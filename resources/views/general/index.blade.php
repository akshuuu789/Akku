<html>
<head>
    <title>E-Study Zone</title>
    <!--css file & bootstrap-->

    <link href="prostyle.css" rel="stylesheet"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css"rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/aos.css"rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>

    <script src="js/counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <link href="pageloader.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            var typed = new Typed('.sptype', {
                strings: ["Well Come To Study Zone........", "Bright Your Future......"],
                typeSpeed: 30,
                loop:true,
                backSpeed:40,
                backDelay:1000
            });
            $(".s1").click(function(){
                 var d= $(this).attr("data");

                $("#hdn1").val(d);
                for(var i=1;i<=5;i++)
                {
                    if(i<=d)
                    {
                        $("#star"+i).css("color","green");
                    }
                    else
                    {
                        $("#star"+i).css("color","red");
                    }
                }

        })
        })
    </script>
</head>
<body>

<div class="container-fluid">
    <div class="row head">
        <div class="col-sm-3"><span class="fa fa-phone" style="color: white;"></span> <span style="color: white;">+917054761913</span></div>
        <div class="col-sm-3"><span class="fa fa-envelope" style="color: white;"></span> <span style="color: white;">akshuuu789@gmail.com</span></div>
        <div class="col-sm-5"></div>
        <div class="col-sm-1"><span class="fa fa-whatsapp" style="color: white;"></span> <span class="fa fa-twitter" style="color: white;"></span> <span class="fa fa-instagram" style="color: white;padding-left: 3px;"></span></div>
        </div>

    <div class="row box">
        <section class="slider-section">
            <div class="col-sm-12">
                <h1><span class="sptype" style="color: blue"></span></h1>
            </div>
        </section>
        <div class="col-sm-2"><img src="photo/logo1.jfif" style="height:90px;width:60%;margin-top:5px;"/></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

            <nav class="navbar navbar-default" style="margin-top:20px;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/" id="btn1">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="/mission"id="btn1">Vission & Mission</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"id="btn1">REGISTRATION <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/teacher"id="btn1"> New Teacher  Registration</a></li>
                                    <li><a href="/newreg"id="btn1"style="margin-top:3px;">New Students  Registration</a></li>

                                </ul>
                            </li>
                            <li><a href="/contact"id="btn1">Contact US</a></li>
                            <li><a href="/gallery"id="btn1">Gallery</a></li>
                            <li><a href="/login"id="btn1">Login</a></li>
                        </ul>


                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


        </div>
    </div>
    <!--mid box-->


    <div class="row box1">
        <div id="d1">
            <form>
                <div class="col-sm-6"><p style="margin-left:50px;margin-top:30px;font-size:40px;color:white" data-aos="fade-left" data-aos-delay="100">
                        Your Personalized Online Learning Destination!</p>
                    <h3 style="margin-left:50px;color:white" data-aos="fade-right" data-aos-delay="100">Prepare for you exams with our highly curated study notes, mocktests and video lectures</h3><br><br>
                    <button class="btn btn-success"id="btn1" style="margin-left:80px; color:black">&nbsp;&nbsp;<a
                            href="/course" style="color: white;">Exprole Courses</a>&nbsp;&nbsp;</button>
                </div>

                <div class="col-sm-6"><i class="glyphicon glyphicon-check" style="margin-top:40px;font-size:20px;color:white" data-aos="fade-left" data-aos-delay="100"> Study materials and precise notes</i><i class="glyphicon glyphicon-check" style="margin-top:40px;font-size:20px;color:white" data-aos="fade-right" data-aos-delay="100"> Exam oriented tests with analytics</i>
                    <i class="glyphicon glyphicon-check" style="margin-top:40px;font-size:20px;color:white"data-aos="fade-left" data-aos-delay="100"> Topic wise video lectures</i><br><br>

            </form>
        </div>
    </div>
</div>
<!--about-->

<div class="row box2"data-aos="zoom-in" data-aos-delay="100"><center><h1 style="margin-top:50px;">WHAT WE PROVIDE</h1></center>
    <div class="col-sm-4">
        <div style="height:200px;width:100%;background:#f2f3f4">
            <center><img src="photo/concept_notes.png"/ style="height:70px;width:50px;margin-top:20px;"><p style="font-size:20px;">concept notes</p><br>
                <p>Clarify your concepts with highly curated chapter wise concept notes</p></center>
        </div><hr/>
        <div style="height:200px;width:100%;background:#f2f3f4">
            <center>
                <img src="photo/video_lecture.png" style="height:70px;width:50px;margin-top:20px;">
                <p>VIDEO LECTURES</p>
                <p>Access video lectures prepared by highly experienced teachers

                </p>
            </center>
        </div><hr>
    </div>
    <div class="col-sm-4">
        <div style="height:200px;width:100%;background:#f2f3f4">
            <center><img src="photo/mock_tests.png"style="height:70px;width:50px;margin-top:20px"><br>
                <p style="font-size:20px">mock tests</p>
                <p>Assess your performance with exam oriented mock tests</p>
            </center>

        </div><hr/>
        <div style="height:200px;width:100%;background:#f2f3f4">
            <center>
                <img src="photo/performance.png" style="height:70px;width:50px;margin-top:20px;">
                <p>PERFORMANCE REPORTS</p>
                <p>Analyze your performance with reports specifying your weaknesses and strengths</p>
            </center>
        </div><hr/>
    </div>
    <div class="col-sm-4">
        <div style="height:200px;width:100%;background:#f2f3f4">
            <center><img src="photo/prac_exercises.png" style="height:70px;width:50px;margin-top:20px;">
                <p>PRACTICE_EXERCISES</p>
                <p>Attain perfection in your course with with more than 1,00,000 questions for practice</p>
            </center>
        </div><hr/>
        <div style="height:200px;width:100%;background:#f2f3f4">
            <center>
                <img src="photo/low_cost.png" style="height:70px;width:50px;margin-top:20px;">
                <p>AFFORDABLE COST</p>
                <p>We strive to provide you the best of everything in an low and affordable cost</p>
            </center>
        </div><hr/>
    </div>
</div>
<div class="container">
<div class="row box3">
    <div class="col-sm-12">
        <center><p style="font-size:40px;margin-top:10px;">ABOUT ONLINE STUDY ZONE</p>
            <p style="font-size:20px">Online Study Zone is a result of continuous and rigorous efforts of research in the field of education. The sole aim of this portal is to impart quality education to students. We have a plethora course comprising online study material, exercises, worksheets, video lectures and test series on our website as well as app.<br><br>

                Students these days face two major problems while opting their mode of education – Quality and Quantity. Online Study Zone has a collection of copious and authentic study material with an aim of improving the performance of students in their respective fields. Secondly it is also targeted to save student’s time and energy by providing ample study material and video lectures of renowned teachers on a single platform. This will allow the student to access quality education by just sitting in their home.</p></center>
    </div>
</div>
</div>
<div class="row box4">
    <div class="col-sm-6" style="height:100px;">
        <center><img src="photo/phone.png"style="height:500px;width:400px;margin-top:50px"class="hvr-buzz"></center>
    </div>
    <div class="col-sm-6" style="height:100px;">

        <p style="margin-top:100px;font-size:50px">Download Mobile App</p><br><br>
        <p style="font-size:20px; margin-right:70px">Now learn on the go with Online Study Zone Mobile App. Watch videos, practice questions, take mock tests. Detailed performace analytics will help you improve your score!</p><br>
        <img src="photo/go_store.png"style="height:50px;width:150px;"class="img img-responsive hvr-push"/>

    </div>


</div>
<!--slider-->
<div class="row box5">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" style="margin-top:70px">
        <center><h1 style="color:red">Reviews From Students</h1></center><br><br>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <center><img src="photo/1234.jfif" alt="" style="height:100px;width:90px"><br><br>

                        <span style="color:white">"XYZ Coaching Center, a place to learn and enjoy professional courses. Thanks to all staffs for creating such an environment to enjoy the subjects. Also staffs are very committed to make us understand even a single point of the subject."<br><br>

SHASHANKA M G - STUDENT </span></center>

                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <center><img src="photo/1234.jfif" alt="" style="height:100px;width:90px"/><br><br>
                        <span style="color:white">"XYZ Institute represents my NEAR-FAMILY. It has made my life colourful and laid down a bright path ahead by giving me stability with strong foundation of the course I am pursuing. Our reliance adds up to the trust placed by them."<br><br>

LOKESH VAMSI - STUDENT
</span></center>
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="item">
                    <center><img src="photo/1234.jfif" alt="" style="height:100px;width:90px"><br><br>
                        <span style="color:white">
	  "A very good institute for those who wanna pursue professional courses.. Good practical scenario's are used by professors that'll help each and every student to understand every concepts easily... Happy learning here ..Thanks to all:)"<br><br>

HEMANTH KUMAR - STUDENT
	  </span>

                    </center>
                    <div class="carousel-caption">

                    </div>
                </div>


            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    <div class="col-sm-3"></div>
</div>

<div class="row box6">
    <center><h1 style="margin-top:50px;">Get In Touch<h1></center>
    <div class="col-sm-6" style="height:200px;margin-top:30px">
	  <span>Need Help? Feel free to contact us any time and we will make sure that we assist you with the best of our capabilities.<hr/>

Address:<br/>
Mahrajgang,<br/>
 Nichlaul Rd, near Durga Mandir, Lohia Nagar, Maupakad, Maharajganj, Uttar Pradesh 273303<hr/>

Email:<br/>
triyambak2015@gmail.com<br/>
Phone:<br/>
+91 8858495519, +91 7080433022
</span>
    </div>
    <div class="col-sm-6" style="height:200px;margin-top:30px">
        <form action="/SaveEnquiry" method="post">
            @csrf

            <input type="text" name="name" placeholder="Name" class="form-control" style="width:70%;"><br>
            <input type="number" name="mob" placeholder="Contect" class="form-control" style="width:70%;"><br>
            <textarea placeholder="enter your message here.." name="massage" class="form-control" style="width:70%;"></textarea><br>
            <button type="submit" class="btn btn-success form-control" style="width:70%;">SEND MESSAGE</button>
        </form>
    </div>
</div>
<!--footer section-->
<div class="row box7">
    <div class="col-sm-3"style="height:150px;margin-top:10px;">
        <img src="photo/logo1.jfif"style="height:100px;width:50%;margin-left:20;"></img><br><br>
        <a href="#"><img src="photo/go_store.png"style="height:30px;width:50%;margin-left:20 "></img></a>
    </div>
    <div class="col-sm-3"style="height:150px;">
        <h4 style="margin-top:10px;color:white">USEFUL LINKS</h4><hr/>
        <a href="#" style="color:white;">Courses</a><br/>
        <a href="#" style="color:white;">Test Series</a><br/>
        <a href="/contact" style="color:white;">Contact Us</a><br/>
        <a href="/login" style="color:white;">Log In</a>
    </div>
    <div class="col-sm-3"style="height:150px;">
        <h4 style="color:white;margin-top:10px;">OTHER LINKS </h4><hr/>
        <a href="#" style="color:white;">Terms and Conditions</a><br/>
        <a href="#" style="color:white;">Privacy Policy</a><br/>
        <a href="#" style="color:white;">Refund & Cancellation Policy</a><br/>
    </div>
    <div class="col-sm-3"style="height:150px;">
        <h4 style="color:white;margin-top:10px">GET IN TOUCH</h4><hr/>
        <a href="#" style="color:white;"class="fa fa-envelope"> triyambak2015@gmail.com</a>

        <a href="#" style="color:white;margin-top:5px"class="fa fa-phone"> +91 8858495519, </a><a href="#" style="color:white;margin-top:5px"> +91 7080433022</a><br/><br/>
       </div>
</div>

<div class="row">
    <div class="col-sm-12" style="background: black">
        <div>
            <center> <p style="color: white">&copy; Copyright 2020 by Er. Triyambak Tiwari</p></center>
        </div>
    </div>
</div>

<!--feedback-->


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="position: fixed;top:35%;right: 0px;">
    <span>R<br>E<br>V<br>I<br>E<br>W</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <img src="photo/feedback.jpg" alt=""  height="70px" class="hvr-push" width="30%">

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/feedback" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name.." aria-describedby="basic-addon1">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email.." aria-describedby="basic-addon1">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-file"></i></span>
                        <input type="file" name="profile" class="form-control"  aria-describedby="basic-addon1">
                    </div>

                   <br>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil"></i></span>
                        <textarea class="form-control" name="msg" placeholder="write your message.."></textarea>
                    </div>
                    <center><h3>
                            <span class="fa fa-star s1" data="1"  id="star1" style="color:blue" > </span>
                            <span class="fa fa-star s1" data="2" id="star2"  style="color:blue"></span>
                            <span class="fa fa-star s1" data="3"  id="star3" style="color:blue"></span>
                            <span class="fa fa-star s1"  data="4" id="star4" style="color:blue"></span>
                            <span class="fa fa-star s1" data="5"  id="star5"style="color:blue"></span></h3></center>
                    <input type="hidden" id="hdn1" name="star"/>

                    <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">SEND FEEDBACK</button>
                </form>
            </div>
        </div>
    </div>



<div id="preloader"></div>
</body>
</html>
