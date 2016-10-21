<?php

/**
 * 根据二维数组中的某个键进行排序
 * @param $list
 * @param $field
 * @return array
 */
function arr_sort($list, $field)
{
    // 取得列的列表
    foreach ($list as $key => $row) {
        $createDatelines[$key] = $row[$field];
    }
    // 将数据根据 create_dateline 降序排列
    // 把 $list 作为最后一个参数，以通用键排序
    array_multisort($createDatelines, SORT_DESC, $list);
    return $list;
}
