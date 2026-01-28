<?php
$c=mysqli_connect("localhost","root","");
mysqli_query($c,"CREATE DATABASE IF NOT EXISTS charan");
mysqli_select_db($c,"charan");
mysqli_query($c,"CREATE TABLE IF NOT EXISTS cs(name VARCHAR(20))");
if(isset($_POST["click"])){
$name=$_POST["reg"];
mysqli_query($c,"INSERT INTO cs(name) values('$name')");
}
?>
<!doctype html>
<html>
<body>
<form method="post">
<input type="text" name="reg">
<button type="submit" name="click">INSERT</button>
</form>
</body>
</html>
