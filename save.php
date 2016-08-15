<?php 
	if(isset($_REQUEST))
		{
			mysql_connect("localhost","root","");
			mysql_select_db("technical_test");
			error_reporting(E_ALL && ~E_NOTICE);

			$email		= $_POST['email'];
			$name		= $_POST['name'];
			$password	= $_POST['password'];

			$sql="INSERT INTO tbl_reg (email, name, password)VALUES ('$email','$name','$password')";
			$result=mysql_query($sql);
			if($result){
			echo "You have been successfully subscribed.";
		}
	}
?>