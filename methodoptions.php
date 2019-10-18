<!doctype html>
<?php
	include "connect.php";
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Animated CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

			<!-- CSS Code -->
			<link rel="stylesheet" href="stylesheet.css" type="text/css" />

			<!-- JS Code for Scroll Top -->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
			<script src="scrolltop.js"></script>

	<title>UX Method Options</title>
</head>


<body id="top">


	<!--nav class="navbar navbar-dark bg-primary"-->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php"><img src="upload/UX-Logo.png" id="logo" alt="UX Logo" width="190" height="80" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="homepage.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="methodoptionsall.php">UX Methods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guide.php">Guide</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="resources.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Resources
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="resources.php">Latest Updates</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="resources.php#articles">Articles</a>
              <a class="dropdown-item" href="resources.php#papers">Papers</a>
              <a class="dropdown-item" href="resources.php#books">Books</a>
              <a class="dropdown-item" href="resources.php#videos">Videos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactpage.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Coming soon</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="index11.html" method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>


  <!-- Start of page-->
  <div class="container mt-5">
  <div class="row">
    <div class="col-12 mt-5">
      <h1 class="text-center mt-5 mb-2 animated infinite pulse delay-1s">Suggested UX Methods</h1>
    </div>
  </div>



  <?php

	if(isset($_POST['submit'])){
	echo "<br><p><h2>You have submitted the following choice </br></p></h2>";
	$option1 = filter_input(INPUT_POST, 'option1');
	$option2 = filter_input(INPUT_POST, 'option2');
	$option3 = filter_input(INPUT_POST, 'option3');

  echo "<h5>"."Challenge: ".$option1."</h5>";
	echo "<h5>"."Development Stage: ".$option2."</h5>";
	echo "<h5>"."Time constraints: ".$option3."</h5>";
}

//convert option_text to option_id
$ses_sql = mysqli_query($conn,"SELECT options_id FROM options WHERE options_text = '$option1' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$optionid_1 = $row['options_id'];
$ses_sql = mysqli_query($conn,"SELECT options_id FROM options WHERE options_text = '$option2' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$optionid_2 = $row['options_id'];
$ses_sql = mysqli_query($conn,"SELECT options_id FROM options WHERE options_text = '$option3' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$optionid_3 = $row['options_id'];
/*echo "<p>Option 1 ID is: ".$optionid_1."</p>";
echo "<p>Option 2 ID is: ".$optionid_2."</p>";
echo "<p>Option 3 ID is: ".$optionid_3."</p>";*/

//compare above answers input from user to table method_options
$ses_sql = mysqli_query($conn,"SELECT m.ux_methods_id, u.methods_name FROM method_options m, ux_methods u WHERE m.ux_methods_id = u.ux_methods_id AND (option1,option2,option3) = ('$optionid_1','$optionid_2','$optionid_3')");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$result=$row['methods_name'];
$resultid=$row['ux_methods_id'];
echo "<p><h2><br> Your suitable method is: ".$result."</p></h2><br>";


//user selected options store in DB table 'user_selected'
//then use to compare the columns of the options (1,2,3) table 'method_options'
//SELECT * FROM method_options m, user_selected u  WHERE u.option1 = m.option1 AND u.option2 = m.option2 AND u.option3 = m.option3
/*$data = "INSERT INTO test (`id`, `option1`, `option2`, `option3`)";
mysqli_query($conn,$data);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Added into user_selected table!";*/



//Start of method material

	if($result == true) {



				echo "<div class=row>

					      <div class=col-8>

					        	<div class=card mb-4>";

					//--Retrieve Image--

						$sql = "SELECT name FROM images WHERE ux_methods_id='$resultid'";

						$results = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);

						$image = $row['name'];
						$image_src = "download/".$image;

					echo"<br><img class=card-img-top src=".$image_src."></br>";

				echo "<div class=card-body>";
				echo "<h4 class=card-title>".$result."</h4>";
				//--Retrieve Text--
				$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='$resultid'";

				$results = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($results);

				$summary = $row['summary'];
				$text = $row['text'];
				$reference = $row['reference'];

				echo "<p><h5 class=card-text>".$summary."</h5></p>";
				echo "<p class=card-text>".$text."</p>";
				echo "<p class=card-text>".$reference."</p>";


						//--Retrieve File--

						$sql = "SELECT name FROM files WHERE ux_methods_id='$resultid'";

						$results = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);

						$file = $row['name'];
						$file_src = "download/".$file;


				echo "<button><a href=".$file_src.">Download Material</a></button>

				</div>";
		}
	 else {
		echo "0 results";
	}

?>

				<div class="card-footer text-muted">
					Posted on
					<?php
    				$currentDateTime = date('d-m-y H:i:s');
    				echo $currentDateTime;
						?>
						<a href="#">Vinat K.</a>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
								<div class="addthis_inline_share_toolbox"></div>
					</div>
						</div>
				</div>


				<!-- START OF RIGHT COLUMN -->
	      <div class="col-4">

	        <div class="card">
	          <h3 class="card-header mb-3">More Materials</h3>
	          <ul>
	            <li><a href="resources.php#articles">Articles</a></li>
	            <li><a href="resources.php#papers">Papers</a></li>
	            <li><a href="resources.php#books">Books</a></li>
							<li><a href="resources.php#videos">Videos</a></li>
	          </ul>
	        </div>

	        <div class="card mt-4">
	          <h3 class="card-header mb-3">Contact Us</h3>
	          <p class="ml-3">
	            📍 Nethergate, Dundee DD1 4HN<br>
							📧 v.khorramshahi@dundee.ac.uk<br>
							📞+123 456 78910
						</p>
	        </div>

	        <div class="card mt-4 mb-4">
	          <div class="card-body">
	            <h3 class="card-title">Subscribe Newsletter</h3>
							<p>Sign up and get exclusive updates on UX research & tips 📬</p>
							<form method="post" action="newsletter.php">
								<label><span class="required" type="text" name="email">*</span>Email</label>
								<input class="form-control mr-sm-2" type="text" name="email" required placeholder="kate.jil@example.com" aria-label="kate.jil@example.com">
								<input class="btn btn-primary mt-4" type="submit" value="Subcribe">
							</form>
	          </div>
	        </div>


	      </div>  <!--END RIGHT COLUMN-->


</div>
</div>

<!-- Back to top scroll -->
<p id="back-top">
	<a href="#top"><span></span>Back to Top</a>
</p>
      <!-- FOOTER -->
      <div class="footer bg-dark">
        <p class="text-center text-light mt-5 pb-5 pt-5">&copy; 2019 Vinat Khorramshahi &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
          &middot; <a href="#">Back to top</a>
					<a href="#"><img src="upload/iconfinder_facebook_circle_294710.svg" id="socialicon" alt="FB Logo" width="30" height="30" /></a>
					<a href="#"><img src="upload/iconfinder_twitter_circle_294709.svg" id="socialicon" alt="Twitter Logo" width="30" height="30" /></a>
					<a href="#"><img src="upload/iconfinder_instagram_1632517.svg" id="socialicon" alt="Insta Logo" width="30" height="30" /></a>
				</p>
      </div>
      </footer>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d6baa0bb55bcc57"></script>


      </body>
</html>
