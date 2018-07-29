<?php
require("db1.php");
$jsonData= getJSONFromDB("select * from registration");
//$jsonData='[{"id":"10","name":"test","cgpa":"9.99"},
//{"id":"123","name":"xyz","cgpa":"3.90"},
//{"id":"1256","name":"test2","cgpa":"2.30"}]';


$jsn=json_decode($jsonData,true);

foreach($jsn as $v){
	echo "Username: ".$v["username"]."<br>"."Gender:".$v["gender"]."<br>"."Email:".$v["email"]."<br>"." phone: ".$v["phone"]."<br>"."Address: ".$v["address"]."<br>"."City: ".$v["city"]."<br>"."District :".$v["district"]."<br>";
	//echo "<p>".$v->id."<br>".$v->name." with cgpa : ".$v->cgpa."</p>";
}
echo "<pre>";print_r($jsn);echo "</pre>";
?>