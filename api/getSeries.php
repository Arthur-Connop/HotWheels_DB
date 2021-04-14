<?php
function get_series($series)
{
    require '../include/config.php';
    if(isset($series))
    {
        $data = $odb->query("SELECT name, year FROM series WHERE series_id = ".$series);
        //convert result resource to array
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result[0]['name']." ".$result[0]['year'];
    } else {
        $data = $odb->query("SELECT * FROM series");
        //convert result resource to array
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>