<form method="post">
<label for="us">Username:</label>
<input type="text" name="us" id="us"></br>
password:<input type="text" name="ps"></br>
<button type="submit" name="acc" >SUBMIT</button>
</form>



<?php
$c=mysqli_connect("localhost","root","");
mysqli_query($c,"create database if not exists signup");
mysqli_select_db($c,"signup");
mysqli_query($c,"create table if not exists sing(username   varchar(50),password varchar(50))");
if(isset($_POST["acc"])){
$name=$_POST["us"];
$pass=$_POST["ps"];
mysqli_query($c,"insert into sing(username,password) values('$name','$pass')");}
?>