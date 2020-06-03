<?php 

class VideoPlayer {
    public function play($file)
    {
        return 'playing the video';
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


// ---------------------------------------------------------------------

interface LessonRepositoryInterface {

    public function getAll();
}

class DbLessonRepository implements LessonRepositoryInterface {

    public function getAll()
    {
        return lesson::all(); // violates the LSP  it is returning a collection
    }
}


$db = new DbLessonRepository;
var_dump($db->getall());