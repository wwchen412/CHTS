<?php

$counter = intval(file_get_contents("number.dat")) + 1;
$fp = fopen("number.dat", "w");
fwrite($fp, $counter);
fclose($fp);
echo $counter;


?>
