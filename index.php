<?php

if(isset($_POST['pro_title']) && !empty($_POST['pro_title'])){
  $data_array = array("title"=>$_POST['pro_title'], "location"=>$_POST['pro_location'], "client"=>$_POST['pro_client'], "sector"=>$_POST['pro_sector']);
$inp = file_get_contents('https://harlan-downstepper.herokuapp.com/db.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data_array);
$jsonData = json_encode($tempArray);
file_put_contents('https://harlan-downstepper.herokuapp.com/db.json', $jsonData);
  $new_data = file_get_contents('https://harlan-downstepper.herokuapp.com/db.json');
  print_r(json_decode($new_data));
}
?>
