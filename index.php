<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $servername = "localhost";
$username = "aanu";
$password = "123";
$dbname  = "food";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

        $sql =  "SELECT * FROM customer WHERE name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'";

       

$result = $conn->query($sql);

if($row = $result->fetch_assoc())

  {
    
    $_SESSION["id"] = $row['customerid'];
    $_SESSION["name"] = $row['name'];
	
  }
       else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
       // echo"hi";
    header("Location:menu.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form action="register.php" action="post">
    <button type="submit" style=" text-align: center">Register</button>
  </form>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">


</form>



</body>
</html>