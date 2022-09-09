<?php
include_once("class/FL.php");
include_once("class/VT.php");
//$result = VT::table("corporate")->select(["corporate.id","corporate.title","corporate.description","categories.category"])
//->join("categories","category","id")
//->whereRaw("corporate.description LIKE ?",["%a%"])
//->get();
$result=VT::table("corporate")
        ->orderBy(["id","DESC"])
        ->first();

if($result!=false){
    echo $result->title."</br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sıfırdan Web Tasarım Admin Panel Projesi - Havva Zeynep Akdemir">
	<meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
	<meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
    <title>Admin Deneme</title>
</head>
<body>
    
</body>
</html>