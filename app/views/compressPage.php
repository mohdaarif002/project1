<?php

require_once("/var/www/html/project1/vendor/autoload.php");
\Tinify\setKey("HBoUJ2WNtapiJvWjSBJoTEH5oB1BEF_4");
 
$dir = '/var/www/html/project1/public/compressed/';
$images = scandir($dir);
$images = array_diff($images, array('.', '..'));
 
foreach ($images as $image) {
    $source = \Tinify\fromFile($dir.$image);
    $source->toFile("/var/www/html/project1/public/Ucompressed/".$image);   
}
 
echo "All images are compressed.";


?>
