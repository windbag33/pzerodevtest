<?php
$url = "https://www.worldometers.info/coronavirus/";
var_dump(parse_url($url));
//read json file from url in php
$readJSONFile = file_get_contents($url);
//convert json to array in php
$array = json_decode($readJSONFile);
// Initialize curl


$JsonParser = file_get_contents("Q2.json");
$myarray = json_decode($JsonParser, true);
var_dump($myarray); // prints array


?>

