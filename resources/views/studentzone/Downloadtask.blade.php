@extends("layouts.StudentLayout")
@section("Downloadtask")
    <br>
    <h2 class="text-center" style="color: blueviolet;font-weight: bold">Practice Question..</h2><br><br>
    <table class="table table-bordered">
            <tr>
                <th>Subject</th>
                <th>Discription</th>
                <th>Task</th>
            </tr>
@foreach($taskModel as $taskModel)
        <tr>
            <td>{{$taskModel['id']}}</td>
            <td>{{$taskModel['Subject']}}</td>
            <td>{{$taskModel['Discription']}}</td>
            <td><a href="Uploadtask/{{ $taskModel['task'] }}"><span class="fa fa-file-pdf-o"></span></a></td>
 </tr>

    @endforeach
    </table>
@endsection
