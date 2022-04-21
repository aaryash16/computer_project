<?php include'viewcontact/conn.php' ?>
<?php 

 		$name = $_GET['name'];
		$email = $_GET['mail'];
		$message = $_GET['message'];

		$insert = "INSERT INTO message (`name`, `email`, `message`) VALUES ('$name', '$email' , '$message')";
		$query = mysqli_query($conn,$insert);
 		
 		if ($query) {
 			header("location:viewcontact/");
 		}else{
 			echo"<br>Not Done";
 		}

 ?>