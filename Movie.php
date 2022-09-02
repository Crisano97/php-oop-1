<?php 

class Movie {
    private $title;
    private $plot;
    private $director;

    function __construct($_title, $_plot, $_director){
        $this->title = $_title;
        $this->plot = $_plot;
        $this->director = $_director;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getPlot(){
        return $this->plot;
    }
    public function getDirector(){
        return $this->director;
    }
}