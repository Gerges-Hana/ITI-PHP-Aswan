<?php

Class Table_Handler implements Db
{
  public $table;
  public $link;

  public function __construct($table_name)
  {
    $this->link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $this->set_table($table_name);
  }

  public function set_table($table)
  {
    $this->table = $table;
  }

  public function select_record_by_id($id)
  {
    $query = "SELECT * FROM `{$this->table}` WHERE `id` = {$id}";
    $result = mysqli_query($this->link, $query);
    return mysqli_fetch_array($result) ;
  }

  public function select_records($start, $length)
  {
    
  }
}