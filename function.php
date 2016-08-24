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


/**
 * 接收用户输入的 [ 以逗号分隔的字符串 ], 返回数组
 * @param string $string 已逗号分隔的字符串 (例如: 123,asd,eff,qqcx)
 * @return array
 */
function analysis_string($string)
{
    // 由于 $string 是从用户方接收到的, 只依靠用户使用逗号分隔不现实, 可能输入了中文逗号之类的问题
    $batch    = str_replace( array( '，', '|', ', ', ' ,' ), ',', $string );
    $batchArr = explode( ',', $batch );

    $seiriList = array();
    foreach($batchArr AS $key=>$value){
        // 去除各种制表符
        $item = trim($batchArr[$key], " \t\n\r\0\x0B　");
        if ($item) {
            $seiriList[] = $item;
        }
    }
    return $seiriList;
}
