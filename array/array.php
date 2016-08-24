<?php

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
