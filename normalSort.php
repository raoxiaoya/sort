<?php
/**
 * ----------------------------------------------------------
 * date: 2019/9/10 15:43
 * ----------------------------------------------------------
 * author: Raoxiaoya
 * ----------------------------------------------------------
 * describe: 普通的冒泡排序
 * ----------------------------------------------------------
 */

function normalSort($arr){
    $len = count($arr);

    for ($m = 0; $m < $len - 1; $m++) {
        for ($n = 0; $n < $len - $m - 1; $n++) {
            if ($arr[$n] > $arr[$n + 1]) {
                $temp        = $arr[$n];
                $arr[$n]     = $arr[$n + 1];
                $arr[$n + 1] = $temp;
            }
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

$ret = normalSort($arr);

$end = microtime(true);

echo $end - $start;// 4.0284831523895
echo PHP_EOL;