@extends('layouts.app')
@section('title','Product Creation')
@section('content')

<div class="container col-md-5">

    <form method="post" enctype="multipart/form-data">
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach
        @if(session('status'))
        <p class="alert alert-success">{{session('status')}}</p>
        @endif
        {{csrf_field()}}
        <div class="form-group">

            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="text" name="name">

        </div>

        <input type="file" id="customFile" name="file" />
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="price">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class=" float-right">
            <button type="reset" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

    </form>

</div>
@endsection
