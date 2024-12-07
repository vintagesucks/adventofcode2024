<?php

$distance = 0;

foreach (new SplFileObject('input.txt') as $line) {
    if (! $line) {
        continue;
    };

    $values = explode('   ', $line);
    $left[] = (int) $values[0];
    $right[] = (int) $values[1];
}

sort($left);
sort($right);

foreach ($left as $index => $value) {
    $values = [$value, $right[$index]];
    $distance += abs($values[0] - $values[1]);
}

echo $distance;
