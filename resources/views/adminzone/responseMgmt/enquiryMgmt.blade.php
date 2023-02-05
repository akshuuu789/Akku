@extends("layouts.AdminLayout")
@section("enquiry")

    <table class="table table-bordered"><br/><br/>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>
        @foreach($EnquiryModel as $EnquiryModel)
            <tr>
                <td>{{ $EnquiryModel['name'] }}</td>
                <td>{{ $EnquiryModel['Mob'] }}</td>
                <td>{{ $EnquiryModel['massage'] }}</td>
                <td><a href="{{ '/delete/'.$EnquiryModel['id'] }}"><span class="fa fa-trash"></span></a></td>
            </tr>
        @endforeach
    </table>
@endsection
