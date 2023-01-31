<?php
	$result1=$_GET['num1'];
	$result2=$_GET['num2'];
	$operator=$_GET['operator'];
	$result=0;
	switch($operator){
	 case "None":
	  $result="Select Operator";
	  break;
	 case "Add":
	  $result=$result1+$result2;
	  break;
	 case "Subtract":
	  $result=$result1-$result2;
	  break;
	 case "Multiply":
	  $result=$result1 * $result2;
	  break;
	 case "Divide":
	  $result=$result1/$result2;
	  break; 
	  }
  
   echo "<script>alert('$result');history.go(-1);</script>";
?>