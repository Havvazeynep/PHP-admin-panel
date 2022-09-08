<?php
class VT extends Upload{
    const HOST="localhost";
    const USERNAME="root";
    const PASSWORD="";
    const DATABASE="phpadmin";
    protected static $connection;
    function __construct(){ self::__connect(); }

    public static function __connect(){
        try{
            self::$connection=new PDO("mysql:host=".self::HOST.";dbname=".self::DATABASE.";charset=utf8",self::USERNAME,self::PASSWORD);
        }catch(PDOException $error){
            $data=(object) ["type"=>"501","title"=>"Connection ERROR!","message"=>"Veritabanına bağlantı başarısız oldu.","code"=>$error->getMessage()];
            return self::view("connection",$data);
            exit();
        }
    }
    public static function view($pagename,$error){
        $fileHref="errors/".$pagename.".php";
        if(file_exists($fileHref))
            include_once($fileHref);
        elseif(file_exists("../".$fileHref))
            include_once("../".$fileHref);
    }
}
?>