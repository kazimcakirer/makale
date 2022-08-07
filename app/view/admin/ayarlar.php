<?php require_once 'static/header.php';  ?>
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title m-t-0">Ayarlar</h4>
            <p class="text-muted font-14 m-b-20">
                Site ayarlarını düzenleyin.
            </p>

            <form action="#" method="POST">
                <div class="form-group">
                    <!-- <label for="userName"><i class="dripicons-store"></i> Site Adı<span class="text-danger">*</span></label> -->
                    <input type="text" name="webName" parsley-trigger="change" required="" placeholder="Site Adını Girin" class="form-control" id="webBaslik">
                </div>
                <div class="form-group">
                    <!-- <label for="userName">Site Açıklama<span class="text-danger">*</span></label> -->
                    <input type="text" name="webDescrition" parsley-trigger="change" required="" placeholder="Site Açıklamasını Girin" class="form-control" id="webAciklama">
                </div>
                <div class="form-group">
                    <!-- <label for="userName">Site Anahtar Kelimeler<span class="text-danger">*</span></label> -->
                    <input type="text" name="webKeywords" parsley-trigger="change" required="" placeholder="Site Açıklamasını Girin" class="form-control" id="webAciklama">
                </div>
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-custom waves-effect waves-light" type="submit">
                        Submit
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
<?php require_once 'static/footer.php'; ?>