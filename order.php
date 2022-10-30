
<?php
session_start();

$servername = "localhost";
$username = "aanu";
$password = "123";
$dbname  = "food";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

 
$id= $_SESSION["id"]; 
$qty = $_POST['qty'];
$tot = $_POST['tot'];
$food = $_POST['food'];
$date= date("D, d M Y");
 
$sql =  "select foodid from fooditem where fname='$food' ";



$result = $conn->query($sql);

if($row = $result->fetch_assoc())

{

$fid= $row['foodid'];
}




$sql =  "INSERT INTO orders (cusid,foodid,total,date) VALUES ('$id',' $fid','$tot','$date')";


if ($conn->query($sql) === TRUE) {
  echo "Your order placed";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        


?>