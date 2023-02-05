@extends("layouts.StudentLayout")
@section("Studybook")
    <br/>
    <h2 class="text text-center" style="color: blue;font-weight: bold">Download Books Here..</h2><br/><br/>
<table class="table table-bordered">
    <tr>
        <th>S.No</th>
        <th>Subject</th>
        <th>Discription</th>
        <th>PDF</th>
    </tr>
    @foreach($uploadbookModel as $uploadbookModel)
    <tr>
        <td>{{$uploadbookModel['id']}}</td>
        <td>{{$uploadbookModel['Subject']}}</td>
        <td>{{$uploadbookModel['Discription']}}</td>
        <td><a href="UploadStudyMaterial/{{ $uploadbookModel['task'] }}"><span class="fa fa-file-pdf-o"></span></a></td>
    </tr>
    @endforeach
</table>
@endsection
