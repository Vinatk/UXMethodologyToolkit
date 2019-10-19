<!doctype html>

<?php
	include "connect.php";
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Animated CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

			<!-- CSS Code -->
		  <link rel="stylesheet" href="stylesheet.css" type="text/css" />

		  <!-- JS Code for Scroll Top -->
		  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		  <script src="scrolltop.js"></script>


  <title>Success</title>


<style>
      body {
      background-image: url("upload/6.jpg");
      background-size:cover;
      background-attachment: fixed;
      background-color: #ffff66;
      }
</style>

</head>

<body id="top">

  <!-- Start of page-->
  <div class="container mt-5">
  <div class="row">
    <div class="col-12 mt-5">
      <h1 class="text-center mt-5 mb-2"></h1>
    </div>
  </div>

	<?php

	if($_POST["submit"]) {
	    $recipient="vinat.kk@gmail.com";
	    $subject="Message from Contact Form";
	    $sender=$_POST["name"];
	    $senderEmail=$_POST["email"];
	    $message=$_POST["message"];

	    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

	    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

	}
?>

<?php
$name = filter_input(INPUT_POST, 'name');
$profession = filter_input(INPUT_POST, 'profession');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');

if (!empty($name)){
if (!empty($email)){
if (!empty($subject)){
if (!empty($message)){

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{
$sql = "INSERT INTO message (name, profession, email, subject, message)
values ('$name','$profession', '$email', '$subject', '$message')";
if ($conn->query($sql)){
  echo "<h2>Your message has been sent!💌</h2>";
  }
  else{
  echo "Error: ". $sql ."
  ". $conn->error;
  }
  $conn->close();
  }
}
  else{
  echo "Message should not be empty";
  die();
  }
  }
  else{
  echo "Subject should not be empty";
  die();
  }
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
  ?>

  <p><a type="button" class="btn btn-primary mt-3" href="homepage.php">Return</a>
  </p>

  </div>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      </body>
  </html>
