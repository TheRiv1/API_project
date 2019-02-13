<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="guitar.css">
	
	<title>Get Music Data</title>
</head>
<body>
	
<div class="header debug">
	
</div>

<table class="table table-striped">
	<h2>MusicSheet</h2>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Artist</th>
      <th scope="col">Song</th>
     </tr>
  </thead>
  <tbody>
   <?php 

//getMusicData.php?artists=

$artist = $_GET['artist']; // ....getMusicData.php?artist='';
$artist = '"' .  $artist . '"';
$artist = str_replace(' ', '%20', $artist);

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

  // 	echo '<h1>' . $song -> id . '</h1>';
		// echo '<h1>' . $song -> title . '</h1>';

 if(count($guitarTab) > 10){
 	 $max = 10;
 }else{
 	 $max = count($guitarTab);
 }
 
 for ($i=0; $i < $max; $i++) { 
	// ->  access methods and properties of an object
	// $guitarTab[$i] -> title;


// echo $guitarTab[$i] -> id;
// echo "<br>";

 	
echo $guitarTab[$i] -> title;
echo "<br>";
echo "<br>";
 }
?>
    </tbody>
  </table>
</div>
</body>
</html>