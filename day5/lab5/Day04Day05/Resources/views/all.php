<?php

$glass = new table_handler ("items");
$page_glasses = $glass->select_records("frist_record", "record_per_page");
?>

<html>

<body>
<table>

<thead>
<th>
name

</th>

<th>
code

</th>

<th>
image

</th>

<th>
price

</th>

<th>
Actions

</th>

</thead>

<?php foreach($page_glasses as $glass) { ?>

<tr>
<td>

<?php echo $glass["Product_name"];    ?>
</td>

<td>

<?php echo $glass["product_code"];    ?>
</td>

<td>

<?php echo $glass["photo"];    ?>
<div>
    <img src = "images/ <?php echo $glass["Photo"] ?> ">

</div>


</td>

<td>

<?php echo $glass["price"];    ?>
</td>

<td>
    <a href= "index.php?view = details $ id="> <?php echo $glass["id"]  ?> More </a>


</td>

</tr>
<?php } ?>

</table>
 

<h5> <a href = "<?php echo $Prev; ?>"> Prev </a> | <a href = "<?php echo $Next; ?>"> Next </a>  </h5>


</body>

</html>