

<h3> Pre Order </h3>
<?php 
$food = $_POST['food'];
$qty = $_POST['qty'];

echo "dish: $food <br>";
echo "qty: $qty <br>";
echo "total amount : ";
?>
<?php
include('./clsobj.php');

if ($food == 'dosa')
	{
    
	$dos = new food();
     $total= $dos->doss($qty);
    
    echo $total;
	}
	
else if ($food == 'chapathi')
	{
    
        $cha = new food();
        $total= $cha->chap($qty);
        echo $total;
  
} 
else {
   
    $dos = new food();
    $total= $dos->doss($qty);
    echo $total;
}
?>
<html>
<body>

<form name="myForm" action="order.php"  method="post">
<input type='hidden' name="tot" value="<?= $total?>" >
<input type='hidden' name="food" value="<?= $food?>" >
<input type='hidden' name="qty" value="<?= $qty?>" ><br>

<input type='submit' id="submit" value="order">

</body>
</html>