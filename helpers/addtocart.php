 <?php
session_start();
$id=$_POST['id'];
$found=0;
if(!empty($_SESSION['cart']))
{
	
$index=array_search($id, array_column($_SESSION['cart'], "productid"));
if($index!==false)
{
	$_SESSION['cart'][$index]['qty']++;
	$found=1;
}

}

if($found==0)
{
	$data=["productid"=>$id,"qty"=>1];
	$_SESSION['cart'][]=$data;

}

$totalitems=count($_SESSION['cart']);
echo $totalitems;
?>

