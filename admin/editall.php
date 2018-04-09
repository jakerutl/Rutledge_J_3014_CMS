<?php
	require_once('phpscripts/config.php');

?>

<?php
	require_once('phpscripts/config.php');
	if(isset($_GET['id'])) {
		//get the movie
		$tbl = "tbl_movies";
		$col = "movies_id";
		$id = $_GET['id'];
		$getMovie = getSingle($tbl, $col, $id);

	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="adminBody">

	<?php
		$tbl = "tbl_movies";
		$col = "movies_id";
		$id = $_GET['id'];
		echo single_edit($tbl, $col, $id);

		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "
		<img src=\"../images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
		<video controls>
		<source src=\"../videos/{$row['movies_trailer']}\">
		</video>
		";


		}else{
			echo "<p>{$getMovie}</p>";
		}
	?>
</div>
</body>
</html>
