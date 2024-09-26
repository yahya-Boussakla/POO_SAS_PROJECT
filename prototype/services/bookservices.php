<?php

namespace yahya\SERVICES;
    // require_once dirname(__FILE__)."/../DataAccess/livreDAO.php";
    use yahya\DATAACCESS\BookDAO;

class BookServices{

    private $data;

    public function __construct(){
        $this->data = new BookDAO();
    }

   

    public function addBook($book){
    
        $books = $this->data->getBooks();
        array_push($books,$book);
        $this->data->addBook($books);
    
    }

    public function getBooks(){
        return $list = $this->data->getBooks();
    }



    public function deleteBook($title){
        $books = $this->getBooks();
        $books = array_filter($books,function($book) use ($title){
            return $book->title != $title;
        });
        // var_dump($books);
        $this->data->deleteBook($books);


    }

    


}




?>