

<html>

<head>



<style>

table

{

border-style:solid;

border-width:2px;

border-color:black;

}
td {
    text-align:center;
}




</style>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body bgcolor="white">

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

 
$sql =  "select * from orders where cusid='$id' ";
$result = $conn->query($sql);
?>
<h3>My orders</h3>
<?php
echo "<table border='1'>

<tr>


<th>Order id</th>
<th>Total amount</th>
<th>Date</th>

</tr>";

while($row = $result->fetch_assoc())

  {
  echo "<tr>";
  
  echo "<td>" . $row['orderid'] . "</td>";
  echo "<td>" . $row['total'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  
  
  echo "</tr>";

  }

echo "</table>";

 

$conn->close();

?>

</body>

</html>