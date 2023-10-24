@extends('layouts.app')
@section('title','Category Page')
@section('content')

<div class="container col-md-6 col-offset-2">

    @if(session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
    @endif
    <table class="table ">
        <thead>
            <tr>
                <!-- <th>iD</th> -->
                <th>Category Name</th>

                <!-- <th>Edition</th> -->
            </tr>
        </thead>
        <tbody>

            @foreach($categories as $category)
            <tr>
                <!-- <td>{{$category->id}}</td> -->
                <td><a href="">{{$category->name}}</a></td>
                <!-- <td><a href="{{url('category/'.$category->id.'/edit')}}">Edit</a></td> -->
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>
@endsection