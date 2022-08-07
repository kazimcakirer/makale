<?php

ob_start();
include_once '../system.php';

function insert($query, $array) {
    global $db;
    $querySQL = $db->prepare($query);
    $insert = $querySQL->execute($array);
    return $insert;
}

function getDir($path) {
    $dirs = glob($path);
    foreach ($dirs as $dir) {
        if (is_dir($dir)) {
            $subDirs = getDir($dir . "/*");
        } else if (is_file($dir)) {
            $file = explode("/", $dir);
            $gecici = explode(".", $file[count($file) - 1]);
            $file[count($file) - 1] = $gecici[0];
            $file[count($file)] = $dir;
            $file = array_filter($file);
            $file = array_values($file);
            if (count($file) == 5) {
                $query = "INSERT INTO dergi SET dergi_adi=?, dergi_yil=?, dergi_sayi=?, dergi_makale=?, dergi_yol=?";
                if (insert($query, $file))
                    echo "Eklendi<br>";
            }
        }
    }
}

getDir("*/");
