<?php

class PageController {

    public $team;
    public function teamListing() 
    {
        $this->team = new Team();
        include('view/team_list.php');
    }

    public function index()
    {
        include('view/team_index.php');
    }

}