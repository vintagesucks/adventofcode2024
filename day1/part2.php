<?php

$similarity = 0;

foreach (new SplFileObject('input.txt') as $line) {
    if (! $line) {
        continue;
    };

    [$left[], $right[]] = array_map('intval', explode('   ', $line));
}

$rightCounts = array_count_values($right);

foreach ($left as $value) {
    $similarity += $value * ($rightCounts[$value] ?? 0);
}

echo $similarity;
