<!DOCTYPE html>
<?php
	include "connect.php";
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact us</title>


  <!-- Bootstrap core CSS -->
  <link href="startbootstrap-contact-page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="startbootstrap-contact-page/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="startbootstrap-contact-page/css/coming-soon.min.css" rel="stylesheet">

  <!-- CSS Code -->
  <link rel="stylesheet" href="stylesheet.css" type="text/css" />

</head>

<body>

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
          <li class="nav-item">
            <a class="nav-link" href="methodoptionsall.php">UX Methods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guide.php">Guide</a>
          </li>
          <li class="nav-item dropdown active">
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


  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="startbootstrap-contact-page/mp4/bg.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100 mt-5">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <p class="mt-4">For any questions or inquiries please fill in the below form
              and we will get back to you soon!</p>
            	<div><form method="post" action="message.php">
              <label><span class="required" type="text" name="name">*</span>Name</label>
              <input class="form-control mr-sm-2 mb-3" type="text" name="name" required placeholder="Kate Jil" aria-label="Kate Jil">
              <label><span class="required" type="text" name="profession" ></span>Profession</label>
              <input class="form-control mr-sm-2 mb-3" type="text" name="profession" placeholder="UX designer, developer" aria-label="UX designer, developer">
              <label><span class="required" type="text" name="email">*</span>Email</label>
              <input class="form-control mr-sm-2 mb-3" type="text" name="email" required placeholder="kate.jil@example.com" aria-label="kate.jil@example.com">
              <label><span class="required" type="text" name="subject">*</span>Subject</label>
              <input class="form-control mr-sm-2 mb-3" type="text" name="subject" required placeholder="" aria-label="">
              <label><span class="required" type="text" name="message">*</span>Message</label>
              <textarea class="form-control mr-sm-2 mb-1" id="exampleFormControlTextarea1" type="text" name="message" required placeholder="" aria-label=""></textarea>
              <input class="btn btn-primary mt-4 mb-3" type="submit" value="Send">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="startbootstrap-contact-page/vendor/jquery/jquery.min.js"></script>
  <script src="startbootstrap-contact-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="startbootstrap-contact-page/js/coming-soon.min.js"></script>

</body>

</html>
