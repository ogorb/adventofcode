<?php

$fp = fopen("./input.txt", "r");

$left = [];
$right = [];

while (($line = fgets($fp)) !== false) {
    $arr = explode("   ", $line);
    $left[] = $arr[0];
    $right[] = $arr[1];
}

fclose($fp);

sort($left);
sort($right);

$d = 0;
for($i = 0; $i < count($left); $i++)
{
    $d += abs($left[$i] - $right[$i]);
}

print "$d\n";



