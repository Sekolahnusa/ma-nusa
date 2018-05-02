        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Modul / <b>Edit Data Usergroup</b></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <button type="button" class="btn btn-round btn-primary"><a href="<?php echo base_url()."index.php/admin/Pengaturan/Pengaturan_usergroup"?>" style="color: #fff"><i class="fa fa-plus"></i> Kembali</a></button>
                  <div class="x_title">
                    <h2>Form Edit data usergroup</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <?php
                    foreach($ma_usergroup as $l){
                    ?>
                    <form class="form-horizontal form-label-left" action="<?php echo base_url('index.php/admin/Pengaturan/update_usergroup') ?>" method="post" enctype="multipart/form-data" role="form" >
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Usergroup<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" value="<?php echo $l->id_usergroup ?>" name="id_usergroup" required="required" class="form-control col-md-7 col-xs-12">
                          <input type="text" value="<?php echo $l->usergroup?>" name="usergroup" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Label Usergroup <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $l->label_usergroup ?>" name="label_usergroup" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Batal</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                    </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  