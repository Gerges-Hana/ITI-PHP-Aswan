<?php
$view ="login";
$password=isset($_POST["password"])?$_POST["password"]:"";
$username=isset($_POST["username"])?$_POST["username"]:"";
$error="";
if(count($_POST[]> 0)) {
  
    $login =new login($username,$password);
    if(!$login->verify()){
        $error="username or password is not correct ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>login</h1>
    
</body>
</html>