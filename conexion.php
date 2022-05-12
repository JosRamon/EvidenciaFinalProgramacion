<?php

//$conn = new mysqli("localhost","root","","loginvaidroll7");
$conn = new mysqli("localhost","root","","evidencia");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>