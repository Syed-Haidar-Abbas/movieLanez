<?php

$page_title = "MovieLanez : Movies";

require_once ('includes/header.php');
require_once('includes/database.php');

$name = $_GET['movie'];

//select statement
$query_str = "SELECT * FROM $tblAction WHERE action_name LIKE '%" .$name. "%' OR action_bio LIKE '%" .$name. "%'";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
} else { //display results in a table
    ?>
	<div class="container wrapper">
		
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="movies.php">Movies</a></li>
				<li class="breadcrumb-item active" aria-current="page">Search Results</li>
			</ol>
		</nav>
		
	    <h1 class="text-center">Search Results</h1>
	    
	    <div class="row my-3">
			<div class="col-xs-4 col-xs-offset-8">
				<form action="<?=$_SERVER['PHP_SELF']?>" class="form-inline search-form" method="get" role="form">
						<div class="input-group">
							<input type="text" name="movie" id="movieSearch" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
							<button type="submit" class="btn btn-outline-primary">search</button>
						</div>
				</form>
			</div>
		</div>
    
    <?php 
    	$num_rows = mysqli_num_rows($result);
    	if ($num_rows == 0) {
    		echo "<p class='lead text-center'>No results found for <strong>". $name . "</strong>. Please search again.</p>";
    	} else {
        //insert a row into the table for each row of data
		$i = 0;
		while ( $result_row = $result->fetch_assoc() ) :
			$i++;
			if ($i == 1) :
	?>
			<div class="row">
			<?php endif; ?>
				<div class="col-xs-4">
					<div class="thumbnail">
						<div class="caption">
							<div class="text-center">
								<a href="action_details.php?id=<?php echo $result_row['action_id']?>">
									<img src="<?php echo $result_row['action_img'] ?>" />
								</a>
							</div>
								<h3 class="text-center">
									<?php
									echo "<a href='action_details.php?id=" . $result_row['action_id'] . "'>", $result_row['action_name'], "</a>";
									?>
								</h3>
								<p class="lead text-center"><?php echo $result_row['action_bio'] ?></p>
						</div>
					</div>
				</div>
		<?php if ($i == 3) : ?>
			</div>
		<?php $i=0; endif; endwhile; ?>
		</div>
	</div>
  <?php
		}
		// clean up resultsets when we're done with them!
	    $result->close();
	}
	
	// close the connection.
	$conn->close();
	
	include ('includes/footer.php');