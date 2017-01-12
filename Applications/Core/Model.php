<?php
class Model
{
    private $database;
    public function __construct(){
        $this->database = (new Database())->settings();
        $this->db = new PDO('mysql:host='.$this->database['host'].';dbname='.$this->database['database'].';charset='.$this->database['character'],$this->database['username'],$this->database['password']);
        return $this->db;
    }
}