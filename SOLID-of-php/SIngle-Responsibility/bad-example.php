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

  function save() {
      $filename =  $this->getTitle(). ' - ' . $this->getAuthor();
      file_put_contents($filename, serialize($this));
  }


}

  $book = new Book;
  var_dump($book->turnPage());  


$book = new Book('Dollyp');
var_dump($book->getAuthor());  

$book = new Book('Dollyp');
var_dump($simple->save($book));