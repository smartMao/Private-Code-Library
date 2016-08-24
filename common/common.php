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
