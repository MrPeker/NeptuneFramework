<?php
class Model
{
    //----------------------------------------------------------------------------------------------------
    // NEPTUNE PHP FRAMEWORK
    //----------------------------------------------------------------------------------------------------
    //
    // Author     : Emirhan ENGIN <whitekod.com2001@gmail.com>
    // Copyright  : Copyright (c) 2016-2017, NEPTUNE FRAMEWORK
    //
    //----------------------------------------------------------------------------------------------------
    private $database;
    public function __construct(){
        $this->database = (new Database())->settings();
        $this->db = new PDO('mysql:host='.$this->database['host'].';dbname='.$this->database['database'].';charset='.$this->database['character'],$this->database['username'],$this->database['password']);
        return $this->db;
    }
}