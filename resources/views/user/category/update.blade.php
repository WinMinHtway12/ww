@extends('layouts.app')
@section('title','Update Category')
@section('content')

<div class="container col-md-6 col-md-offset-2">

    <form method="post" >
     @if(session('status'))
        <p class="alert alert-success">{{session('status')}}</p>

     @endif

        {{csrf_field()}}
        <legend>Category Edition</legend>
        @if(session('dd'))
        <p class="alert alert-success">{{session('dd')}}</p>

     @endif
        <div class="mb-3">
            <label for="label" class="form-label"> Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
        </div>



        <div class="float-right">

        <button class="btn btn-primary " type="submit">Update</button>
        </div>
    </form>
</div>
</div>
@endsection
