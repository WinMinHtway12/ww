@extends('layouts.app');
@section('title','View All Roles')
@section('content')

<div class="container col-md-8 col-md-offset">
    <table class="table table-bordered">
    <thead>
            <th>Id</th>
            <th>Role Name</th>

        </thead>
        @foreach($roles as $role)
        <tr>
<td>{{$role->id}}</td>
<td>{{$role->name}}</td>
        </tr>
@endforeach
    </table>
</div>
@endsection
