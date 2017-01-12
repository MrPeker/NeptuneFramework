<?php
class Load
{
    public static function view($fileName, $data = false){
        if ($data == true){
            extract($data);
        }
        $fileName = explode('.', $fileName);
        $path = '';
        foreach ($fileName as $key => $value){
            $path .= $value.'/';
        }
        $path = rtrim($path, '/');
        require 'Applications/Views/'.$path.'.view.php';
    }
    public static function model($modelName){
        require 'Applications/Models/'.$modelName.'.php';
        return new $modelName();
    }
}