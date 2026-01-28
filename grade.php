<?php
$mark=90;
switch($mark){
case($mark>=90 && $mark<=100):
echo"S grade";
break;
case($mark>=70 && $mark<=89):
echo"A grade";
break;
case($mark>=50 && $mark<=69):
echo"B grade";
break;
case ($mark>=0 && $mark<=49):
echo"F grade";
break;
}
?>