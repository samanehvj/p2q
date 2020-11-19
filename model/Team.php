<?php
class Team {
    public $teamList = array(
        array("name"=>"Samaneh0","email"=>"samaneh0@gmail.com"),
        array("name"=>"Samaneh1","email"=>"samaneh1@gmail.com"),
        array("name"=>"Samaneh2","email"=>"samaneh2@gmail.com"),
        array("name"=>"Samaneh3","email"=>"samaneh3@gmail.com")
    );

    public function getAll()
    {
        return $this->teamList;
    }
}