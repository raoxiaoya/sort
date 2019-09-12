<?php
/**
 * ----------------------------------------------------------
 * date: 2019/9/12 10:48
 * ----------------------------------------------------------
 * author: Raoxiaoya
 * ----------------------------------------------------------
 * describe: 归并排序
 * ----------------------------------------------------------
 */

function combineSort($arr)
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }

    $mid   = floor($len / 2);
    $left  = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    // 递归拆分
    $arr1 = combineSort($left);
    $arr2 = combineSort($right);

    return combine($arr1, $arr2);
}

// 合并并排序，从小到大
function combine($arr1, $arr2)
{
    $arr3 = [];
    while (!empty($arr1) && !empty($arr2)) {
        array_push(
            $arr3,
            $arr1[0] <= $arr2[0] ? array_shift($arr1) : array_shift($arr2)
        );
    }

    return array_merge($arr3, $arr1, $arr2);// $arr1 和 $arr2 至少有一个为空
}

$arr = [];
$len = 10000;
for ($i = 0; $i < $len; $i++) {
    $arr[$i] = rand(10, 100000);
}

$start = microtime(true);

$ret = combineSort($arr);

$end = microtime(true);

echo $end - $start;// 0.18463897705078
echo PHP_EOL;