<?php

$bandName = "one direction";
$songName = "what makes you beautiful";
$finalString = "one direction"." "."what makes you beautiful";

$ourFileName = "lyrics.txt";
$ourFileHandle = fopen($ourFileName, 'w+') or die("can't open file");
fwrite($ourFileHandle, $finalString);
fclose($ourFileHandle);

exec("python ./parsing.py");


echo "Completed Successfully";

?>
