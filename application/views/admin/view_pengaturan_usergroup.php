        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data User Group</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                    <a type="button" class="btn btn-round btn-primary" href="<?php echo base_url()."index.php/admin/pengaturan/tambah_usergroup"?>"><i class="fa fa-plus"></i> Tambah</a>
                    <hr>
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="margin-top: 10px">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Usergroup</th>
                          <th>Label Usergroup</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no =  1;
                        foreach($ma_usergroup as $l){
                        ?>
                        <tr>
                          <th><?php echo $no++?></th>
                          <td><?php echo $l->usergroup?></td>
                          <td><?php echo $l->label_usergroup?></td>
                          <td>
                            <a type="button" class="btn btn-danger" href="<?php echo base_url()."index.php/admin/Pengaturan/edit_usergroup/".$l->id_usergroup ?>"><i class="fa fa-pencil"></i></a>
                           <a type="button" class="btn btn-primary" href="<?php echo base_url()."index.php/admin/Pengaturan/hapus_usergroup/".$l->id_usergroup ?>"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
