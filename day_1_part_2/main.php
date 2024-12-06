<?php

$fp = fopen("./input.txt", "r");

$left = [];
$right = [];

while (($line = fgets($fp)) !== false) {
    $arr = explode("   ", $line);
    $left[] = trim($arr[0]);
    $right[] = trim($arr[1]);
}

fclose($fp);

$leftOccurrences = array_count_values($left);
$rightOccurrences = array_count_values($right);

$c = 0;

foreach($leftOccurrences as  $number => $occurrence)
{
    $c += $number * $occurrence * ($rightOccurrences[$number]  ?? 0);
}

print "$c\n";



