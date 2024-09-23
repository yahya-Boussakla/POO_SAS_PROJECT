<?php
    require_once dirname(__FILE__)."/../DataAccess/livreDAO.php";

class BookServices{

    private $data;

    public function __construct(){
        $this->data = new BookDAO();
    }

   

    function addBook($book){
    
        $books = $this->data->getBooks();
        array_push($books,$book);
        $this->data->addBook($books);
    
    }

    function getBooks(){
        return $list = $this->data->getBooks();
    }

    


}




?>