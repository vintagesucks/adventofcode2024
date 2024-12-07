<?php

$similarity = 0;

foreach (new SplFileObject('input.txt') as $line) {
    if (! $line) {
        continue;
    };

    $values = explode('   ', $line);
    $left[] = (int) $values[0];
    $right[] = (int) $values[1];
}

$rightCounts = array_count_values($right);

foreach ($left as $value) {
    $similarity += $value * ($rightCounts[$value] ?? 0);
}

echo $similarity;
