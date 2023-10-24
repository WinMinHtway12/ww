@extends('layouts.app')
@section('title','Insert Role')
@section('content')

<div class="container col-md-6 col-md-offset-2">

    <form method="post">

    @if(session('status'))
        <p class="alert alert-success">{{session('status')}}</p>

     @endif
        {{csrf_field()}}
        <div class="form-group">
            <legend>Insert A Role</legend>
            <label for="role">Role Name</label>
            <input type="text" class="form-control" name="name">
            <button type="submit" class="btn btn-primary mt-2">
                Insert</button>
        </div>
    </form>

</div>

@endsection
