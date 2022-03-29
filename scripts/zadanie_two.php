<?php

$file = 'zadanie.txt';
$text = "\n Nowe Zdanie";
file_put_contents($file, $text, FILE_APPEND);