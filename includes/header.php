<?php
//start session
@session_start();

//number of items in the shopping cart
$count=0;

//retrieve the cart content
if ( isset ( $_SESSION['cart'] ) ){
	$cart = $_SESSION['cart'];

	if  ( $cart ) {
		$items = explode(',', $cart);
		$count = count($items);
	}
}

//check to see if a user if logged in
$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login'])){
	$login = $_SESSION['login'];
}

if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
}

if (isset($_SESSION['role'])){
	$role = $_SESSION['role'];
}

if (isset($_SESSION['id'])) {
	$session_id = $_SESSION['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_title; ?></title>
  <script src="https://kit.fontawesome.com/f9e95c08d6.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="fa fa-film" aria-hidden="true"></i>MovieLanez</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movies.php">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews.php">Reviews</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="movies.php">Action</a></li>
            <li><a class="dropdown-item" href="adventure.php">Adventure</a></li>
            <li><a class="dropdown-item" href="comedy.php">Comedy</a></li>
            <li><a class="dropdown-item" href="sci_fi_fantasy.php">Sci-fi and Fantasy</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="horror.php">Horror</a></li>
          </ul>
        </li>
      </ul>
      <?php
				if ($role == 1) : ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="useraccount.php">ACCOUNT</a></li>
					<li class="nav-item"><a class="nav-link" href="addmovie.php">ADD MOVIE</a></li>
          <li class="nav-item"><a class="nav-link text-danger" href="logout.php">LOGOUT</a></li>
        </ul>
				<?php
				endif;
				if ($role == 2) : ?>
					<ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="useraccount.php">ACCOUNT</a></li>
          <li class="nav-item"><a class="nav-link text-danger" href="logout.php">LOGOUT</a></li>
        </ul>
				<?php
				endif;
				if (empty($login)) : ?>
					<ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="registration.php"><span class="fas fa-user"></span> Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginform.php"><span class="fas fa-sign-in-alt"></span> Login</a>
            </li>
          </ul>
				<?php endif; ?>

    </div>
  </div>
</nav>
			
			






