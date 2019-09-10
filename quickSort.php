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

function quickSort($data)
{
    $len = count($data);
    $i   = 1;
    $j   = $len - 1;

    if ($len > 2) {
        $f   = $data[0];
        while ($i < $j) {
            $l = $data[$i];
            $r = $data[$j];

            if ($r <= $f) {
                if ($l > $f) {
                    $data[$i] = $r;
                    $data[$j] = $l;
                    $j--;
                    $i++;
                } else {
                    $i++;
                    continue;
                }
            } else {
                $j--;
                continue;
            }
        }

        $i--;// 跳出循环之前做了自增操作，需自减
        $data[0]  = $data[$i];
        $data[$i] = $f;

        $d1 = quickSort(array_slice($data, 0, $i + 1));
        $d2 = quickSort(array_slice($data, $i + 1));

        return array_merge($d1, $d2);

    } elseif ($len == 2) {
        if ($data[0] > $data[1]) {
            $temp = $data[0];
            $data[0]  = $data[1];
            $data[1] = $temp;
        }
    }

    return $data;
}

$arr = [];
$len = 10000;
for ($i = 0; $i < $len; $i++) {
    $arr[$i] = rand(10, 100000);
}

$start = microtime(true);

$ret = quickSort($arr);

$end = microtime(true);

echo $end - $start;// 0.013572931289673
echo PHP_EOL;

