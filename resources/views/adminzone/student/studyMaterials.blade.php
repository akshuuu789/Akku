@extends("layouts.AdminLayout")
@section("study")

    <div class="container-fluid">
        <div class="row">
            <h1 style="color:blue"><center><b>Upload Book..</b></center></h1>
            <br><br>
            <div class="col-sm-12"></div>
            <div class="col-sm-4" style=""></div>
            <div class="col-sm-4" style="">
                <form action="/upbook" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <label> Subject :</label>
                    <input type="text" name="Subject" placeholder="Enter your Subject.." class="form-control" required>
                    <label> Discrition :</label>
                    <textarea name="Discription" placeholder="Enter your discription.." class="form-control"></textarea>
                    <label>  Upload Book :</label>
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
            @foreach($uploadbookModel as $uploadbookModel)
                <tr>
                    <td>{{ $uploadbookModel['Subject'] }}</td>
                    <td>{{ $uploadbookModel['Discription'] }}</td>
                    <td>{{ $uploadbookModel['task'] }}</td>
                    <td><a href="{{ '/bookdelete/'.$uploadbookModel['id'] }}"><span class="fa fa-trash"></span></a></td>
                </tr>
        @endforeach
    </div>
@endsection
