<?php

$page_title = "MovieLanez";

require_once ('includes/header.php');
require_once ('includes/database.php');

$user_id = $session_id;
$comedy_id = $_GET['comedy_id'];
$review_rating = $_GET['review_rating'];
$review_string = $_GET['review_content'];
$review_content = mysqli_real_escape_string($conn, $review_string);

//define statement
$query_str = "INSERT INTO comedy_reviews VALUES (NULL, '$comedy_id', '$user_id', '$review_rating', '$review_content')";

//execute query
$result =  @$conn->query($query_str);
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="comedy.php">Movies</a></li>
        <li class="breadcrumb-item active" aria-current="page">Reviews</li>
    </ol>
</nav>
	
<h1 class="text-center">Add Review</h1>
	
<?php
//insertion errors
if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Insertion failed with $errno $errmsg<br/>\n";
    $conn->close();
    exit;
} else {
?>
<div class="container wrapper">
	<h1 class="text-center text-success">Your review has been added!</h1>
</div>
    
<?php

$conn->close();
}
header( "Refresh:3; url=comedy_details.php?id=$comedy_id", true, 303);
include_once('includes/footer.php');
?>