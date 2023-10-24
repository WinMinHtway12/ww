@extends('layouts.app')
@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Example single danger button -->
<div class="container ">
    <legend class="">Welcome From Our Website</legend>
    <div class="row">
        <div class="col-md-3">
            <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
                <button class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                    <svg class="bi me-2" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-5 fw-semibold">Menu</span>
                </button>

                <button class="btn btn-secondary mt-3"> <a href="{{url('product/home')}}">Products
                    </a></button>
                <button class="btn btn-secondary mt-3"> <a href="{{url('/category')}}">Categories
                    </a></button>

                <!-- <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" href="{{url('product/home')}}" aria-expanded="false">
                            Products
                        </button>
                        <div class="collapse show" id="dashboard-collapse"> -->
                <!-- <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"> -->
                <!-- <li><a href="{{url('product/create')}}" class="link-dark  rounded">Create New Product</a></li> -->
                <!-- <li><a  class="link-dark rounded">Show Product</a></li> -->
                <!--  <li><a href="{{url('product/{id}/edit')}}" class="link-dark rounded">Edit Product</a></li>
                                <li><a href="{{url('product/{id}/delete')}}" class="link-dark rounded">Delete Prodct</a></li> -->

                <!--         </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Category
                        </button>
                        <div class="collapse " id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{url('/category')}}" class="link-dark rounded">All categories</a></li>

                                <li><a href="{{url('category/create')}}" class="link-dark rounded">Create</a></li>
                            </ul>
                        </div>
                    </li> -->
                <!-- <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            Orders
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">New</a></li>
                                <li><a href="#" class="link-dark rounded">Processed</a></li>
                                <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                <li><a href="#" class="link-dark rounded">Returned</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">New...</a></li>
                                <li><a href="#" class="link-dark rounded">Profile</a></li>
                                <li><a href="#" class="link-dark rounded">Settings</a></li>
                                <li><a href="#" class="link-dark rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li> -->
                <!-- </ul> -->
            </div>
        </div>
        <div class="col-md-9 ">
            <div class="row">
                @foreach($products as $product )
                <div class="col-sm-6 col-md-4 ">
                    <div class="thumbnail mb-4">
                        <div class="caption">
                            <h5>{{$product->name}}</h5>
                            <img src="{{asset('uploads/'.$product->image)}}" alt="..." width="200px" height="150px">
                            <h6>{{$product->price}}Ks</h6>
                            <p>{{substr($product->description,0,25)}}</p>




                            <a href="{{url('product/'.$product->id.'/detail')}}" class="btn btn-primary btn-sm" role="button">Detail</a>
                            <a href="{{url('product/'.$product->id.'/add-cart')}}" class="btn btn-primary btn-sm" role="button">Add To Cart</a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection