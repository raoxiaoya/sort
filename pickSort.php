<?php
/**
 * ----------------------------------------------------------
 * date: 2019/9/12 11:31
 * ----------------------------------------------------------
 * author: Raoxiaoya
 * ----------------------------------------------------------
 * describe: 直接选择排序算法
 * ----------------------------------------------------------
 */

function pickSort($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        $index = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] < $arr[$index]) {
                $index = $j;
            }
        }
        if ($index == $i) {
            continue;
        } else {
            $temp        = $arr[$index];
            $arr[$index] = $arr[$i];
            $arr[$i]     = $temp;
        }
    }

    return $arr;
}

$arr = [];
$len = 10000;
for ($i = 0; $i < $len; $i++) {
    $arr[$i] = rand(10, 100000);
}

$start = microtime(true);

$ret = pickSort($arr);

$end = microtime(true);

echo $end - $start;// 1.5686509609222
echo PHP_EOL;