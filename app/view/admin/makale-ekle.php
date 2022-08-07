<?php require_once 'static/header.php';  ?>
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title m-t-0">Ayarlar</h4>
            <p class="text-muted font-14 m-b-20">
                Site ayarlarını düzenleyin.
            </p>

            <form action="#" novalidate="">
                <div class="form-group">
                    <label for="userName"><i class="dripicons-store"></i> Site Adı<span class="text-danger">*</span></label>
                    <input type="text" name="webName" parsley-trigger="change" required="" placeholder="Site Adını Girin" class="form-control" id="webBaslik">
                </div>
                <div class="form-group">
                    <label for="userName">Site Açıklama<span class="text-danger">*</span></label>
                    <input type="text" name="webDescrition" parsley-trigger="change" required="" placeholder="Site Açıklamasını Girin" class="form-control" id="webAciklama">
                </div>
                <div class="form-group">
                    <label for="userName">Site Anahtar Kelimeler<span class="text-danger">*</span></label>
                    <input type="text" name="webKeywords" parsley-trigger="change" required="" placeholder="Site Açıklamasını Girin" class="form-control" id="webAciklama">
                </div>
                <div class="form-group">
                    <p class="mb-2 mt-4 font-weight-bold text-muted">Default file input</p>
                    <input type="file" class="filestyle" data-btnclass="btn-light" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                    <div class="bootstrap-filestyle input-group">
                        <div name="filedrag" style="position: absolute; width: 100%; height: 38px; z-index: -1;"></div><input type="text" class="form-control " placeholder="" disabled="" style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;"> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="filestyle-0" style="margin-bottom: 0;" class="btn btn-light "><span class="buttonText">Choose file</span></label></span>
                    </div>
                </div>



                <div class="form-group text-right m-b-0">
                    <button class="btn btn-custom waves-effect waves-light" type="submit">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-light waves-effect m-l-5">
                        Cancel
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
<?php require_once 'static/footer.php'; ?>