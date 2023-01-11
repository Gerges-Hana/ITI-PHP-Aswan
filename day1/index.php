<!DOCTYPE html>
<html>
    <head>
        <title> contact form </title>
    </head>
    <style>
        .error {color: #FF0000;}
    </style>

    <body>


        <?php

$nameErr = $emailErr = $MesErr = "";
$name = $email = $message= "";
        // var_dump($_POST);

        // اتاكد ان الداتا جيه من خلال post 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name=$_POST["name"];
            $email=$_POST["email"];
            $message=$_POST["message"];

            // validat name methods 
            if(empty($_POST["name"] )){

                $nameErr="Name is empty";
            }
            else{
                if(strlen($name)>100){
                    $nameErr="your name must be less than 100 char";
                }
                $nameErr="";
            }


            // validation of email 
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                  }
              }
        
        
        
            // validat message methods 
            
              if(empty($_POST["message"] )){

                $MesErr="Message is Required";
            }
            else{
                if(strlen($message)>255){
                    $MesErr="your message must be less than 255 char";
                }
                $MesErr="";
                
            }

        
            
            }

        // if(count($_POST)>0){

            

        //     if(empty($name)||empty($email)||empty($message)){

        //         $error="some fields are empty!!";
        //     }

        //     else
        //         {
        //             if(strlen($name)>100){
        //         $error="name must be less than 100 characters  , ";
        //     }

        //     if(!filter_var($email,FILTER_VALIDATE_EMAIL )){
        //         $error=$error." Email is not valid";
        //     }
        // }
        // }

        ?>



        <h3> Contact Form </h3>
        <div id="after_submit">
            
        <?php 
        if($nameErr =="" && $emailErr ==""&& $MesErr == ""){
            echo  "<h2>Thank you for contacting Us</h2>";
            echo "<br>";
           foreach($_POST as $key => $value){
                echo "<strong>$key</strong>:$value"."<br>";
            }


            // Bonus Work 
            !$nameErr==""?$name="":$name=$name||!$emailErr==""?$email="":$email=$email||
            !$MesErr==""?$message="" :$message=$message;
            



        }

        ?>
        </div>

        <p><span class="error">


        </span></p>
        <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="<?php echo $name?>" size="30" />
                <span class="error">* <?php echo $nameErr;?></span>
                
                <br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php echo $email?>" size="30" />
                <span class="error">* <?php echo $emailErr;?></span>
                <br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea>
                <span class="error">* <?php echo $MesErr;?></span>
                <br />

            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
    </body>

</html>