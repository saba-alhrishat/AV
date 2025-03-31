


@extends('welcome')

@section('title','checkout')

@section('content')





  <!-- Checkout Start -->
  <div class="checkout">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-inner">
                        <div id="cartItemsContainer">
                            <!-- Cart items will be loaded here -->
                        </div>

                        <div class="billing-address">
                            <h2>Billing Address</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" placeholder="Last Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" placeholder="E-mail" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="tel" placeholder="Mobile No" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <input class="form-control" type="text" placeholder="Address" required>
                                </div>
                              
                          
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-inner">
                        <div class="checkout-summary">
                            <h1>Cart Total</h1>
                            <div id="cartSummary">
                                <!-- Cart summary will be loaded here -->
                            </div>
                        </div>

                        <div class="checkout-payment">
                            <div class="payment-methods">
                                <h1>Payment Methods</h1>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-1" name="payment" checked>
                                        <label class="custom-control-label" for="payment-1">Cash on Delivery</label>
                                    </div>
                                    <div class="payment-content" id="payment-1-show">
                                        <p>
                                            Pay in cash when your order is delivered.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                        <label class="custom-control-label" for="payment-2">Click Cash</label>
                                    </div>
                                    <div class="payment-content" id="payment-2-show">
                                        <p>
                                            Secure online payment using Click Cash system.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn">
                                <button id="placeOrderBtn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

    @endsection