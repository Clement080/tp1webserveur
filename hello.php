<?php

class Movie 
{
    private $name = null;
    private $description = null;
    private $time = null;
    private $releaseDate = null;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name= "")
    {
        $this->name = $name;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    public function getTime()
    {
        return $this->time;
    }
    
    public function setTime($time = "")
    {
        $this->time = $time;
    }
    
    public function getDate()
    {
        return $this->releaseDate;
    }
    
    public function __construct($name= "",$description = "",$time = "",$releaseDate = "")
    {
        $this->name = $name;
        $this->description = $description;
        $this->time = $time;
        $this->releaseDate = $releaseDate;
    }
    
    public function show()
    {
        echo $this->name.' '.$this->description.' '.$this->time.' '.$this->releaseDate;
    }
    
}

$movie = new Movie("Skarnado","Desc",80,"21.02.2102");
echo $movie->show();

