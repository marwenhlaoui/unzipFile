<?php

/**
 * User: Marwen Hlaoui
 * Date: 02/02/2016
 * Time: 22:22
 */
class upload_file
{
    public function __construct($file,$dir){
        $this->up_file = $file;
        $this->to_file = $dir;

        $file = $this->file($file);
        $dir = $this->dir($dir,$file);
        $this->Upload($file->tmp,$dir);
        msg("success","en");

    }

    public function file(){
        $up_file = $this->up_file;
        $file = new stdClass();
        $file->name = $up_file['name'];
        $file->tmp = $up_file['tmp_name'];
        $file->error = $up_file['error'];
        $file->size = $up_file['size'];//oct
        $file->type = $up_file['type']; 
        return $file;
    }





    public function dir(){
        $folder = $this->to_file;
        $file = $this->file();
        $dir = $folder.'/'.$file->name;
        return $dir;
    }

    public function Upload(){ 
        $file = $this->file(); 
        $folder = $this->to_file.'/'.$file->name;
        $this->createFolder();
        return move_uploaded_file($file->tmp,$folder);
    }

    public function name(){ 
        $file = $this->file(); 
        return $this->to_file.'/'.$file->name;  
    }

    public function createFolder(){ 
        $path = $this->to_file; 
        
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
    }

    


}