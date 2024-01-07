<?php
include '../database/dbconfig.php';
if(isset($_POST['add']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $text = $_POST['text'];
	 $sql = "INSERT INTO customer_comment (name,email,text)
	 VALUES ('$name','$email','$text')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
