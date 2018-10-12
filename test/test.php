<?php

$filename = "text.txt";
$date = "5/11/2016 08:32 PM EST";
if (!touch($filename, strtotime($date))) {
echo 'Whoops, something went wrong...';
} else {
echo 'Touched file with success';
}