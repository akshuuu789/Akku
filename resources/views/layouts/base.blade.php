<html>
<head>
    <title>E-Study Zone</title>
    <!--css file-->
    <link href="prostyle.css" rel="stylesheet"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css"rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/aos.css"rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <link href="pageloader.css" rel="stylesheet">
    <script>
        function ccode()
        {
            var str="";
            var code="23456789ABCDEFGhijklmnopqrstuvwWxyZz";
            for(var i=0;i<5;i++)
            {
                str=str+code[Math.floor(Math.random()*22)];
            }
            $('#cap').html("<strike>"+str+"</strike>");
            $('#hcap').val(str);
        }
        $(document).ready(function () {
        ccode();
        $("html").bind('cut copy',function(event){
            event.preventDefault();
            });
        })

        $(document).ready(function(){
            $("#t1").keypress(function(e){
                $("#t1").attr("type","text");
                $("#t1").attr("maxlength",10);
                var a=e.keyCode;
                if(a>=48&&a<=57||a==8)
                {

                }
                else
                {
                    e.preventDefault();
                }
            })
            $("button").click(function(){
                var t=$("#t1").val().trim();
                if(t.length==10)
                {
                    var n=t.charAt(0);
                    if(n==6||n==7||n==8||n==9)
                    {
                       $(".mt").html("Valid number").css("color","green");
                    }
                    else
                    {
                        alert("mobile Number is invalid")
                    }
                }

            })
        })


    </script>



</head>
<body>


<div class="container-fluid">
    <div class="row head">
        <div class="col-sm-3"><span class="fa fa-phone" style="color: white;"></span> <span style="color: white;">7054761913</span></div>
        <div class="col-sm-3"><span class="fa fa-envelope" style="color: white;"></span> <span style="color: white;">akshuuu@gmail.com</span></div>
        <div class="col-sm-5"></div>
        <div class="col-sm-1"><span class="fa fa-whatsapp" style="color: white;"></span> <span class="fa fa-twitter
" style="color: white;"></span>  <span class="fa fa-instagram" style="color: white;padding-left: 3px;"></span></div>
    </div>

    <div class="row box">
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
                                    <li><a href="/teacher"id="btn1">New Teacher Registration</a></li>
                                    <li><a href="/newreg"id="btn1"style="margin-top:3px;">New Students Registration </a></li>

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
    <!--login box-->
    <div class="row">
        <div class="col-sm-12"style="min-height:auto">

@section("login")
            @show

@section("newreg")
    @show


@section("teacher")
    @show
@section("gallery")
    @show
@section("contact")
    @show

@section("mission")
    @show
            @section("course")
                @show
@section("forget")
    @show
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
            <a href="#" style="color:white;"class="fa fa-envelope"> akshuuu789@gmail.com</a>

            <a href="#" style="color:white;margin-top:5px"class="fa fa-phone"> +917054761913 </a><a href="#" style="color:white;margin-top:5px"> </a><br/><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="background: black">
            <div>
                <center> <p style="color: white">&copy; Copyright 2020 by Akanksha Shukla</p></center>
            </div>
        </div>
    </div>

</div>


<div id="preloader"></div>
</body>
</html>
