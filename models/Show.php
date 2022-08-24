<?php
class Show extends Db{
    public int $id; 
    public string $title; 
    public string $performer; 
    public string $date; 
    public int $showTypesId; 
    public int $firstGenresId; 
    public int $secondGenreId; 
    public string $duration; 
    public string $startTime;

    public function getShowList(){
        $query = 'SELECT `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') AS `date`, HOUR(`startTime`) AS `startTime` FROM `shows` ORDER BY `title` ASC';
        return $this->getQueryResult($query);
    }
}