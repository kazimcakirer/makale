<?php require_once 'static/header.php';  ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0">Ayarlar</h4>
            <p class="text-muted font-14 m-b-20">
                Makalelelerin kategorisini oluşturarak düzenli bir yapı kurabilmek için gereklidir.
            </p>
            <?php
                if($message) {
                    echo '
                    <div class="alert alert-{$message[0]} bg-{$message[0]} text-white border-0" role="alert">
                        {$message[1]}
                     </div>
                     ';
                }
            ?>

            <form action="#"  method="POST">
                <div class="form-group">
                    <label for="KategoriAdi"> Kategori Adi<span class="text-danger">*</span></label>
                    <input type="text" name="kategoriAdi" parsley-trigger="change" required="" placeholder="Kategori Adini Giriniz." class="form-control" id="KategoriAdi">
                </div>
                <div class="form-group">
                    <label for="KategoriAciklama">Kategori Açıklama <span class="text-danger">*</span></label>
                        <textarea name="kategoriAciklama" id="KategoriAciklama" class="form-control" rows="5" placeholder="Kategoriyi Açıklamasını Girin" required=""></textarea>
                </div>
                <div class="form-group">
                    <label for="KategoriIcon"> Kategori İcon<span class="text-danger">*</span></label>
                    <input type="text" name="kategoriIcon" parsley-trigger="change"  placeholder="Kategori İcon Kodunu giriniz" class="form-control" id="KategoriIcon">
                </div>
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-custom waves-effect waves-light" type="submit">
                        Kaydet
                    </button>
                    <button type="reset" class="btn btn-light waves-effect m-l-5">
                        Temizle
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>


<?php require_once 'static/footer.php'; ?>