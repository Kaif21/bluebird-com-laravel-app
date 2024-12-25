@extends('master.website')
@section('body')
    <!-- Start Billing Details Form -->
    <div class="container my-5">
        <form class="billing-form" action="{{ route('checkout.new-order') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        <h3 class="billing-title mt-20 mb-10">Billing Details</h3>
                        <textarea placeholder="Delivery Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Order Notes'" required
                            class="common-textarea" name="delivery_address"></textarea>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mt-10 p-2 bg-dark rounded">
                                        <input class="pixel-radio" type="radio" id="check" name="payment_method"
                                            value="COD">
                                        <label for="check" class="text-white">Cash on delivery</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mt-10  p-2 bg-dark rounded">
                                        <input class="pixel-radio" type="radio" id="check" name="payment_method"
                                            value="Online">
                                        <label for="check" class="text-white">Online payments</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="order-wrapper mt-50">
                        <h3 class="billing-title mb-10">Your Order</h3>
                        <div class="order-list">
                            <div class="list-row d-flex justify-content-between">
                                <div>Product</div>
                                <div>Total</div>
                            </div>
                            @php($sum = 0)
                            @foreach (Cart::content() as $item)
                                <div class="list-row d-flex justify-content-between">
                                    <div>{{$item->name}}</div>
                                    <div>x {{$item->qty}}</div>
                                    <div>{{ $itemTotal = $item->price * $item->qty }}</div>
                                </div>
                                @php($sum = $sum + $itemTotal)
                            @endforeach
                            <div class="list-row d-flex justify-content-between">
                                <h6>Shipping</h6>
                                <div>{{ $shipping = 100 }}</div>
                            </div>
                            <div class="list-row d-flex justify-content-between">
                                <h6>Tax</h6>
                                <div>{{round( $tax = $sum * 0.15 )}}</div>
                            </div>
                            <div class="list-row d-flex justify-content-between">
                                <h6>Total</h6>
                                <div class="total">{{ round($orderTotal = $sum + $tax + $shipping) }}</div>
                            </div>
                            <button class="view-btn color-2 w-100 mt-20 text-center" type="submit"><span>Proceed to
                                    Checkout</span></button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <!-- End Billing Details Form -->
@endsection
