<?php 
$fileRead = file_get_contents("textfile.txt");
echo $fileRead;
echo nl2br("\n\n\n");

$fileArr 	= 	preg_match_all('/\[[^\]]*[^\]]\]/', $fileRead, $brackets);
foreach ($brackets[0] as $x) {
  echo "$x <br>";
  echo "<script>console.log('$x');</script>";
}
?>
