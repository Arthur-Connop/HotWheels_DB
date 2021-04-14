<?php
include 'config.php';

$model_total = $odb->query("SELECT COUNT(1) FROM models")->fetchColumn(0);
$set_total = $odb->query("SELECT COUNT(1) FROM sets")->fetchColumn(0);
$series_total = $odb->query("SELECT COUNT(1) FROM series")->fetchColumn(0);
$thunt_total = $odb->query("SELECT COUNT(1) FROM treasure_hunts")->fetchColumn(0);
?>