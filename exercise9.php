<?php
$servername = "localhost";
$username = "root";
$password = "password@123";
$dbname = "assignment3";
try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$sql = "delete from customers where cust_id=4";
    	$conn->exec($sql);
    	echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>