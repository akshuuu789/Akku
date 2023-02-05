@extends("layouts.AdminLayout")
@section("feedbackMgmt")
    <div class="row">
        <table class="table table-bordered"><br/><br/>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile</th>
                <td>Message</td>
                <td>Star</td>
                <td>Opration</td>
            </tr>
            @foreach($FeedbackModel as $FeedbackModel)
                <tr>
                    <td>{{ $FeedbackModel['id'] }}</td>
                    <td>{{ $FeedbackModel['name'] }}</td>
                    <td>{{ $FeedbackModel['email'] }}</td>
                    <td><img src="profiles/{{ $FeedbackModel['profile'] }}" style="height: 30px;width: 30px"></img></td>
                    <td>{{ $FeedbackModel['msg'] }}</td>
                    <td>{{ $FeedbackModel['star'] }}</td>
                    <td><a href="{{ '/feedbackdelete/'.$FeedbackModel['id'] }}"><span class="fa fa-trash"></span></a></td>
                </tr>
        @endforeach
    </div>

@endsection
