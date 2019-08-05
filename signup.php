<?php 
			include('dbconn.php');
				$username = $_POST['username'];
				$password = $_POST['password'];
				$firstname = $_POST ['firstname'];
				$lastname = $_POST ['lastname'];
				$idnumber = $_POST['idnumber'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$cellnumber = $_POST['cellnumber'];
				$streetname = $_POST['streetname'];
				$housenumber = $_POST['housenumber'];
				$city = $_POST['city'];
				$province = $_POST['province'];
				$postalcode = $_POST['postalcode'];
				$country = $_POST['country'];
				
				mysql_query("insert into user (username, password, firstname, lastname, idnumber, gender, email, cellnumber, streetname, housenumber, city, province, postalcode, country) values ('$username', '$password', '$firstname', '$lastname', '$idnumber', '$gender', '$email', '$cellnumber', '$streetname', '$housenumber', '$city', '$province', '$postalcode', '$country')");
			?>
			<script>
	alert('Successfully Signed Up! You can now Log in your Account');
	window.location = 'index.php';
</script>