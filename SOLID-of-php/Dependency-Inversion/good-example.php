
<?php

interface EBook{
    function read();
}

// Low Level Class 1
class PDFBook implements EBook{

    function read() {
        return "reading a pdf book.";
    }
}

// Low Level Class 2
class EpubBook implements EBook {

    function read() {
        return "reading a epub book.";
    }
}


// High Level Class
class EBookReader {

    private $book;

    function __construct(EBook $book) {
        $this->book = $book;
    }

    function read() {
        return $this->book->read();
    }

}

$epub = new EpubBook();
$pdf = new PDFBook();
$book = new PDFBook();
$read = new EBookReader($book);

var_dump($epub->read());
var_dump($pdf->read());
var_dump($read->read());


