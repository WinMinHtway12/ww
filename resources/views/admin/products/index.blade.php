@extends('layouts.app')
@section('title','Product Page')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<div class="container  col-md-offset-2">




            <div class="row">
                @foreach($products as $product )

                <div class="col-sm-6 col-md-4 ">
                    <div class="thumbnail mb-4">
                        <div class="caption">

                            <h5>{{$product->name}}</h5>
                            <img src="{{asset('uploads/'.$product->image)}}" alt="..." width="200px" height="150px">
                            <h6>{{$product->price}}Ks</h6>
                            <p>{{substr($product->description,0,25)}}</p>
                            <a href="{{url('admin/products/'.$product->id.'/edit')}}" class="btn btn-primary btn-sm" role="button">Edit</a>
                            <a href="{{url('admin/products/'.$product->id.'/delete')}}" class="btn btn-primary btn-sm" role="button">Delete</a>

                        </div>
                    </div>

                </div>

                @endforeach

            </div>

        </div>


    </div>
</div>
@endsection
