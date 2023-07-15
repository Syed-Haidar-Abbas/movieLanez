<?php
	$page_title = "MovieLanez";
	include_once('includes/header.php');
?>
<?php


require_once ('includes/header.php');
require_once ('includes/database.php');

//select statement
$query_str = "SELECT * FROM movies";

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
		<h1 class="text-center my-3">Latest Movies</h1>

		<?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row">
				<?php endif; ?>
				<div class="col-sm-4 my-3">
					<div class="card" style="width: 18rem;">
						<a href="moviedetails.php?id=<?php echo $result_row['movie_id']?>">
							<img src="<?php echo $result_row['movie_img'] ?>" class="card-img-top" alt="..." />
						</a>
						<div class="card-body">
							<p class="card-text">
								<?php
								echo "<a href='moviedetails.php?id=" . $result_row['movie_id'] . "'>", $result_row['movie_name'], "</a>";
								?>
							</p>
						</div>
					</div>
				</div>
				<?php if ($i == 3) : ?>
				</div>
				<?php $i=0; endif; endwhile; ?>
	</div>
	<?php
	// clean up result sets when we're done with them!
	$result->close();
}
// close the connection.
$conn->close();

include_once('includes/footer.php');
?>