<?php

// interface EBook{
//     function read();
// }
// Low Level Class 1
class PDFBook {
 
    function read() {
        return "reading a pdf book.";
    }
}

// Low Level Class 2
class EpubBook {

    function read() {
        return "reading a epub book.";
    }
}

// High Level Class
class EBookReader {
 
    private $book;
 
    function __construct(PDFBook $book) {
        $this->book = $book;
    }
 
    function read() {
        return $this->book->read();
    }
 
}


$book = new PDFBook();
$read = new EBookReader($book);
 
var_dump($read->read());

?>