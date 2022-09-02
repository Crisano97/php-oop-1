<?php 

class Movie {
    private $title;
    private $plot;
    private $director;
    private $vote;

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
    public function setVote($_vote){
        if($_vote >=0 && $_vote <=5){
            $this->vote = $_vote; 
        } 
    }
    public function getVote(){
        return $this->vote; 
    }

    public function checkVote(){
        if($this->vote == null){
            echo "senza voto";
        } else {
            echo $this->vote;
        }
    }
}


