@extends('welcome')

@section('title','cart')

@section('content')




     <!-- Cart Start -->
     <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <!-- <th>Quantity</th> -->
                                        <!-- <th>Total</th> -->
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="../img/aimg/a1.jpg" alt="Image"></a>
                                                <p>Acrylic painting</p>
                                            </div>
                                        </td>
                                        <td>$99</td>
                                        <!-- <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td> -->
                                        <!-- <td>$99</td> -->
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="../img/wimg/w1.jpg" alt="Image"></a>
                                                <p>Watercolor painting</p>
                                            </div>
                                        </td>
                                        <td>$25</td>
                                        <!-- <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td> -->
                                        <!-- <td>$25</td> -->
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="../img/oimg/o1.jpg" alt="Image"></a>
                                                <p>Oil painting</p>
                                            </div>
                                        </td>
                                        <td>$150</td>
                                        <!-- <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td> -->
                                        <!-- <td>$150</td> -->
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="../img/gimg/g1.jpg" alt="Image"></a>
                                                <p>Gouache painting</p>
                                            </div>
                                        </td>
                                        <td>$75</td>
                                        <!-- <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td> -->
                                        <!-- <td>$75</td> -->
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="../img/aimg/a2.jpg" alt="Image"></a>
                                                <p>Acrylic painting</p>
                                            </div>
                                        </td>
                                        <td>$99</td>
                                        <!-- <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td> -->
                                        <!-- <td>$99</td> -->
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-4">
                    <div class="cart-page-inner">
                        <div class="row">
                
                            <div class="col-md-12">
                                <!-- <div class="coupon">
                                    <input type="text" placeholder="Coupon Code">
                                    <button>Apply Code</button>
                                </div> -->
                            </div>
                            <div class="col-md-12">
                                <div class="cart-summary">
                                    <div class="cart-content">
                                        <h1>Cart Summary</h1>
                                        <p>Sub Total<span>$99</span></p>
                                        <p>Shipping Cost<span>$1</span></p>
                                        <h2>Grand Total<span>$100</span></h2>
                                    </div>
                                    <div class="cart-btn">
                                        <button>Update Cart</button>
                                        <button> <a href="checkout.html" style=" text-decoration: none; color:whitesmoke;">Checkout </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

@endsection

