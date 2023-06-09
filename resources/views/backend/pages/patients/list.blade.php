@extends('backend.master')
@section('content')
<h2>Patient Details</h2>
<a class="btn btn-primary" href="{{route('patient.create')}}">Add new</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->Department->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection