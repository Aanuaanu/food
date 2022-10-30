<?php
$servername = "localhost";
$username = "aanu";
$password = "123";
$dbname  = "food";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

 $name = $_POST['name'];
 $num = $_POST['num'];
 
 $pass = $_POST['pass'];
 $add = $_POST['add'];
 
 echo"$add";

$sql =  "INSERT INTO customer (name,phone,address,password) VALUES ('$name',' $num','$add','$pass')";




if ($conn->query($sql) === TRUE) {
  echo "insert successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        


?>