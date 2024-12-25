@extends('master.website')
@section('body')
            <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Shopping Cart</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="index-2.html">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="cart.html">Shopping Cart</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

            <!-- Start Cart Area -->
            <div class="container mt-5">
                <div class="cart-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="ml-15">Product</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Price</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Quantity</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Total</h6>
                        </div>
                    </div>
                </div>
                @php ($sum=0)
                    @foreach ($products as $product)
                <div class="cart-single-item">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="product-item d-flex align-items-center">
                                <img src="{{asset($product->options->image)}}" alt="#">
                                <h6>{{$product->name}}</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-6">
                            <div class="price">{{$product->price}}</div>
                        </div>
                        <div class="col-md-2 col-6">
                            <div class="quantity-container d-flex align-items-center mt-15">
                                <input type="text" class="" value="{{$product->qty}}"/>

                            </div>
                        </div>
                        <div class="col-md-2 col-12">
                            <div class="total">{{$itemTotal = $product->qty*$product->price}}</div>
                        </div>
                    </div>
                </div>
                @php ($sum = $sum + $itemTotal)
                    @endforeach
                <div class="cupon-area d-flex align-items-center justify-content-between flex-wrap">
                    <a href="#" class="view-btn color-2"><span>Update Cart</span></a>
                </div>
                <div class="subtotal-area d-flex align-items-center justify-content-end">
                    <div class="title text-uppercase">Subtotal</div>
                    <div class="subtotal">BDT. {{$sum}}</div>
                </div>
                <div class="subtotal-area d-flex align-items-center justify-content-end">
                    <div class="title text-uppercase">Shipping</div>
                    <div class="subtotal">BDT. {{$shipping = 0}}</div>
                </div>
                <div class="subtotal-area d-flex align-items-center justify-content-end">
                    <div class="title text-uppercase">You Pay</div>
                    <div class="subtotal">BDT. {{$sum+$shipping}}</div>
                </div>
                <div class="shipping-area d-flex justify-content-end">
                    <divclass="d-inline-flex flex-column align-items-end">
                      <a href="{{route('checkout.index')}}" class="view-btn color-2 mt-10 rounded" type="submit"><span>Checkout</span></a>
                    </div>

                </div>
            </div>
            <!-- End Cart Area -->
@endsection
