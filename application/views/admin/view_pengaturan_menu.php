        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Menu</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                    <a type="button" class="btn btn-round btn-primary" href="<?php echo base_url()."index.php/admin/pengaturan/tambah_menu"?>"><i class="fa fa-plus"></i> Tambah</a>
                    <hr>
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="margin-top: 10px">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Modul</th>
                          <th>Link Menu</th>
                          <th>Created</th>
                          <th>Modified</th>
                          <th>Account_id</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach($ma_menu as $l){
                        ?>
                        <tr>
                          <th><?php echo $no++?></th>
                          <td><?php echo $l->title_menu?></td>
                          <td><?php echo $l->link_menu?></td>
                          <td><?php echo $l->created_menu?></td>
                          <td><?php echo $l->modified_menu?></td>
                          <td><?php echo $l->account_id?></td>
                          <td>
                            <a type="button" class="btn btn-danger" href="<?php echo base_url()."index.php/admin/Pengaturan/edit_menu/".$l->id_menu ?>"><i class="fa fa-pencil"></i></a>
                           <a type="button" class="btn btn-primary" href="<?php echo base_url()."index.php/admin/Pengaturan/hapus_menu/".$l->id_menu ?>"><i class="fa fa-trash-o"></i></a>
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
        