<?php
		include('dbconn.php');
		session_start();
		$Email_Address = $_POST['Email_Address'];
		$Client_ID = $_POST['Client_ID'];

		$query = mysql_query("SELECT * FROM Clients WHERE Email_Address='$Email_Address' AND Client_ID='$Client_ID'")or die(mysql_error());
		$count = mysql_num_rows($query);
		$row = mysql_fetch_array($query);


		if ($count > 0){

		$_SESSION['Client_ID']=$row['Client_ID'];

		echo 'true';

		 }else{
		echo 'false';
		}

		?>
