<?php
    require_once dirname(__FILE__).'../../db/DataBase.php';
    class BookDAO{
        private $data;
        public function __construct() {
            $this->data = new DataBase();
        }


        public function getBooks(){
            
            return $this->data->books;
        }

        public function addBook($books){
            $this->data->books = $books;
            $this->data->save();
        
        }

    }


?>