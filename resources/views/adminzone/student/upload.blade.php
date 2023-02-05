@extends("layouts.AdminLayout")
@section("upload")
    <div class="container-fluid">
        <div class="row">
            <h2 style="color: blue"><center><b>Upload Task..</b></center></h2>
            <br><br>
            <div class="col-sm-12"></div>
            <div class="col-sm-4" style=""></div>
            <div class="col-sm-4" style="">
                <form action="/uptask" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <label> Subject :</label>
                    <input type="text" name="Subject" placeholder="Enter your Subject.." class="form-control" required>
                  <label> Discrition :</label>
                    <textarea name="Discription" placeholder="Enter your discription.." class="form-control"></textarea>
                    <label>  Upload Task :</label>
                    <input type="file"name="task" class="form-control"><br>
            <button class="btn btn-success" type="submit">SUBMIT</button><br/><br>
                </form>
            </div>
            <div class="col-sm-4" style=""></div>
        </div>
    </div>
<div class="row">
    <table class="table table-bordered">
        <tr>
            <th>Subject</th>
            <th>Discription</th>
            <th>Task</th>
            <th>add</th>
        </tr>
        @foreach($taskModel as $taskModel)
            <tr>
                <td>{{ $taskModel['Subject'] }}</td>
                <td>{{ $taskModel['Discription'] }}</td>
                <td><a href="UploadStudyMaterial/{{ $taskModel['task'] }}"><span class="fa fa-file-pdf-o"></span></a></td>
                <td><a href="{{ '/taskdelete/'.$taskModel['id'] }}"><span class="fa fa-trash"></span></a></td>
            </tr>
    @endforeach
</div>
@endsection
