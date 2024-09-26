<?php
    // require_once dirname(__FILE__)."/../entites/livre.php";
    // require_once dirname(__FILE__)."/../services/livreService.php";

    require(dirname(__FILE__).'/../lib/autoload.php');

    use yahya\SERVICES\BookServices;

    //  echo "entre LE TITRE : ";
    //  $nom = trim(fgets(STDIN));
    //  echo "entre LA ISBN : ";
    //  $ISBN = trim(fgets(STDIN));
    $books = new BookServices();
    $book = $books->getBooks();
    // $books->deleteBook('ayoub');
    // var_dump($book[0][0]->id);
    // $book = new \yahya\ENTITIES\Book(2, "ayoub", "ASE345EF");
    // $books->addBook($book);
    
    var_dump($book);
    // //  $bookService =

    

     




?>