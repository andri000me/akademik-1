<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    &nbsp;<?php echo anchor('users/rule','Rule Users',array('class'=>'btn btn-success btn-sm'))?>
    &nbsp;<?php echo anchor('users/add','Tambah User',array('class'=>'btn btn-warning btn-sm'))?>
    <div style="margin-bottom: 10px;"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Data Users
            <div class="panel-tools">
                <?php echo anchor('users/add','<i class="fa fa-edit" aria-hidden="true"></i>',"title='Tambah Data'");?>
                <!-- <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> -->
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>LEVEL</th>
                        <th>AKSI</th>
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
                "ajax": '<?php echo site_url('users/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "10px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "nama_lengkap",
                        "width": "80px",
                        "sClass": "text-justify"
                    },
                    { "data": "nama_level",
                        "width": "80px",
                        "sClass": "text-justify" },
                    { "data": "aksi","width": "1px",
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