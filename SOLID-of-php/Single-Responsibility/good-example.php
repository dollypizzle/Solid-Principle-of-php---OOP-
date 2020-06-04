<?php

class Book {
 
    function getTitle() {
        return "A Great Book";
    }
 
    function getAuthor() {
        return "John Doe";
    }
 
    function turnPage() {
      return 'the next page';
    }
 
    function getCurrentPage() {
        return "current page content";
    }
 
}
 
class SimpleFilePersistence {
 
    function save(Book $book) {
        $filename = $book->getTitle() . ' - ' . $book->getAuthor();
        file_put_contents($filename, serialize($book));
    }
 
}


$book = new Book('Dollyp');
var_dump($book->turnPage());  

$simple = new SimpleFilePersistence;
var_dump($simple->save($book));