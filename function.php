<?php

/**
 * 返回当前的毫秒数
 */
function countExecTime()
{
    $time = explode ( " ", microtime () );
    $time = $time [1] . ($time [0] * 1000);
    $time2 = explode ( ".", $time );
    $time = $time2 [0];

    return $time;
}



/**
 * 根据二维数组中的某个键进行排序
 * @param $array
 * @param $key
 * @param string $order
 * @return array
 */
function arr_sort($array, $key, $order="DESC" ){
    $arr_nums = $arr = array();
    foreach($array as $k=>$v){
        $arr_nums[$k] = $v[$key];
    }
    if($order == 'asc'){
        asort($arr_nums);
    }else{
        arsort($arr_nums);
    }
    foreach($arr_nums as $k=>$v){
        $arr[$k] = $array[$k];
    }
    $arr = array_values($arr);
    return $arr;
}
