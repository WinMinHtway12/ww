@extends('layouts.app')

@section('title','Admin Pannel')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div class="container col-md-6 col-offset-2">

        <legend style="text-align: center;">Admin Dashboard</legend>

        <h5>Edit Users</h5>
        <a href="{{url('admin/users')}}"><button class="btn btn-primary">Edit User</button></a>
        <a href="{{url('admin/roles/create')}}"><button class="btn btn-primary">Add Roles</button></a>

        <h5 class="mt-3">Edit Categories</h5>
        <a href="{{url('admin/category')}}"><button class="btn btn-primary">View Categroies</button></a>
        <a href="{{url('admin/category/create')}}"><button class="btn btn-primary">Add Category</button></a>


        <h5 class="mt-3">Edit Product</h5>
        <a href="{{url('admin/products/')}}"><button class="btn btn-primary">View Products</button></a>
        <a href="{{url('admin/products/create')}}"><button class="btn btn-primary">Add Product</button></a>

        <h5 class="mt-3"> Order</h5>
        <a href=""><button class="btn btn-primary">View Order</button></a>


</div>
@endsection
