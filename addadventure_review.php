<?php

$page_title = "MovieLanez";
require_once ('includes/header.php');
require_once('includes/database.php');


$adventure_id = $_GET['id'];

?>

	<div class="container wrapper">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="adventure.php">Movies</a></li>
				<li class="breadcrumb-item active" aria-current="page">Adding Reviews</li>
			</ol>
		</nav>
	
		<h1 class="text-center">Add Review</h1>
	
		<div class="row">
			<div class="col-xs-6 col-xs-offset-2">
				<form action="createadventure_review.php" method="get" class="form-horizontal" role="form">
					<input type="hidden" name="adventure_id" value="<?php echo $adventure_id; ?>"/>
					<div class="form-group my-3">
						<label class="col-sm-3 control-label text-right" for="addRating">Add Rating</label>
						<div class="col-sm-9">
							<select class="form-control" name="review_rating" id="addRating" required>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
					</div>
					<div class="form-group my-3">
						<label class="col-sm-3 control-label text-right" for="movieSearch">Review Text</label>
						<div class="col-sm-9">
							<textarea name="review_content" placeholder="Write Review" id="addReview" class="form-control"></textarea>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-3 my-3">
						<button type="submit" class="btn btn-primary">Add!</button>
					</div>
				</form>
			</div>
		</div>
		
	</div>

<?php

// close the connection.
$conn->close();
include_once('includes/footer.php');