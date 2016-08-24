
<?php 

/**
 * 手机号验证
 * @param int $mobile 手机号
 * @return bool
 */
function isMobile($mobile) {
    if (empty($mobile)) {
        return false;
    }
    return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
}
