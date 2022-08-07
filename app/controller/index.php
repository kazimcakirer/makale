<?php 

$s = get('s')&& get('s')>1 ? get('s') : 1;

$sayfada = 5; 

$toplam = $db 	-> query('SELECT COUNT(*) AS toplam FROM makale')
				-> fetch(PDO::FETCH_ASSOC)['toplam'];

$sayfalama = ceil($toplam / $sayfada);



if($s > $sayfalama) {
	$s = $sayfalama; 
}

$limit = ($s - 1) * $sayfada;


$sql = 'SELECT makale_id, makale_adi, dergi_adi, makale_tarih, makale_cilt, makale_ozet, makale_yazar, makale_yol, makale_resim, makale_aciklama, makale_kelime, makale_link, kategori_adi FROM makale  INNER JOIN dergi ON makale.makale_dergi= dergi.dergi_id INNER JOIN kategori ON dergi.dergi_kategori=kategori.kategori_id  LIMIT  '.$limit.', '.$sayfada;


$querys = $db-> query($sql)-> fetchAll(PDO::FETCH_ASSOC);
require view('index');