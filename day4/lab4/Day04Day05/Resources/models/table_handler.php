<?php
class table_handler implements Db { 
    private $link;
    private $table;

    public function __construct($table) {
        $this->set_table ($table);
        $this-> link = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME);
    }
 
    public function connect($host , $user , $pass , $db){

    }

    public function set_table ($table){
        $this->table = $table;
    }

    public function select_record_by_id ($id){
        $query = "select * from `items` where `id` = ".$glass_id;
        // $query = "select  * from `".$this->table."`where`id`=".&glass_id;

        $result = mysqli_query($link , $query);
        $glass =  mysqli_query_fetch_array($result);
    }

    public function select_records ($start , $length){

    }



}