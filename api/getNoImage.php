<?php
include '../include/config.php';
/*
$i = $odb->prepare("INSERT INTO tags VALUES(NULL, :tname, :tcolor)");
$i->execute(array( ":tname" => $_POST['tag_name'], ":tcolor" =>  $_POST['options']."-".$_POST['slider'] ));

Car Json
{
	"api_key": "XXXXX",
    "toy_number": "GTC88",
    "toy_name": "X"
	"toy_set": "ART CARS",
	"toy_set_number": "4/10",
	"toy_series": "MAINLINE",
	"toy_year": 2021,
	"image": "XXXXXXX"
}
*/

$statement = "SELECT toy_number FROM cars WHERE image = 'N/A'";
$data = $odb->query($statement);
//convert result resource to array
$result = $data->fetchAll(PDO::FETCH_ASSOC);

//view the entire array (for testing)
print_r(json_encode($result));

?>