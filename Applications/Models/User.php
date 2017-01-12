<?php
class User extends Model
{
    public function __construct(){
        parent::__construct();
    }
    public function userList($table){
        $sql = 'SELECT * FROM ' . $table;
        return $this->db->query($sql);
    }
}