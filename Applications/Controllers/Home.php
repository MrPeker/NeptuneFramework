<?php
class Home extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data = array();
        $data['style']      = STYLE_DIR . '/welcome.css';
        $data['font']       = 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400';
        $data['title']      = 'Neptune Framework - Welcome View';
        $data['neptune']    = 'NEPTUNE';
        $data['framework']  = 'FRAMEWORK';
        $data['version']    = 'V1.0';
        Load::view('welcome', $data);
    }
}