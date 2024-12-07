<?php

$distance = 0;

foreach (new SplFileObject('input.txt') as $line) {
    if (! $line) {
        continue;
    };

    [$left[], $right[]] = array_map('intval', explode('   ', $line));
}

sort($left);
sort($right);

foreach (array_combine($left, $right) as $value1 => $value2) {
    $distance += abs($value1 - $value2);
}

echo $distance;
