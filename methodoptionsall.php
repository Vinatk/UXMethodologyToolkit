<!doctype html>
<?php
	include "connect.php";
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="iso-8859-1">

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
  <div class="row-5 mt-5">
    <div class="col-12 mt-5">
      <div class="row mt-5">
				<div class="row mt-5">
			</div>
				</div>
    </div>
  </div>


  <?php



//Start of method material

				echo "<div class=row>

					      <div class=col>

					        	<div class=card mb-4>";


					//--Retrieve Image--

						$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='1'";

						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);

						$methodsname = $row['methods_name'];
						$image = $row['name'];
						$image_src = "download/".$image;

					echo"<br><img class=card-img-top src=".$image_src."></br>";

				echo "<div class=card-body>";
				echo "<h4 class=card-title>".$methodsname."</h4>";

				//--Retrieve Text--

				$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='1'";

				$results = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($results);

				$summary = $row['summary'];
				$text = $row['text'];
				$reference = $row['reference'];

				echo "<p><h5 class=card-text>".$summary."</h5></p>";
				echo "<p class=card-text>".$text."</p>";
				echo "<p class=card-text>".$reference."</p>";


						//--Retrieve File--

						$sql = "SELECT name FROM files WHERE ux_methods_id='1'";

						$results = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);

						$file = $row['name'];
						$file_src = "download/".$file;


				echo "<button><a href=".$file_src.">Download Material</a></button>";

				//--Liked a method--

				echo "<form method=post action=#";
				echo "<p><br><input type=submit name=liked value=Like!😄></p>";
				echo "</form>";


					if(isset($_POST['liked'])){

					$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='1'";

					$results = mysqli_query($conn,$sql);

					if ($conn->query($sql)){
						echo "You have liked this method!😄";
					}
					else{
					echo "Error: ". $sql ."
					". $conn->error;
					}

				}

				echo "</div>";

?>

				<div class="card-footer text-muted">
					Posted on
					<?php
    				$currentDateTime = date('d-m-y H:i:s');
    				echo $currentDateTime;
						?>
						<a href="#">Vinat K.</a>
					</div>
						</div>

					</div>


<!---Start method 2--->

   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='2'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);

												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title>Online User Interview</h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='2'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='2'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked2 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked2'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='2'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>

<!---Start method 3--->
   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='3'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);

												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title> Surveys </h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='3'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='3'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked3 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked3'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='3'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>
</div>

<?php

//Start of method 4 material

				echo "<div class=row>

					      <div class=col>

					        	<div class=card mb-4>";


					//--Retrieve Image--

						$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='4'";

						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);


						$image = $row['name'];
						$image_src = "download/".$image;

					echo"<br><img class=card-img-top src=".$image_src."></br>";

				echo "<div class=card-body>";
				echo "<h4 class=card-title>Focus Groups</h4>";

				//--Retrieve Text--

				$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='4'";

				$results = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($results);

				$summary = $row['summary'];
				$text = $row['text'];
				$reference = $row['reference'];

				echo "<p><h5 class=card-text>".$summary."</h5></p>";
				echo "<p class=card-text>".$text."</p>";
				echo "<p class=card-text>".$reference."</p>";


						//--Retrieve File--

						$sql = "SELECT name FROM files WHERE ux_methods_id='4'";

						$results = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);

						$file = $row['name'];
						$file_src = "download/".$file;


				echo "<button><a href=".$file_src.">Download Material</a></button>";

				//--Liked a method--

				echo "<form method=post action=#";
				echo "<p><br><input type=submit name=liked4 value=Like!😄></p>";
				echo "</form>";


					if(isset($_POST['liked4'])){

					$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='4'";

					$results = mysqli_query($conn,$sql);

					if ($conn->query($sql)){
						echo "You have liked this method!😄";
					}
					else{
					echo "Error: ". $sql ."
					". $conn->error;
					}

				}

				echo "</div>";

?>

				<div class="card-footer text-muted">
					Posted on
					<?php
    				$currentDateTime = date('d-m-y H:i:s');
    				echo $currentDateTime;
						?>
						<a href="#">Vinat K.</a>
					</div>
						</div>

					</div>


<!---Start method 5--->

   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='5'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);


												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title>Personas</h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='5'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='5'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked5 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked5'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='5'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>

<!---Start method 6--->
   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='6'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);


												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title>Needs statement</h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='6'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='6'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked6 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked6'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='6'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>
</div>

 <?php
//Start of method 7 material

				echo "<div class=row>

					      <div class=col>

					        	<div class=card mb-4>";


					//--Retrieve Image--

						$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='7'";

						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);


						$image = $row['name'];
						$image_src = "download/".$image;

					echo"<br><img class=card-img-top src=".$image_src."></br>";

				echo "<div class=card-body>";
				echo "<h4 class=card-title>Wireframes</h4>";

				//--Retrieve Text--

				$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='7'";

				$results = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($results);

				$summary = $row['summary'];
				$text = $row['text'];
				$reference = $row['reference'];

				echo "<p><h5 class=card-text>".$summary."</h5></p>";
				echo "<p class=card-text>".$text."</p>";
				echo "<p class=card-text>".$reference."</p>";


						//--Retrieve File--

						$sql = "SELECT name FROM files WHERE ux_methods_id='7'";

						$results = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);

						$file = $row['name'];
						$file_src = "download/".$file;


				echo "<button><a href=".$file_src.">Download Material</a></button>";

				//--Liked a method--

				echo "<form method=post action=#";
				echo "<p><br><input type=submit name=liked7 value=Like!😄></p>";
				echo "</form>";


					if(isset($_POST['liked7'])){

					$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='7'";

					$results = mysqli_query($conn,$sql);

					if ($conn->query($sql)){
						echo "You have liked this method!😄";
					}
					else{
					echo "Error: ". $sql ."
					". $conn->error;
					}

				}

				echo "</div>";

?>

				<div class="card-footer text-muted">
					Posted on
					<?php
    				$currentDateTime = date('d-m-y H:i:s');
    				echo $currentDateTime;
						?>
						<a href="#">Vinat K.</a>
					</div>
						</div>

					</div>


<!---Start method 8--->

   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='8'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);


												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title>Prototypes</h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='8'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='8'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked8 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked8'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='8'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>

<!---Start method 9--->
   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='9'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);


												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title>Product Roadmap</h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='9'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='9'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked9 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked9'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='9'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>

</div>

 <?php
//Start of method 10 material

				echo "<div class=row>

					      <div class=col>

					        	<div class=card mb-4>";


					//--Retrieve Image--

						$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='10'";

						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);


						$image = $row['name'];
						$image_src = "download/".$image;

					echo"<br><img class=card-img-top src=".$image_src."></br>";

				echo "<div class=card-body>";
				echo "<h4 class=card-title>Moderated Usability Testing</h4>";

				//--Retrieve Text--

				$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='10'";

				$results = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($results);

				$summary = $row['summary'];
				$text = $row['text'];
				$reference = $row['reference'];

				echo "<p><h5 class=card-text>".$summary."</h5></p>";
				echo "<p class=card-text>".$text."</p>";
				echo "<p class=card-text>".$reference."</p>";


						//--Retrieve File--

						$sql = "SELECT name FROM files WHERE ux_methods_id='10'";

						$results = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);

						$file = $row['name'];
						$file_src = "download/".$file;


				echo "<button><a href=".$file_src.">Download Material</a></button>";

				//--Liked a method--

				echo "<form method=post action=#";
				echo "<p><br><input type=submit name=liked10 value=Like!😄></p>";
				echo "</form>";


					if(isset($_POST['liked10'])){

					$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='10'";

					$results = mysqli_query($conn,$sql);

					if ($conn->query($sql)){
						echo "You have liked this method!😄";
					}
					else{
					echo "Error: ". $sql ."
					". $conn->error;
					}

				}

				echo "</div>";

?>

				<div class="card-footer text-muted">
					Posted on
					<?php
    				$currentDateTime = date('d-m-y H:i:s');
    				echo $currentDateTime;
						?>
						<a href="#">Vinat K.</a>
					</div>
						</div>

					</div>


<!---Start method 11--->

   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='11'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);


												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title>Unmoderated Usability Testing</h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='11'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='11'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked11 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked11'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='11'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>

<!---Start method 12--->
   <div class=col>
<?php
										echo "<div class=card mt-4 mb-4>";
											//--Retrieve Image--

												$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='12'";

												$result = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($result);


												$image = $row['name'];
												$image_src = "download/".$image;

											echo"<br><img class=card-img-top src=".$image_src."></br>";

										echo "<div class=card-body>";
										echo "<h4 class=card-title>Low Fidelity Prototype</h4>";

										//--Retrieve Text--

										$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='12'";

										$results = mysqli_query($conn,$sql);
										$row = mysqli_fetch_array($results);

										$summary = $row['summary'];
										$text = $row['text'];
										$reference = $row['reference'];

										echo "<p><h5 class=card-text>".$summary."</h5></p>";
										echo "<p class=card-text>".$text."</p>";
										echo "<p class=card-text>".$reference."</p>";


												//--Retrieve File--

												$sql = "SELECT name FROM files WHERE ux_methods_id='12'";

												$results = mysqli_query($conn,$sql);
												$row = mysqli_fetch_array($results);

												$file = $row['name'];
												$file_src = "download/".$file;


										echo "<button><a href=".$file_src.">Download Material</a></button>";

										//--Liked a method--

										echo "<form method=post action=#";
										echo "<p><br><input type=submit name=liked12 value=Like!😄></p>";
										echo "</form>";


											if(isset($_POST['liked12'])){

											$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='12'";

											$results = mysqli_query($conn,$sql);

											if ($conn->query($sql)){
												echo "You have liked this method!😄";
											}
											else{
											echo "Error: ". $sql ."
											". $conn->error;
											}

										}

										echo "</div>";

						?>


										<div class="card-footer text-muted">
											Posted on
											<?php
						    				$currentDateTime = date('d-m-y H:i:s');
						    				echo $currentDateTime;
												?>
												<a href="#">Vinat K.</a>
											</div>
												</div>
</div>
</div>

<?php
//Start of method 13 material

				echo "<div class=row>

					      <div class=col>

					        	<div class=card mb-4>";


					//--Retrieve Image--

						$sql = "SELECT i.name, u.methods_name FROM images i,ux_methods u  WHERE i.ux_methods_id='13'";

						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result);


						$image = $row['name'];
						$image_src = "download/".$image;

					echo"<br><img class=card-img-top src=".$image_src."></br>";

				echo "<div class=card-body>";
				echo "<h4 class=card-title>High Fidelity Prototype</h4>";

				//--Retrieve Text--

				$sql = "SELECT summary,text,reference FROM images WHERE ux_methods_id='13'";

				$results = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($results);

				$summary = $row['summary'];
				$text = $row['text'];
				$reference = $row['reference'];

				echo "<p><h5 class=card-text>".$summary."</h5></p>";
				echo "<p class=card-text>".$text."</p>";
				echo "<p class=card-text>".$reference."</p>";


						//--Retrieve File--

						$sql = "SELECT name FROM files WHERE ux_methods_id='13'";

						$results = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);

						$file = $row['name'];
						$file_src = "download/".$file;


				echo "<button><a href=".$file_src.">Download Material</a></button>";

				//--Liked a method--

				echo "<form method=post action=#";
				echo "<p><br><input type=submit name=liked13 value=Like!😄></p>";
				echo "</form>";


					if(isset($_POST['liked13'])){

					$sql = "UPDATE images SET liked= liked+1 WHERE ux_methods_id='13'";

					$results = mysqli_query($conn,$sql);

					if ($conn->query($sql)){
						echo "You have liked this method!😄";
					}
					else{
					echo "Error: ". $sql ."
					". $conn->error;
					}
					$conn->close();
				}

				echo "</div>";

?>

				<div class="card-footer text-muted">
					Posted on
					<?php
    				$currentDateTime = date('d-m-y H:i:s');
    				echo $currentDateTime;
						?>
						<a href="#">Vinat K.</a>
					</div>
						</div>

					</div>


</div>

				<!-- START OF RIGHT COLUMN -->
				<div class="container-fluid">
					 <div class="row">
	      <div class="col-sm-4">
	        <div class="card mt-4">
	          <h3 class="card-header mb-3">More Materials</h3>
	          <ul>
	            <li><a href="resources.php#articles">Articles</a></li>
	            <li><a href="resources.php#papers">Papers</a></li>
	            <li><a href="resources.php#books">Books</a></li>
							<li><a href="resources.php#videos">Videos</a></li>
	          </ul>
	        </div>
			</div>

					<div class="col-sm-4">
	        <div class="card mt-4">
	          <h3 class="card-header mb-3">Contact Us</h3>
	          <p class="ml-3">
	            📍 Nethergate, Dundee DD1 4HN<br>
							📧 v.khorramshahi@dundee.ac.uk<br>
							📞+123 456 78910
						</p>
	        </div>
						</div>

	<div class="col-sm-4">
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
