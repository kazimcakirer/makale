<?php

$like = [];
$equls = [];
$between = ' ';

if(get('kategori') && !empty(get('kategori')) ) {
	if(get('kategori') == 'Kategori Seç') {
		$error = 'Kategori Seç';
	} else {
		$equls[] = " kategori_adi='".get('kategori')."'";
	}
}

if(get('makale') && !empty(get('makale'))) {
	$like[] = " makale_adi LIKE '%".get('makale')."%' ";
}
if(get('dergi') && !empty(get('dergi'))) {
	$like[] = " dergi_adi LIKE '%".get('dergi')."%' ";
}
if(get('btarih') && get('starih')) {
    $between  = ' makale_tarih BETWEEN ' .get('btarih'). ' AND '. get('starih');
}

$where = '';
if(count($equls)>0 && count($like)>0) {
    $where = ' WHERE '.implode(' ', $equls).' && ('.implode(' || ', $like).')'.$between;
}
