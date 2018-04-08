<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])) {
		//get the movie
		$tbl = "tbl_movies";
		$col = "movies_id";
		$id = $_GET['id'];
		$getMovie = getSingle($tbl, $col, $id);

	}

?>

<?php
$tbl = "tbl_post";
$posts = getAll($tbl);

if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $story = $_POST['story'];
  $result = addReview($title, $story, $release);
  $message = $result;
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<?php
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "
			<body class=\"detailMain\" style=\"background-image: url(images/{$row['movies_cover']});\">
			<a href=\"index.php\" class=\"previous\">
				<i class=\"fa fa-arrow-circle-o-left\" style=\"font-size:36px\"></i>
			</a>

			<div class=\"detailBody\">
			<div class=\"posterVid\">
			<h2>{$row['movies_title']}</h2>
			<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
			<video autoplay controls>
    	<source src=\"videos/{$row['movies_trailer']}\">
  		</video>
			<h3>Release date {$row['movies_release']}</h3>
			<p>{$row['movies_storyline']}</p>

			</div>
			</div>
			</body>
			";

		}else{
			echo "<p>{$getMovie}</p>";
		}
	?>

</html>
