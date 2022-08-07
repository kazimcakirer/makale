<?php
class Article
{
    function gets($db) {
        $gets = $db->query('SELECT * FROM article')->fetchAll(PDO::FETCH_ASSOC);
        return $gets;
    }

    function get($db, $id) {
        $get =$db->query('SELECT *  FROM article WHERE article_id='.$id)->fetch(PDO::FETCH_ASSOC);
        return $get;
    }
    
    function getHomepageView($count = 5)
    {
        global $db;
        $sql = 'SELECT * FROM article  
                    INNER JOIN magazine ON article.article_magazine= magazine.dergi_id 
                    INNER JOIN category ON magazine.dergi_kategori=category.kategori_id ORDER BY RAND()
                    LIMIT ' . $count;
        $querys = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $querys;
    }
    
}
