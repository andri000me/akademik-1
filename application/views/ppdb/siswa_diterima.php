<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
   <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Import Data Excel Dari Dapodik</button> -->

    <div style="margin-bottom: 10px;"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Data Siswa Diterima
            <!--  -->
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">FOTO</th>
                        <th class="text-center">NISN</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center">TANGGAL DAFTAR</th>
                        <th class="text-center">STATUS</th>
                    </tr>
                </thead>
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
            var t = $('#mytable').DataTable( {
                "ajax": {
                    "url": "<?php echo site_url('ppdb/data_diterima'); ?>",
                    "type": "POST",
                },
                
                "order": [[ 4, 'asc' ]],
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
                    { "data": "tanggal_mendaftar",
                        "width":"100px",
                        "sClass": "text-center", },
                    { 
                        "data": "status",
                        "filter": "Diterima",
                        "width":"100px",
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
