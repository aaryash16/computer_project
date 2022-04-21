<?php 

$conn = mysqli_connect("localhost","root","P@ssw00rd","computer" );
if (!$conn) {
	echo "NotConnected";
}else{
	echo"connected";
}

?>