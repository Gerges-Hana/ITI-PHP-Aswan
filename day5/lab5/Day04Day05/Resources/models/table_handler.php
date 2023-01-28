<?php
class table_handler implements Db { 
    private $link;
    private $table;

    public function __construct($table) {
        try{
            $this->set_table ($table);
        // $this-> link = mysqli_connect(DB_HOST , DB_NAME , DB_USER , DB_PASSWORD);
        $this-> link = mysqli_connect(host , user , pass , db);

        }

        catch (Exception $ex) {

            echo $ex ."the connection is not exist";

            // echo $ex->getMessege();
            // error_log($ex-->getMessege());
        }
        
    }
 
    public function connect($host , $user , $pass , $db){

    }

    public function set_table ($table){
        $this->table = $table;
    }

    public function select_record_by_id ($id){
        // $query = "select * from `items` where `id` = ".$glass_id;
        $query = "select  * from `".$this->table."`where`id`=".$glass_id;

        return $this->query($query);

    }

    public function select_records ($firist_record , $record_per_page){

        $query = "select  * from `".$this->table."`limit`=" .$firist_record ."," .$record_per_page;
        return $this->query($query);
        
    }

    private function query ($sql){
        $result = mysqli_query($this->link , $sql);
        $results = array();
    while($raw = mysqli_query_fetch_array($result)){

        $results[] = $raw;
    }
    if(count($results)=== 1 ) return $results[0];
    else return $results;


    }

}