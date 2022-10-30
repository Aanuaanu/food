
<!DOCTYPE html>
<html>
<head>
<title>Submit Form Using AJAX and jQuery</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>



$(document).ready(function(){
	
$("#submit").click(function(){
	
var name = $("#name").val();
var num = $("#num").val();

var pass = $("#pass").val();
var add = $("#add").val();

var dataString = '&name='+ name + '&pass='+ pass + '&num='+ num + '&add='+ add  ;


$.ajax({
type: "POST",
url: "controller.php",
data: dataString,
cache: false,
success: function(result){
alert('submitted successfully');
}
});

return false;
});
});

</script>


</head>
<body>

<form name="myForm" action=""  method="post">


<label for="nam">name:</label><br>
<input type='text' id="name" name="name" ><br><br>

<label for="num">number:</label><br>
<input type='tel' id="num" name="num" required><br><br>


<label for="mail">password:</label><br>
<input type='text' id="pass" name="pass"  required><br><br>

<label for="add">address:</label><br>
<input type='text' id="add" name="add" required ><br><br>


<input type='submit' id="submit" >

</body>
</html>