<?php

class router
{
    private $pages = array("login", "home", "profile");
    private $requested_page;
    public function __construct()
    {
        $all_valid_views = array("login", "home", "prtofile");

        $this->requested_page = (isset($_GET["view"]) && in_array($_GET["view"],$this->pages)) ? $_GET["view"] : "home";


        $this->requested_page();
    }

    public function requested_page(){
        require_once("views/" .$this->requested_page.".php");
    }
}
