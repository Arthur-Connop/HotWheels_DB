<?php
include '../include/config.php';
include 'getSet.php';
include 'getSeries.php';

if(isset($_GET['m']))
{
    $req = $_GET['m'];
    if($req == "one")
    {
        if(isset($_GET['id']))
        {
            $stmt = $odb->prepare("SELECT * FROM models WHERE model_id=?");
            $stmt->execute([$_GET['id']]); 
            $model = $stmt->fetch(PDO::FETCH_ASSOC);

            $json = '{ "data": [';
            $json .= json_encode($model);
            $json .= '] }';
            print($json);
        }
    }
    if($req == "all")
    {
        $data = $odb->query("SELECT * FROM models");
        //convert result resource to array
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        $json = '{ "data": [';
        
        foreach($result as $model)
        {
            $json .= '{';
            $json .= '"model_id": "'.$model['model_id'].'",';
            $json .= '"model_name": "'.$model['name'].'",';
            $json .= '"set_id": "'.get_set($model['set_id']).'",';
            $json .= '"set_number": "'.$model['set_number'].'",';
            $json .= '"series_id": "'.get_series($model['series_id']).'"';
            $json .= '},';
        }

        $json = rtrim($json, ",");
        $json .= '] }';
        print($json);
    }
}
?>