<?php
$id=$_POST['id'];
include "../db.php";
$product=$dbpdo->query("select * from products where id='$id'")->fetch(PDO::FETCH_OBJ);
echo "
<div class='product-quick-view-content'>
    <button type='button' class='btn-close' data-bs-dismiss='modal'><span>×</span></button>
    <div class='row row-gutter-0'>
        <div class='col-lg-6'>
            <div class='single-product-slider'>
                <div class='single-product-thumb'>
                    <div class='swiper single-product-quick-view-slider'>
                        <div class='swiper-wrapper'>
                            <div class='swiper-slide'>
                                <div class='thumb-item'>
                                    <img src='$product->photo' alt='Image' width='640' height='710'>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class='thumb-item'>
                                    <img src='$product->photo' alt='Image' width='640' height='710'>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class='thumb-item'>
                                    <img src='$product->photo' alt='Image' width='640' height='710'>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class='swiper-button-next'></div>
                        <div class='swiper-button-prev'></div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-lg-6'>
            <div class='product-details-content pt-3'>
                <h3 class='product-details-title'>$product->name</h3>
                <div class='product-details-review'>
                    <div class='product-review-icon'>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star-half-o'></i>
                    </div>
                    <button type='button' class='product-review-show'>156 reviews</button>
                </div>
                <p class='product-details-desc'>$product->description</p>
                <div class='product-details-color-list'>
                    <h4>Color:</h4>
                    <div class='color-list-check'>
                        <input class='form-check-input bg-red' type='radio' name='flexRadioColorList' id='colorLista1'>
                        <label class='form-check-label' for='colorLista1'>Red</label>
                    </div>
                    <div class='color-list-check'>
                        <input class='form-check-input bg-green' type='radio' name='flexRadioColorList' id='colorLista2' checked>
                        <label class='form-check-label' for='colorLista2'>Green</label>
                    </div>
                    <div class='color-list-check me-0'>
                        <input class='form-check-input bg-blue' type='radio' name='flexRadioColorList' id='colorLista3'>
                        <label class='form-check-label' for='colorLista3'>Blue</label>
                    </div>
                </div>
                <div class='product-details-pro-qty'>
                    <h4>QTY :</h4>
                    <div class='pro-qty'>
                        <input type='text' title='Quantity' value='01'>
                    </div>
                </div>
                <div class='product-details-price'>$$product->price<span class='price-old'>$$product->price</span></div>
                <div class='product-details-action'>
<button id='$product->id' type='button' class='product-action-btn addtocart'  >Add to cart</button>
                    <button type='button' class='product-action-wishlist' data-bs-toggle='modal' data-bs-target='#action-WishlistModal'>
                    <i class='fa fa-heart'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

";


?>