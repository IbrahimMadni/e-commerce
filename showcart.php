<?php include "sections/header.php";?>
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area" data-bg-color="#F1FAEE">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page-header-content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                        <h2 class="page-header-title">All Trending Products</h2>
                    </div>
                </div>
                <div class="col-sm-4 d-sm-flex justify-content-end align-items-end">
                    <h5 class="showing-pagination-results">Cart Page</h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->
    <!--== Start Cart Area Wrapper ==-->
    <section class="cart-page-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table-wrap">
                        <div class="cart-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name">Product</th>
                                        <th class="width-price"> Price</th>
                                        <th class="width-quantity">Quantity</th>
                                        <th class="width-subtotal">Subtotal</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
            <?php

            $total=0;
            $subtotal=0;
foreach($_SESSION['cart'] as $index=>$item)
{
$id=$item['productid'];
$qty=$item['qty'];

$product=$dbpdo->query("Select * from products where id='$id'")->fetch(PDO::FETCH_OBJ);
$subtotal=$product->price*$qty;
$total+=$subtotal;

         echo "                           <tr>
                                        <td class='product-thumbnail'>
                                            <a href='shop-single-product.html'><img class='w-100' src='$product->photo' alt='Image' width='85' height='85'></a>
                                        </td>
                                        <td class='product-name'>
                                            <h5><a href='shop-single-product.html'>$product->name</a></h5>
                                        </td>
                                        <td class='product-price'><span class='amount'>$product->price</span></td>
                                        <td class='cart-quality'>
                                            <div class='product-details-quality'>
                                                <div class='pro-qty'>
            <input type='text' title='Quantity' value='$qty'>
                                                </div>
                                            </div>
                                        </td>
                                        <td class='product-total'><span>$$subtotal</span></td>
                                        <td class='product-remove' id='$index'><a href='#'><i class='fa fa-trash-o'></i></a></td>
                                    </tr>";

                                }

                                    ?>





                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="cart-shiping-update-wrapper">
                        <div class="cart-shiping-btn continure-btn">
                            <a class="btn btn-link" href="shop.html"><i class="fa fa-angle-left"></i> Back To Shop</a>
                        </div>
                        <div class="cart-shiping-btn update-btn">
                            <a class="btn btn-link" href="shop.html"><i class="fa fa-repeat"></i> Back To Shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Calculate shipping </h4>
                        <div class="calculate-discount-content">
                            <div class="select-style">
                                <select class="select-active">
                                    <option>Bangladesh</option>
                                    <option>Bahrain</option>
                                    <option>Azerbaijan</option>
                                    <option>Barbados</option>
                                    <option>Barbados</option>
                                </select>
                            </div>
                            <div class="select-style">
                                <select class="select-active">
                                    <option>State / County</option>
                                    <option>Bahrain</option>
                                    <option>Azerbaijan</option>
                                    <option>Barbados</option>
                                    <option>Barbados</option>
                                </select>
                            </div>
                            <div class="input-style">
                                <input type="text" placeholder="Town / City">
                            </div>
                            <div class="input-style mb-6">
                                <input type="text" placeholder="Postcode / ZIP">
                            </div>
                            <div class="calculate-discount-btn">
                                <a class="btn btn-link" href="#/">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cart-calculate-discount-wrap mb-40 mt-10 mt-md-0">
                        <h4>Coupon Discount </h4>
                        <div class="calculate-discount-content">
                            <p>Enter your coupon code if you have one.</p>
                            <div class="input-style mb-6">
                                <input type="text" placeholder="Coupon code">
                            </div>
                            <div class="calculate-discount-btn">
                                <a class="btn btn-link" href="#/">Apply Coupon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="grand-total-wrap mt-10 mt-lg-0">
                        <div class="grand-total-content">
                            <h3>Subtotal <span>$<?php echo $total ?></span></h3>
                            <div class="grand-shipping">
                                <span>Shipping</span>
                                <ul>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>
                                </ul>
                            </div>
                            <div class="shipping-country">
                                <p>Shipping to Bangladesh</p>
                            </div>
                            <div class="grand-total">
                                <h4>Total <span>$185.00</span></h4>
                            </div>
                        </div>
                        <div class="grand-total-btn">
                            <a class="btn btn-link" href="shop-checkout.html">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Cart Area Wrapper ==-->
    <?php include "sections/footer.php"?>