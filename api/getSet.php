<?php
function get_set($set)
{
    require '../include/config.php';
    if(isset($set))
    {
        $data = $odb->query("SELECT name FROM sets WHERE set_id = ".$set);
        //convert result resource to array
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result[0]['name'];
    } else {
        $data = $odb->query("SELECT * FROM sets");
        //convert result resource to array
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>