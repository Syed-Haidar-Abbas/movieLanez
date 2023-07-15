<?php

require_once('includes/database.php');
$page_title = "Add Movie";
require_once ('includes/header.php');

?>
  <div class="container wrapper">
    <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Add Movie</li>
			</ol>
		</nav>

  <h1 class="text-center">ADD MOVIE</h1>
  <p class="lead text-center">Please add your desired movie</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="processmovie.php" method="get" enctype="text/plain">
      <div class="form-group my-3">
        <label for="newMovieName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newMovieName" name="movie_name" placeholder="Movie Title" required>
        </div>
      </div>
      <div class="form-group my-3">
        <label for="movieYear" class="col-sm-3 control-label">Year</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="movieYear" name="movie_year" placeholder="Year" required>
        </div>
      </div>
      <div class="form-group my-3">
        <label for="movieBio" class="col-sm-3 control-label">Storyline</label>
        <div class="col-sm-9">
          <textarea type="email" class="form-control" id="movieBio" name="bio" rows="4" placeholder="Enter Storyline" required></textarea>
        </div>
      </div>
      <div class="form-group my-3">
        <label for="newImage" class="col-sm-3 control-label">Movie Cover URL</label>
        <div class="col-sm-9">
          <input type="text" id="newImage" class="form-control" name="image" placeholder="Enter URL" required>
        </div>
      </div>
      <div class="form-group my-3">
        <label for="movieRating" class="col-sm-3 control-label">Movie Genre</label>
        <div class="col-sm-9">
          <input type="text" id="movieGenre" name="genre" class="form-control" required>
        </div>
      </div>
      <div class="form-group my-3">
        <div class="col-sm-offset-3 col-sm-9 text-center">
          <button type="submit" class="btn btn-success">Add Movie</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('includes/footer.php');
?>