<?php
/**
 *
 *
 * Created by PhpStorm.
 * User: xuzhiqiao
 * Date: 2016/8/9
 * Time: 18:54
 */

namespace Admincp\Model;

use Think\Exception;
use Think\Model;


class XXXXModel extends Model
{
    /**
     * @param array $cond where条件数组
     * @param int $page  \Admincp\Library|Page 分页类的 page属性
     * @param int $limit
     * @param string $order
     * @param string $field
     * @return array
     */
    public function get_list_data( $cond = array(), $page = 1, $limit = 25, $order = '', $field = '' )
    {
        $data = $this->field($field)->where($cond)->page($page, $limit)->order($order)->select();
        return $data;
    }

    /**
     * 根据id来获取某一条数据记录
     * @param int $id
     * @return array
     */
    public function get_one_data($id = '')
    {
        $id = (int)$id;
        if (empty($id)) {
            return false;
        }

        $data = $this->where(['id' => $id])->find();
        return $data;
    }


    /**
     * 根据id, 删除某条数据
     * @param int $id
     * @return boolean
     */
    public function del_data($id)
    {
        $id = (int) $id;
        $result = $this->delete($id);
        if($result === false) return false;
        return true;
    }


    /**
     * 更新求购信息的数据
     * @param $where
     * @param $saveData
     * @return bool
     */
    public function updateRequire($where, $saveData)
    {
        if(empty($where)) return false;
        if(empty($saveData)) return false;

        $result = $this->where($where)->save($saveData);
        if($result === false) return false;
        return true;
    }


}
