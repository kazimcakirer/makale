<?php
if($_POST){
    $message =[];
    $kategori_adi = post('kategoriAdi');
    $kategori_aciklama = post('kategoriAciklama');
    $kategori_icom = post('kategoriIcon');
    if($kategori_adi && $kategori_aciklama) {
        $category = new Category;
        if($category->insert($db, [$kategori_adi, $kategori_aciklama, $kategori_icom])) {
            $message = ['succes','Başarı ile eklendi.'];
        } else {
            $message =['danger', 'Bir hata oluştu. Sistem yöneticisi ile görüşün. #1000'];
        }
    } else {
        $message = ['danger', 'Boş alanlar mevcut lütfen kontrol ediniz.'];
    }
}
require_once admin_view('kategori-ekle');