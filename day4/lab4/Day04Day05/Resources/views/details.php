<?php
$glass = new table_handler ("items");
$glass->select_record_by_id($glass);
?>

<html>

<h2> <?php echo $glass ["product_name"] ?> </h2>

<div>
    <img src "images/<?php echo $glass["Photo"] ?> ">


</div>

</html>

