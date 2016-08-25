<?php


    /**
     * 说明: 看效果就直接在浏览器中打开此文件 , 会自动下载 .csv
     * 获取数据, 装填到CSV, 导出CSV
     */
    function exportCsv()
    {
        $data = ['asd', 'asc', 'edf'];


        $fileName = 'deme.csv';
        $filePath = __DIR__ . $fileName; // 存放 .csv 文件的地方

        $fp = fopen($filePath, 'wb'); // 打开 .csv 文件, 如果文件不存在则新建

        foreach ($data as $key => $value) {
            $data[$key] = iconv('UTF-8', 'GBK', $value); // iconv() 编码转换, 如果有中文字在 .csv 中要以 GBK 编码
            fputcsv($fp, $data, ',', '"'); // 组成值: "asd","asc","edf"
        }
        fclose($fp);

        // 浏览器开始下载
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');

        echo file_get_contents($filePath);
        @unlink($filePath);
    }

    exportCsv();




?>
