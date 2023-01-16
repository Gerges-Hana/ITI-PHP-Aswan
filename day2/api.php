<?php


$array=file("log.txt");
$myVal='';
foreach($array as $index =>$value){

    $vals=explode(',',$value);
   foreach($vals as  $val){

    echo "visit date = ".$vals[0];echo'</br>';
    echo "ip  = ".$vals[1];echo'</br>';
    echo "Email address = ".$vals[2];echo'</br>';
    echo "Name ".$vals[3];echo'</br>';
    

echo '</br>';
echo '______________________________';
echo '</br>';
   }
}

// echo '<pre>';
// Print_r($array);
// echo '</pre>';


?>