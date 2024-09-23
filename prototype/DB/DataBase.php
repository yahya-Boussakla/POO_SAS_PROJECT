<?php


class Database{

    private $jsonFilePath;

    public function __construct(){

        $this->jsonFilePath = dirname(__FILE__).'/DataBase.json';

    }


    public function getData(){
        $data = file_get_contents($this->jsonFilePath);
        return json_decode($data,true);
    }

    public function setData($data){
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($this->jsonFilePath, $json);
    }

}

// $class = new DataBase();
// var_dump($class);


?>