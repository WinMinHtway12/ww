@extends('layouts.app')

@section('title','View Cart')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8  ">
                <div class="card ">
                    <div class="card-body ">

                        <h5 class="mb-3"><a href="{{url('product/home')}}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                        <hr>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <p class="mb-1">Shopping cart</p>

                                <p class="mb-0">You have 0 items in your cart</p>


                            </div>

                        </div>





                        <div class="d-flex flex-row align-items-center float-right  mb-4 ">
                            <div class="container float-right">
                                <div class="col">
                                    <div class="row">
                                        <div style="width: 100px;">
                                            <h5 class="fw-normal mb-0 ">Total</h5>
                                        </div>
                                        <div style="width: 150px;">
                                            <h5 class="mb-0 ">0</h5>
                                        </div>
                                    </div>


                                    <a href="" class="btn btn-primary mt-2 btn-sm">Clear Cart</a>
                                    <a href="" class="btn btn-primary  mt-2 btn-sm ">Order Now</a>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
