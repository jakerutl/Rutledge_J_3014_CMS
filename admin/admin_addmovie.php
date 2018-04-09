<?php
	require_once('phpscripts/config.php');

	$tbl = "tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit']) && $_POST['submit'] != null){
		$cover = $_FILES['cover'];
		$title = htmlspecialchars(addslashes($_POST['title']));
		$year = htmlspecialchars(addslashes($_POST['year']));
		$run = htmlspecialchars(addslashes($_POST['run']));
		$story = htmlspecialchars(addslashes($_POST['story']));
		$trailer = htmlspecialchars(addslashes($_POST['trailer']));
		$release = htmlspecialchars(addslashes($_POST['release']));
		$genre = htmlspecialchars(addslashes($_POST['genList']));
		$result = addMovie($cover, $title, $year, $run, $story, $trailer, $release, $genre);
		$message = $result;
	}
?>
<?php
if(isset($_GET['filter'])){
	$tbl = "tbl_movies";
	$tbl2 = "tbl_genre";
	$tbl3 = "tbl_mov_genre";
	$col = "movies_id";
	$col2 = "genre_id";
	$col3 = "genre_name";
	$filter =  $_GET['filter'];
	$getMovies = filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
}else{
	$tbl = "tbl_movies";
	$getMovies = getAll($tbl);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add a movie!</title>
  <!-- <link rel="stylesheet" href="css/main.css"> -->
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>

  <header class="topBar" >
  	<div class="logOutBtn">
  		<a href="../index.php?logout=true" class="logout-link">Logout</a>
      <a href="admin_index.php" class="logout-link">Home</a>
  	</div>
  </header>

	<div class="adminBody">
		<h1 class="mov">Add a Movie!</h1>
<div class="panelTwo">

	<?php if(!empty($message)){ echo $message;} ?>
	<form action="admin_addmovie.php" method="post" enctype="multipart/form-data">
		<label class="addLabels">Cover Image:</label>
		<input class="addCover" type="file" name="cover" value="">
		<br><br>
		<label class="addLabels">Movie Title:</label>
		<input class="addInput" type="text" name="title" value="">
		<br><br>
		<label class="addLabels">Movie Year:</label>
		<input class="addInput" type="text" name="year" value="">
		<br><br>
		<label class="addLabels">Movie Runtime:</label>
		<input class="addInput" type="text" name="run" value="">
		<br><br>
		<label class="addLabels">Movie Storyline:</label>
		<input class="addInput" type="text" name="story" value="">
		<br><br>
		<label class="addLabels">Movie Trailer:</label>
		<input class="addInput" type="text" name="trailer" value="">
		<br><br>
		<label class="addLabels">Movie Release:</label>
		<input class="addInput" type="text" name="release" value="">
		<br><br>
		<select class="genList" name="genList">
			<option>Please select a movie genre...</option>
			<?php
			while($row = mysqli_fetch_array($genQuery)){
				echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
			}
			?>
		</select><br><br>
		<button id="addInput" class="btnTwo" type="submit" name="submit" value="Add Movie">Add Movie</button>
	</form>

</div>

<h1 class="edit">Edit Movies!</h1>
<p class="editInfo">Simply click on a movie to edit it...</p>

	<div class="adminposters">



	<ul class="movies">
	<?php
		if(!is_string($getMovies)){
			while($row = mysqli_fetch_array($getMovies)){
				echo "
				<li>
				<a href=\"editall.php?id={$row['movies_id']}\"><img src=\"../images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\"></a><br><br>
				<div>
				<h2>{$row['movies_title']}</h2>
				<h3>{$row['movies_name']} </h3> <a class=\"delete\"href=\"phpscripts/caller.php?caller_id=deleteMovie&id={$row['movies_id']}\">Delete</a><br><br><br>
				</div>
				</li>
				";
			}
		}else{
			echo "<p class=\"error\">{$getMovies}</p>";
		}
	?>


	</ul>
	</div>
</div>

</body>
</html>
