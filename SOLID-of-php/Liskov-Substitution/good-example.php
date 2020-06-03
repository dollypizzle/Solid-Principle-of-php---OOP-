<?php

interface LessonRepositoryInterface {

    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {

    public function getAll()
    {
        return [];  // it is returning an array
    }
}

$file = new FileLessonRepository;
var_dump($file->getall());
