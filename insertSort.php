<?php
/**
 * ----------------------------------------------------------
 * date: 2019/9/10 17:44
 * ----------------------------------------------------------
 * author: Raoxiaoya
 * ----------------------------------------------------------
 * describe: 插入排序
 * ----------------------------------------------------------
 */

function insertSort($arr){
    $res = [];
    foreach($arr as $v){
        if(empty($res)){
            $res[0] = $v;
        }else{
            if($v <= $res[0]){
                array_splice($res, 0, 0, $v);
                continue;
            }
            if($v > $res[count($res) - 1]){
                array_push($res, $v);
                continue;
            }
            foreach($res as $key => $val){
                if($v <= $val){
                    array_splice($res, $key, 0, $v);
                    break;
                }
            }
        }
    }

    return $res;
}
// 4 10 12
$arr = [];
$len = 10000;
for ($i = 0; $i < $len; $i++) {
    $arr[$i] = rand(10, 100000);
}

$start = microtime(true);

$ret = insertSort($arr);

$end = microtime(true);

echo $end - $start;// 1.1439521312714
echo PHP_EOL;