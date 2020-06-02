<?php 

class VideoPlayer {
    public function play($file)
    {
        // play the video
    }
}

class AviVideoPlayer extends VideoPlayer {
    public function play($file)
    {
        if(pathinfo($file, PATHINFO_EXTENSION) !== 'avi')
        {
            throw new Exception;  // violateds the LSP
        }
    }
}

//------------------------------------------------

interface LessonRepositoryInterface {

    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {

    public function getAll()
    {
        return [];  // it is returning an array
    }
}

class DbLessonRepository implements LessonRepositoryInterface {

    public function getAll()
    {
        return lesson::all(); // violates the LSP  it is returning a collection
    }
}