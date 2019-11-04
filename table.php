<?php
include ('includes/tabledata.php');

if(isset($_POST['submit'])){
	$name =  mysqli_real_escape_string($conn,$_POST['name']);
	$mail =  mysqli_real_escape_string($conn,$_POST['email']);
	$phone =  mysqli_real_escape_string($conn,$_POST['phn']);
	$date =  mysqli_real_escape_string($conn,$_POST['date']);
	$tym =  mysqli_real_escape_string($conn,$_POST['time']);
	$member =  mysqli_real_escape_string($conn,$_POST['mem']);

	

	$query = "INSERT INTO `book`(`Name`, `email`, `phn`, `dt`, `tym`, `member`) VALUES ('$name','$mail','$phone','$date','$tym','$member')";
	$run = mysqli_query($conn,$query);
	if($run){
		echo "<script>window.open('book.php','_self')</script>";
	}
	else{
		echo "try again";
	}
   }
	





?>

