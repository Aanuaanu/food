
<?php include('./header.php'); ?>
<!DOCTYPE html>
<html>
<body>



<p> select your food</p>

<form action="toorder.php" method ="POST">
  <label for="food" >dish:</label>
  <select name="food" id="food">
    <option value="dosa">dosa</option>
    <option value="chapathi">chapathi</option>
    <option value="idly">idly</option>
    
  </select><br><br>
  <label for="food">qty:</label>
  <input type="text" name="qty">
  <br><br>
  <input type="submit" value="ok">
</form>



</body>
</html>
