<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Sheet</title>
</head>
<body>
	<div class="header debug">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">MusicTabs</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Bass</a></li>
      <li><a href="#">Drums</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
</div>
<form action="bass.php" method="GET">
	<input class="artist-link" type="hidden" name="s" >
	<input class="song-link" type="hidden" name="a">

</form>


<div>

<?php 

$a = $_GET['a'];
$s = $_GET['s'];
$url = "http://www.songsterr.com/a/wa/bestMatchForQueryString?s= &a=  &track=bass";

$json =  file_get_contents($url);
$guitarTab = json_decode($json);




?>
</div>

</body>
</html>