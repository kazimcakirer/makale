<?php
class Category {
    
    function gets($db) {
        $gets = $db ->query('SELECT * FROM kategori')->fetchAll(PDO::FETCH_ASSOC);
        return $gets;
    }
    function getWithId($db, $id) {
        $get = $db ->query('SELECT * FROM kategori WHERE kategori_id='.$id) ->fetch(PDO::FETCH_ASSOC);
        return $get;

    }
    function insert($db, $category) {
        $insert = $db->prepare("INSERT INTO kategori SET
        kategori_adi= :kategoriAdi,
        kategori_link= :kategoriLink,
        kategori_aciklama= :kategoriAciklama,
        kategori_icon = :kategoriIcon");
        $insert->execute([
            'kategoriAdi' => $category[0],
            'kategoriLink' => permalink($category[0]),
            'kategoriAciklama' => $category[1],
            'kategoriIcon' => $category[2]
        ]);
        if($insert) {
            return $category;
        } else {
            return false;
        }
    }
    function update($db, $id, $category) {
        $update = $db->prepare('UPDATE kategori SET
        kategori_adi = :kategoriAdi,
        kategori_link = :kategoriLink,
        kategori_aciklama = :kategoriAciklama,
        kategoriIcon = :kategoriIcon
        WHERE kategori_id = :kategoriId
        ');
        $update->execute([
            'kategoriAdi' => $category[0],
            'kategoriLink' => permalink($category[0]),
            'kategoriAciklama' => $category[1],
            'kategoriIcon' => $category[2],
            'kategoriId' =>$category[3]
        ]);
        
    }

    
}