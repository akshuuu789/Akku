@extends("layouts.base")
@section("contact")
    <div style="background-image: url('photo/st2.jpg');background-size: 100% 100%;min-height: 550px;">
    <div class="container-fluid" style="">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4" style="border:2px solid;margin-top: 50px;" data-aos="fade-down" data-aos-delay="100">
                <form action="/SaveEnquiry" method="post">
                    @csrf
                    <center><h1 style="color: blue">Contact Us</h1></center>
                    Name:
                    <input type="text" name="name" placeholder="Enter your Name" class="form-control" required><br/>
                    Mobile No;
                    <input type="number" name="mob" placeholder="Enter your Name" class="form-control"required><br/>
                    Massage:
                    <textarea placeholder="Enter your massage" name="massage" class="form-control"required></textarea><br/>
                    <center><button class="btn btn-success" style="color: black" id="btn1">Submit</button></center>
                </form>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6" style="margin-top: 50px;border:5px solid whitesmoke;padding: 0px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.3713653975983!2d83.55998501438636!3d27.144603483028238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996a9bc05b9f3fb%3A0x749789cda8223330!2sSRISHTI%20CLASSES!5e0!3m2!1sen!2sin!4v1608402987170!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    </div>
@endsection
