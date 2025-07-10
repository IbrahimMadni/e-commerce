<?php
session_start();
include "../db.php";
echo "<ul>";
$total=0;
foreach($_SESSION['cart'] as $index=>$item)
{
$id=$item['productid'];
$qty=$item['qty'];

$product=$dbpdo->query("Select * from products where id='$id'")->fetch(PDO::FETCH_OBJ);
$total+=$product->price*$qty;
echo "

    <li class='single-product-cart'>
        <div class='cart-img'>
            <a href='shop-single-product.html'><img src='$product->photo' alt='Image' width='70' height='67'></a>
        </div>
        <div class='cart-title'>
            <h4><a href='shop-single-product.html'>$product->name</a></h4>
            <span> $qty × <span class='price'> $product->price </span></span>
        </div>
        <div class='cart-delete' id='$index'>
            <a  href='#/'><i class='fa fa-trash'></i></a>
        </div>
    </li>
    

";
}

echo "</ul>
<div class='cart-total'>
    <h4>Subtotal: <span>$$total</span></h4>
</div>
<div class='cart-checkout-btn'>
    <a class='cart-btn' href='showcart.php'>view cart</a>
    <a class='checkout-btn' href='shop-checkout.html'>checkout</a>
</div>";
?>