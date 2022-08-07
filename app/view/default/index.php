<?php require 'static/header.php'; ?>

<!-- form tab Area Area Start -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="top_banner">
                <h3>Hür Uygur</h3>
                <p>Dergilerimiz.....</p>
                <a href="#">Kayıt ol</a>
            </div>
        </div>
    </div>
</div>
<!-- form tab Area Area End -->                                     
<!-- form search -->
<div class="row search">
    <div class="container">
        <div class="col-12 title">
            <h3>Filtre</h3>
        </div>
        <div class="col-12">
            <form method="GET">
              <div class="form-row">
                <div class="col-3">
                    <label>Makale</label>
                    <input type="text" name="makale" class="form-control" placeholder="Makale arayınız.">
                </div>
                <div class="col-3 ">
                    <label>Dergi</label>
                    <input type="text" name="dergi" class="form-control" placeholder="Dergi arayınız.">
                </div>
                <div class="col-2">
                    <label>Kategori</label>
                    <select name="kategori" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option>Kategori Seç</option>
                        <option>Edebiyat</option>
                        <option>Sanat</option>
                        <option>Kültür</option>
                    </select>
                </div>
                <div class="col-2">
                    <label>Tarih</label>
                    <select  class="custom-select mr-sm-2" id="inlineFormCustomSelect" placeholder="">
                        <option>Tarihi Seç</option>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                    </select>
                </div>
                <div class="col-2">
                    <label>Cilt</label>
                    <select  name="cilt"class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option>Cilt Seç</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>  
            <div class="row">
                <div class="col " style="float:right; margin-top: 10px;">
                    <button type="submit"  name='search' value="1" class="btn btn-primary " style="float:right;">Uygula</button></div>            
                </div>

            </form>
        </div>
    </div>
</div>
<!-- /form serach -->
<!-- Form Area lISRT  Start -->
<section id="formList">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="header d-flex justify-content-between">
                                        <div class="d-flex align-self-center">
                                            <p>Makale - Yazar</p>
                                        </div>
                                    </div> 
                                </th>
                                <th>
                                    <div class="header d-flex justify-content-between">
                                        <div class="d-flex align-self-center">
                                           <p>Dergi İsmi</p>
                                       </div>
                                   </div>
                               </th>
                               <th>
                                   <div class="header d-flex justify-content-between">
                                    <div class="d-flex align-self-center">
                                       <p>Dergi Kategorisi</p>
                                   </div>
                               </th>
                               <th>
                                   <div class="header d-flex justify-content-between">
                                    <div class="d-flex align-self-center">
                                       <p>###</p>
                                   </div>
                               </th>
                           </tr>
                       </thead>
                       <tbody>
                        <?php foreach ($querys as $query) : ?>
                            <tr>
                                <td>
                                    <div class="box d-flex">
                                        <div class="boxContent d-flex align-self-center">
                                            <div class="innerbox">
                                                <p class="h5">
                                                 <?=$query['makale_adi']?>  
                                                 <span class="php" disabled>(<?=$query['makale_cilt'].'/'.$query['makale_tarih']?>)</span>

                                             </p>
                                             <p class="p"><?=$query['makale_yazar']?></p>
                                         </div>
                                     </div>
                                 </div>
                             </td>
                             <td>
                                <div class="box2">
                                    <?=$query['dergi_adi']?>
                                </div>
                            </td>
                            <td>
                                <div class="box2">
                                    <?=$query['kategori_adi']?>
                                </div>
                            </td>
                            <td>
                                <div class="box4">
                                    <a href="<?=SUBURL.'download/'.$query['makale_link']?>" class="btn btn-primary my-1">İndir</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="container">
                <div class="col-md-12 ">
                    <ul class="pagination pull-right">
                        <?php if($s>1) :?>
                            <li class="page-item"><a class="page-link" href="?s=<?=($s-1)?>"> << </a></li>
                            <?php else: ?>
                                <li class="page-item disabled"><a class="page-link" href="" aria-disabled="true"> << </a></li>
                            <?php endif; ?>
                            <?php for ($i=($s-2); $i < ($s+3); $i++) : ?>
                            <?php if($i>0 && $i<$sayfalama): ?>
                            <?php if($s==$i) : ?>
                                <li class="page-item active"><a class="page-link" href="?s=<?=$i?>" aria-disabled="true"><?=$i?></a></li>
                                <?php else: ?>
                                    <li class="page-item"><a class="page-link" href="?s=<?=$i?>"><?=$i?></a></li>
                                <?php endif; ?>
<?php endif; ?>
                            <?php endfor; ?>
                            <?php if($s<$sayfalama) :?>
                                <li class="page-item"><a class="page-link" href="?s=<?=($s+1)?>"> >> </a></li>
                                <?php else: ?>
                                    <li class="page-item disabled"><a class="page-link" href="" aria-disabled="true"> >> </a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form Area lISRT  End -->

<?php require 'static/footer.php'; ?>