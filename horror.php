<?php

$page_title = "MovieLanez : Movies";

require_once ('includes/header.php');
require_once ('includes/database.php');

//select statement
$query_str = "SELECT * FROM horror";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table
	?>
	<div class="container">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Horror</li>
			</ol>
		</nav>

			<h1 class="text-center">Horror Movies</h1>

			<div class="row my-3">
				<div class="col-xs-4 col-xs-offset-8">
					<form action="searchhorror.php" method="get" class="form-inline search-form" role="form">
						<div class="input-group">
							<input type="text" name="movie" id="movieSearch" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
							<button type="submit" class="btn btn-outline-primary">search</button>
						</div>
					</form>
				</div>
			</div>
	</div>

	<div class="container">

		<?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row">
				<?php endif; ?>
				<div class="col-sm-4">
					<div class="card" style="width: 18rem;">
						<a href="horror_details.php?id=<?php echo $result_row['horror_id']?>">
							<img src="<?php echo $result_row['horror_img'] ?>" class="card-img-top" alt="..." />
						</a>
						<div class="card-body">
							<p class="card-text">
								<?php
								echo "<a href='horror_details.php?id=" . $result_row['horror_id'] . "'>", $result_row['horror_name'], "</a>";
								?>
							</p>
						</div>
					</div>
				</div>
				<?php if ($i == 3) : ?>
				</div>
				<?php $i=0; endif; endwhile; ?>
	</div>
	<div class="container my-3 text-center">
		<nav class="example" aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item">
				<a class="page-link" href="sci_fi_fantasy.php" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
				</li>
				<li class="page-item"><a class="page-link" href="movies.php">1</a></li>
				<li class="page-item"><a class="page-link" href="adventure.php">2</a></li>
				<li class="page-item"><a class="page-link" href="comedy.php">3</a></li>
                <li class="page-item"><a class="page-link" href="sci_fi_fantasy.php">4</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">5</a></li>
				<li class="page-item">
				<a class="page-link disabled" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
				</li>
			</ul>
		</nav>
	</div>
	<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>