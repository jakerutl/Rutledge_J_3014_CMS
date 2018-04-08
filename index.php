<?php
	require_once('admin/phpscripts/config.php');

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
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to the Finest Selection of Blu-rays on the internets!</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/reset.css">
</head>
<body class="indexBody">
<?php
	include('includes/nav.html');
?>

<div class="posterBody">
<div class="posters">

<ul class="movies">
<?php
	if(!is_string($getMovies)){
		while($row = mysqli_fetch_array($getMovies)){
			echo "
			<li>
			<a href=\"details.php?id={$row['movies_id']}\"><img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\"></a>
			<div>
			<br>
			<h2>{$row['movies_title']}</h2>
			<br>
			<p>{$row['movies_year']}</p>
			<br>
			<a href=\"details.php?id={$row['movies_id']}\">More Details</a><br><br>
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
<?php
	include('includes/footer.html');
?>

</body>
</html>
