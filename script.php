<?php

include('index.html');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Start with Form Validation

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$submit = $_POST['submit'];

	if (isset($name, $email, $password) && ($name != 'username') && ($email != 'email') && ($password != 'password')) { 

		echo '<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<p>Hey ' . $name . '! Thanks for creating an account, we will send you a confirmation email to:
				 ' . $email . '</p></div></div>
				 <div class="col-md-3"</div>';

	} else {
		echo '<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<p>Please Fill out all the required fields.</p></div></div>
				 <div class="col-md-3"</div>';
	}


} // Close the main server request method POST

// test - adding lines because github didnt import


?>