<?php

class Page {
    protected $title;
   
    public getPage($title) {
      return $this->title;
    }
   
    public function formatJson() {
      return json_encode($this->getTitle());
    }
  }


  //-------------------------------------------