<?php

require_once ("vendor/autoload.php");
$pages = array("all" , "details");

$page = (isset($_GET["view"])?$_GET["view"]: $pages) ;

$glass_id = (isset($_GET["id"]) && is_numeric ($_GET["id"]) )? $_GET["id"] : 17;

$frist_record = (isset($_GET["start"]) && is_numeric($_GET["start"]) &&  $_GET["start"]>=0 )? $_GET["start"] : 0;

// $record_per_page

$common = "index.php?view=all.php&start=";
$next = $frist_record+record_per_page;
$next = $common.$next;

$prev = ($frist_record-record_per_page >=0)?$frist_record-record_per_page :0 ;
$prev = $common.$prev;




if ($page === "details"){
    require_once ("views/details.php");
}
else{
    require_once("views/all.php");
}
?>