@extends('master.website')

@section('body')

            <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Single Product Page</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="index-2.html">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="single.html">Single Product Page</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

            <!-- Start Product Details -->
            <div class="container">
                <div class="product-quick-view">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="quick-view-carousel-details">
                                <div class="item" style="background: url({{asset($product->image)}}); width:100; height:100;">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="quick-view-content">
                                <div class="top">
                                    <h3 class="head">{{$product->name}}</h3>
                                    <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">BDT.{{$product->selling_price}}</span></div>
                                    <div class="category">Category: <span>{{$product->category->name}}</span></div>
                                    <div class="available">Availibility: <span>In Stock</span></div>
                                </div>
                                <div class="middle">
                                    <p class="content">{{$product->short_description}}</p>
                                </div>
                                <div >
                                    <form action="{{route('website.cart.store',['id'=>$product->id])}}" method="post">
                                        @csrf
                                    <div class="quantity-container d-flex align-items-center mt-15">
                                        Quantity:
                                        <input type="number" class="quantity-amount ml-15" value="1" name="qty" />

                                        <button class=" ms-3 btn rounded border border-2 bg-success text-white" type="submit">Add to cart</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
