<?php


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
