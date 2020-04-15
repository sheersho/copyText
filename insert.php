<html>
<head>
	<title>PHP insertion</title>
	<link href="css/insert.css" rel="stylesheet">
</head>
<body>
	<div class="maindiv">
		<!--HTML Form -->
		<div class="form_div">
			<div class="title">
				<h2>Sheersho's Form</h2>
			</div>
			<form action="insert.php" method="post">
				<!-- Method can be set as POST for hiding values in URL-->
				<h5 style="text-align:center">Please fill in your details</h5>
				<label>First Name:</label>
				<input class="input" name="first_name" type="text" value="">
                <label>Last Name:</label>
				<input class="input" name="last_name" type="text" value="">
				<label>Email:</label>
				<input class="input" name="email" type="text" value="">
				<label>Contact:</label>
				<input class="input" name="contact" type="text" value="">
				<label>Address:</label>
				<textarea cols="25" name="address" rows="5"></textarea><br>
				<input class="submit" name="submit" type="submit" value="Insert">
			</form>
		</div>
	</div>
</body>
</html>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'colleges');


if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	if($first_name !=''||$email !=''){
 
		$query = mysqli_query($connection,"insert into students(first_name,last_name, student_email, student_contact, student_address) values ('$first_name','$last_name','$email', '$contact', '$address')");
        
		echo "<br/><br/><span>Data Inserted successfully...!!</span>";
	}
	else
    {
		echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
	}
}
mysqli_close($connection);
?>

