<pre>
<?php

require_once __DIR__."/classe/Movie.php";

$primoFilm = new Movie("La Maledizione della Prima Luna", "2003");
$primoFilm->setActor("Johnny depp");

$secondoFilm = new Movie("Ritorno al Futuro", "1985");
$secondoFilm->setActor("Michael J. Fox");

var_dump($primoFilm);
var_dump($secondoFilm);

?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>


</body>
</html>