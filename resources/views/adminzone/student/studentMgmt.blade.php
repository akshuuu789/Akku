@extends("layouts.AdminLayout")
@section("student")

    <table class="table table-bordered"><br/><br/>
        <tr>
            <th>Name</th>
            <th>D.O.B</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Aadhar</th>
            <th>Mobile</th>
            <th>State</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>nid</th>
            <th>distric</th>
            <th>add</th>
        </tr>
        @foreach($RegistrationModel as $RegistrationModel)
            <tr>
                <td>{{ $RegistrationModel['name'] }}</td>
                <td>{{ $RegistrationModel['dob'] }}</td>
                <td>{{ $RegistrationModel['email'] }}</td>
                <td><img src="profiles/{{ $RegistrationModel['profile'] }}" height="80px" width="80px"></td>
                <td>{{ $RegistrationModel['aadhar'] }}</td>
                <td>{{ $RegistrationModel['mob'] }}</td>
                <td>{{ $RegistrationModel['state'] }}</td>
                <td>{{ $RegistrationModel['father'] }}</td>
                <td>{{ $RegistrationModel['gen'] }}</td>
                <td>{{ $RegistrationModel['nid'] }}</td>
                <td>{{ $RegistrationModel['distric'] }}</td>
                <td>{{ $RegistrationModel['add'] }}</td>
                <td><a href="{{ '/rdelete/'.$RegistrationModel['id'] }}"><span class="fa fa-trash"></span></a></td>
            </tr>
        @endforeach
    </table>

@endsection
