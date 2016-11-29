/**
  轮询抓取方法
*/
public function grab()
    {
        $id = I('param.id');  // 任务的开始值, 比如从下面数组的 18 开始, 就是下标为0
        $model = new model();
        $modelIds = '18,60,146,148,149,182,199,209,210,230,237,264,267,272,281,283,306,311,316';
        $modelIdsArray = explode(',', $modelIds);

        $currentId = $modelIdsArray[$id];
        $model->doAny($currentId, $currentId); // 每次任务要执行的方法
        if($modelIdsArray[$id+1]){ // 边界检测
            $id++; // 每次把 下标值加一
            echo $id . '/' . count($modelIdsArray);
            echo "<script>window.location = 'http://xxx.com/index.php/home/controllerl/func/grab?id=$id'</script>";
        }else{
            echo "完成";
        }

}
