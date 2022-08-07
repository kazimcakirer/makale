<?php 
class Settings {
    
    private $file;

    function setFile() {
        $this->file = dirname('.')."\app\settings.php";
    }

    function insert() {
        setFile();
        include $file;
        var_dump($test);
                
    }
    function save($content="") {
        $save = fopen($file, 'r+');
        $save1 = fread($save, filesize($file));
        fclose($save);
        
    }
}