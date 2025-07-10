<?php include "sections/header.php"; ?>
<main class="main-content">
    
    
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area section-space">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Best Products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row mb-n6">
                <?php
                $products=$dbpdo->query("Select * from products limit 9")->fetchAll(PDO::FETCH_OBJ);
                foreach($products as $product)
                echo "<div class='col-sm-6 col-lg-4 mb-6'>
                    <!--== Start Product Item ==-->
                    <div class='product-item product-item-border'>
                        <a class='product-thumb' href='showproduct.php?id=$product->id'>
                            <img src='$product->photo' width='300' height='286' alt='Image-HasTech'>
                        </a>
                        <span class='badges'>New</span>
                        <div class='product-action'>
<button type='button' class='product-action-btn action-btn-quick-view' data-bs-toggle='modal' data-bs-target='#action-QuickViewModal' data-id='$product->id' data-photo='$product->photo'>
                            <i class='fa fa-expand'></i>
                            </button>
                            <button id='$product->id' type='button' class='product-action-btn action-btn-cart addtocart' >
                            <i class='fa fa-shopping-cart'></i>
                            </button>
                            <button type='button' class='product-action-btn action-btn-compare' data-bs-toggle='modal' data-bs-target='#action-CompareModal'>
                            <i class='fa fa-exchange'></i>
                            </button>
                        </div>
                        <div class='product-info'>
                            <h4 class='title'><a href='showproduct.php?id=$product->id'>
                            $product->name                                    </a></h4>
                            <div class='price'>$$product->price<span class='price-old'>$$product->price</span></div>
                            <button type='button' class='info-btn-wishlist' data-bs-toggle='modal' data-bs-target='#action-WishlistModal'>
                            <i class='fa fa-heart-o'></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>";
                ?>
                
                
                
                
                
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->
    
</main>
<?php include "sections/footer.php";?>

