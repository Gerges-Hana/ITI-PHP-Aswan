<?php

require_once("./vendor/autoload.php");
$pages = array("all", "details");
$page = (isset($_GET["view"]) && in_array($_GET["view"], $pages)) ? $_GET["view"] : 0;


$glass_id = (isset($_GET["id"]) && is_numeric($_GET["id"])) ? $_GET["id"] : 17;

try {
  //  $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  //  $query = "SELECT * FROM `items` WHERE `id` = {$glass_id}";
  // $result = mysqli_query($link, $query);
  //  $glass = mysqli_fetch_array($result);
  //  mysqli_close($link);
  // var_dump($glass);
  // var_dump($page);
} catch (Exception $ex) {
  echo "no data";
}


if ($page === "details")
  require_once("./views/details.php");
else
  require_once("./views/all.php");
