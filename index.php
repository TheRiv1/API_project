<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
	 rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/search.js"></script>
	<title>GuitarTab</title>
</head>

<body>

	<h1 class="top">Music Tabs</h1>
	<h2 class="below-top">Find Artist or Songs</h2>
	
	<form action="getMusicData.php" method="GET">
	<div class="search">
		<input type="text" name="artist" id="searchBar" placeholder="Search...">
		<div class="icon"></div>
		</form>
	</div>
	</body>
</html>