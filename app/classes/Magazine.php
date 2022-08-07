<?php
class Magazine {
    function gets($db) {
        $gets = $db ->query('SELECT * FROM magazine')-fetchAll(PDO::FETCH_ASSOC);
        return $gets;

    }
    function get($db, $id) {
        $get = $db->query('SELECT * FROM magazine WHERE magazine_id='.$id)->fetch(PDO::FETCH_ASSOC);
        return $get;

    }
    function insert($user) {

    }
    function update($user) {
        
    }
}