<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
   <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Import Data Excel Dari Dapodik</button> -->

    <div style="margin-bottom: 10px;"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> DATA SISWA DITERIMA
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">FOTO</th>
                        <th class="text-center">NIS</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">TANGGAL LAHIR</th>
                        <th class="text-center">ASAL SEKOLAH</th>
                        <th class="text-center">TANGGAL DAFTAR</th>
                        <th class="text-center">STATUS</th>
                    </tr>
                </thead>
                <tbody>

                  <?php
                  $no=0;
                        foreach ($data->result_array() as $i) :
                            $no;
                            $foto=$i['foto'];
                            $nis=$i['nis'];
                            $nama=$i['nama_siswa'];
                            $tgl_lahir=$i['tanggal_lahir'];
                            $asal_sekolah=$i['asal_sekolah'];
                            $tgl_daftar=$i['CreatedOn'];
                            $status=$i['status'];
                            $no++  
                  ?>

                  <tr>  
                        <td class="text-center"><?php echo $no;?> </td>
                        <td class="text-center"><img width='75px' height='88px' src='<?php echo base_url()?>uploads/ppdb/foto_siswa_baru/<?php echo $foto;?>'></td>
                        <td class="text-center"><?php echo $nis;?> </td>
                        <td class="text-center"><?php echo $nama;?> </td>
                        <td class="text-center"><?php echo $tgl_lahir;?> </td>
                        <td class="text-center"><?php echo $asal_sekolah;?> </td>
                        <td class="text-center"><?php echo $tgl_daftar;?> </td>
                        <td class="text-center"><?php echo $status;?> </td>

                  </tr>

                  <?php endforeach; $no++?>

            </tbody>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

     <!-- jQuery Library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <!-- Datatable JS -->
     <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script>
        $(document).ready(function() {
            $('#mytable').DataTable( {
                "order": [[ 6, 'asc' ]],
               
            } );

            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Upload</h4>
      </div>
      <div class="modal-body">
          <p>Silahkan pilih file excel hasil export data siswa dari aplikasi dapodik.</p>
          <table class="table table-bordered">
              <tr><td width="100">Pilih File</td><td><input type="file" name="file"></td></tr>
          </table>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-sm">Upload Data</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>
