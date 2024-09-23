<?php 

class dataManager {

    // database file path 
    private $dbPath;


    public function __construct(){

        $this->dbPath = dirname(__FILE__).'/../db/db.json';

    }




    
    public function setData($data){
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($this->dbPath,$json);
    }


    public function getData(){
        $data = file_get_contents($this->dbPath);
        return json_decode($data,true);
    }

}




?>