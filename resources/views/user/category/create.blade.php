@extends('layouts.app')
@section('title','Create Category')
@section('content')

<div class="container col-md-6 col-md-offset-2">

    <form method="POST" >
       
     @if(session('status'))
        <p class="alert alert-success">{{session('status')}}</p>

     @endif
        {{csrf_field()}}
        <legend>Category Creation</legend>
        <div class="mb-3">
            <label for="label" class="form-label"> Category Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>



        <div class="float-right">
            <button class="btn btn-primary" type="reset">Cancel</button>
        <button class="btn btn-primary " type="submit">Create</button>
        </div>
    </form>
</div>
</div>
@endsection
