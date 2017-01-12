<?php
//----------------------------------------------------------------------------------------------------
// NEPTUNE PHP FRAMEWORK
//----------------------------------------------------------------------------------------------------
//
// Author     : Emirhan ENGIN <whitekod.com2001@gmail.com>
// Copyright  : Copyright (c) 2016-2017, NEPTUNE FRAMEWORK
//
//----------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------
// CREATE A Load CLASS
//----------------------------------------------------------------------------------------------------
class Load
{
    //----------------------------------------------------------------------------------------------------
    // view FUNCTION
    //----------------------------------------------------------------------------------------------------
    // İlk parametre dosya adı, ikinci parametre isteğe bağlı data.
    // Parametre dizi olarak alınabilir. @ORN $data['neptune'];
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
    //----------------------------------------------------------------------------------------------------
    // model FUNCTION
    //----------------------------------------------------------------------------------------------------
    // Tek parametre alabilir, model adı.
    // Model sınıfı burada başladığı için dosya adı ile model adına dikkat edilmelidir.
    public static function model($modelName){
        require 'Applications/Models/'.$modelName.'.php';
        return new $modelName();
    }
}