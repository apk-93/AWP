<?php
$arr=array('First Name'=>'Rahul','Last Name'=>'Kumar','email'=>'rahul@email.com');
echo json_encode($arr);
$obj = '{"name":"John","age":"9","city":"New York"}';
var_dump(json_decode($obj));
var_dump(json_decode($obj,true));
?>