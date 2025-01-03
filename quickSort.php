<?php
/**
 * ----------------------------------------------------------
 * date: 2019/9/10 14:29
 * ----------------------------------------------------------
 * author: Raoxiaoya
 * ----------------------------------------------------------
 * describe: 快速排序算法
 * ----------------------------------------------------------
 */

function quickSort(&$arr, $low, $high)
{
    if ($low < $high) {
        $pivot = $arr[$high];
        $i = $low - 1;

        for ($j = $low; $j <= $high - 1; $j++) {
            if ($arr[$j] < $pivot) {
                $i++;

                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }

        $temp = $arr[$i + 1];
        $arr[$i + 1] = $arr[$high];
        $arr[$high] = $temp;

        $pi = $i + 1;

        quickSort($arr, $low, $pi - 1);
        quickSort($arr, $pi + 1, $high);
    }
}

$arr = [];
$len = 10000;
for ($i = 0; $i < $len; $i++) {
    $arr[$i] = rand(10, 100000);
}

$start = microtime(true);

quickSort($arr, 0, $len - 1);

$end = microtime(true);

echo $end - $start;
echo PHP_EOL;

