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