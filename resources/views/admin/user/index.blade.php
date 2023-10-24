@extends('layouts.app')
@section('title','All Users')
@section('content')
<div class="container col-md-6 col-md-offset-2">
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edition</th>
        </thead>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td> <a href="{{url('admin/users/'.$user->id.'/edit')}}" style="color:black">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
