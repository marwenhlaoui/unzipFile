<?php

/**
 * User: Marwen Hlaoui
 * Date: 02/02/2016
 * Time: 22:59
 */
class unzip_file
{
    public function __construct($archive,$dir){
        $this->archive = $archive;
        $this->lib = $dir; 

        $this->createFolder();
        $this->extract();

    }

    public function createFolder(){ 
        $path = $this->lib; 
        
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
    }

    public function extract(){
        $archive = $this->archive;
        $folder = $this->lib;
        $zip = new ZipArchive;
        $result = $zip->open($archive);
        if($result === true){
            $zip->extractTo($folder);
            $zip->close(); 
        } 
    }



}