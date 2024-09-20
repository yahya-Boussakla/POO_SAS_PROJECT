<?php 

class logicManager {

    private $dataClass;


    public function __construct(){

        require(dirname(__FILE__).'/../data/dataManager.php');    
        $this->dataClass = new dataManager();
       

    }

    public function addLivre($livre){


        $livres = $this->dataClass->getData();
        array_push($livres['livres'],$livre);
        $this->dataClass->setData($livres);

    }

}

$clas = new logicManager();
$data = [
    'name' => 'yahya',
];


$clas->addLivre($data);


?>