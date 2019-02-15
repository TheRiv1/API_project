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

//getMusicData.php?artists=

$artist = $_GET['artist']; // ....getMusicData.php?artist='';
// $artist = '"' .  $artist . '"';
$inst = $_GET['inst'];
$artist = str_replace(' ', ',', $artist);

// echo $artist;
//$song = $_GET['song'];
//$a = $_GET['artist name'];

//check in url .json?variable=
$url = "https://www.songsterr.com/a/ra/songs/byartists.json?artists=" . $artist;

//reads a file into a string.
$json =  file_get_contents($url);

//displays information about one or more variables
//var_dump($json);


//Takes a json encoded string and converts it into a PHP variable.
 $guitarTab = json_decode($json);


//var_dump($guitarTab);

 echo "<br>";
 echo "<br>";

  //for each tab as in song echo song 
  // foreach($guitarTab as $song)

  //  echo '<h1>' . $song -> id . '</h1>';
    // echo '<h1>' . $song -> title . '</h1>';

 if(count($guitarTab) > 10){
   $max = 10;
 }else{
   $max = count($guitarTab);
 }
  echo "<h3>" . "Bass Tab" . '</h3>';
 echo "<h1>" . $artist . "</h1>";
 echo '<br>';
 
 for ($i=0; $i < $max; $i++) { 
  // ->  access methods and properties of an object
  // $guitarTab[$i] -> title;


// echo $guitarTab[$i] -> id;
// echo "<br>";
 //      
echo '<div class="output debug">' . 
'<a href="http://www.songsterr.com/a/wa/bestMatchForQueryString?s='  . $guitarTab[$i] -> title . '&a='.   $artist . '&inst=' . $inst . '"> '. '<h4>' . $guitarTab[$i] -> title . '</h4>' . ' </a></div>'; 
 
}

?>      
</div>

</body>
</html>