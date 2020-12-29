<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
   <?php echo anchor('ppdb/add','Input Data Pendaftar',array('class'=>'btn btn-danger btn-sm'))?>
   <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Import Data Excel Dari Dapodik</button> -->

    <div style="margin-bottom: 10px;"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Data Siswa Pendaftar
            <div class="panel-tools">
                <?php echo anchor('ppdb/add','<i class="fa fa-edit" aria-hidden="true"></i>',"title='Tambah Data'");?>
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <!-- <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> -->
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">FOTO</th>
                        <th class="text-center">NISN</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">TEMPAT LAHIR</th>
                        <th class="text-center">TANGGAL LAHIR</th>
                        <th class="text-center">AKSI</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>


  <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('ppdb/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "10px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    { "data": "foto" ,
                        "width": "80px",
                        "sClass": "text-center",
                    },
                    {
                        "data": "nis",
                        "width": "150px",
                        "height" : "30px",
                        "sClass": "text-center"
                    },
                    { "data": "nama_siswa",
                        "width":"100px",
                        "sClass": "text-center", },
                    { "data": "tempat_lahir",
                        "width":"100px",
                        "sClass": "text-center", },
                    { "data": "tanggal_lahir", "width": "15px",
                        "sClass": "text-center",
                    },
                    { "data": "aksi","width": "50px",
                        "sClass": "text-center", },
                ]
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
