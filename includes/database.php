<?php
	//define parameters
	$host = "localhost";
	$port;
	$login = "root";
	$password = '';
	$database = "movielanez";
	$tblMovies = "movies";
	$tblAction = "actions";
	$tblAdventure = "adventure";
	$tblComedy = "comedy";
	$tblSci_fi_fantasy = "sci_fi_fantasy";
	$tblHorror = "horror";
	$tblUsers = "users";
	$tblReviews = "reviews";
	$tblAction_reviews = "action_reviews";
	$tblAdventure_reviews = "adventure_reviews";
	$tblComedy_reviews = "comedy_reviews";
	$tblSci_fi_fantasy_reviews = "sci_fi_fantasy_reviews";
	$tblHorror_reviews = "horror_reviews";
  
	//Connect to the mysql server
	$conn = @new mysqli($host, $login, $password, $database, $port);

	//Handle connection errors 
	if (mysqli_connect_errno() != 0) {
	    $errno = mysqli_connect_errno();
	    $errmsg = mysqli_connect_error();
	    die("Connect Failed with: ($errno) $errmsg<br/>\n");
	}
?>

