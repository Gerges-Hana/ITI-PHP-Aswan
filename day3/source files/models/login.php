<?php
class login{
    private $username;
    private $password;

    public function __construct($username ,$password){

        $this->username =$username;
        $this->password =$password;

    }

    public function verify(){
        if($this->username == correct_username   && $this->password == correct_password  ){
             return true;
        }else{
            return false;
        }
    }

    public function redirect_to_home(){
        $_SESSION["username"] = $this->username; 
        header("location: .home");
        exit();
    }



}

?>
