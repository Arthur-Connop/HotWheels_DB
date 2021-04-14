<?php
include "../include/config.php";

if(isset($_POST['model_id']))
{
    $sql = "INSERT INTO models (model_id, name, set_id, set_number, series_id, image) VALUES (?,?,?,?,?,?)";
    $odb->prepare($sql)->execute([$_POST['model_id'], $_POST['name'], $_POST['set_id'], $_POST['set_number'], $_POST['series_id'], $_POST['image']]);
}
?>