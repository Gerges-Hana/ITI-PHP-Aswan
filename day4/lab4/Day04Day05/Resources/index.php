<?php

require_once ("vendor/autoload.php");
$pages = array("all" , "details");

$page = (isset($_GET["view"])?$_GET["view"]: $pages) ;

$glass_id = (isset($_GET["id"]) && is_numeric ($_GET["id"]) )? $_GET["id"] : 17;




if ($page === "details"){
    require_once ("views/details.php");
}
else{
    require_once("views/all.php");
}
?>