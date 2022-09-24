<?php
include_once("class/FL.php");
include_once("class/DB.php");
/*$result = DB::table("corporate")->select(["corporate.id","corporate.title","corporate.description","categories.category"])
->join("categories","category","id")
->whereRaw("corporate.description LIKE ?",["%a%"])
->get();*/
$result=DB::table("corporate")
        ->orderBy(["id","DESC"])
        ->first();
/*
if($result!=false){
    echo $result->title."</br>";
}*/
/*$add=DB::table("corporate")->create([
    "title"=>"Kalite Politikası",
    "description"=>"Kalite Açıklama",
    "category"=>1
]);

$update=DB::table("corporate")->where("id",4)->update([
    "title"=>"Güncelleme başlığı",
    "description"=>"Güncel amakale"
]);*/
/*
$delete=DB::table("corporate")->where("id",4)->delete();

if($delete)
    echo "Kayıt başarıyla silindi";
else
    echo "Bir sorun oluştu";
*/

echo DB::primaryID("categories");

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