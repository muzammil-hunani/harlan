<?php

if(isset($_POST['pro_title']) && !empty($_POST['pro_title'])){
  $data_array = array("title"=>$_POST['pro_title'], "location"=>$_POST['pro_location'], "client"=>$_POST['pro_client'], "sector"=>$_POST['pro_sector']);
$inp = file_get_contents('db.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data_array);
$jsonData = json_encode($tempArray);
file_put_contents('db.json', $jsonData);
  $new_data = file_get_contents('db.json');
  print_r(json_decode($new_data));
}
?>
