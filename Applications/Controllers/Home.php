<?php
class Home extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data = array();
        $table = 'users';
        $userModel = Load::model('User');
        $data['user'] = $userModel->userList($table);
        Load::view('home.home', $data);
    }
}