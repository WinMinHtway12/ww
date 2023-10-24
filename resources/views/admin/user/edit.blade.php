@extends('layouts.app')

@section('title','Edit User')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div class="container col-md-6 col-md-offset-2">
    <form method="post">
        <div class="form-group">
            @foreach($errors->all as $$error)
            <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            {{csrf_field()}}
            <label for="username">UserName</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group>">

            <select class="form-control" name="role[]" multiple>

                @foreach($roles as $role)
                <option value="{{$role->name}}" @if(in_array($role->name,$selectedRoles))
                    selected="selected"
                    @endif
                    >{{$role->name}}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary" >Edit</button>
        </div>
    </form>

</div>
@endsection
