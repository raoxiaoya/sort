<?php
/**
 * ----------------------------------------------------------
 * date: 2019/9/10 18:18
 * ----------------------------------------------------------
 * author: Raoxiaoya
 * ----------------------------------------------------------
 * describe: 使用PHP标准库的堆排序
 * ----------------------------------------------------------
 */

class MyHeap extends SplHeap
{
    protected function compare($value1, $value2)
    {
        return $value2 - $value1;// 最小堆
    }
}

$start = microtime(true);

$m   = new MyHeap();
$max = 10000;
for ($i = 0; $i < $max; $i++) {
    $m->insert(rand(1, $max));
}

$t = [];
foreach ($m as $v) {
    $t[] = $v;
}

$end = microtime(true);

echo $end - $start;// 0.029752969741821
echo PHP_EOL;