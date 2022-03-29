<?php
$myfile = fopen("zadanie.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("zadanie.txt"));
fclose($myfile);
