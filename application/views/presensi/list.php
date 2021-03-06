<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    &nbsp;<?php echo anchor('presensi/add','Tambah Daftar Presensi',array('class'=>'btn btn-success btn-sm'))?>
    <div style="margin-bottom: 10px;"></div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Tabel Presensi Siswa
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>TANGGAL</th>
                        <th>NIS</th>
                        <th>NAMA SISWA</th>
                        <th>ROMBEL</th>
                        <th>ABSEN</th>
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
                "ajax": '<?php echo site_url('presensi/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "1px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    { "data": "tanggal",
                        "width": "5px",
                        "sClass": "text-center",},
                    { "data": "nim",
                        "width": "5px",
                        "sClass": "text-center",},
                    { "data": "nama",
                        "width": "5px",
                        "sClass": "text-center",},
                    { "data": "rombel",
                        "width": "5px",
                        "sClass": "text-center",},
                    { "data": "absen",
                        "width": "5px",
                        "sClass": "text-center",},
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

        // $(document).ready(function(){
        //   tampil_data();
        //   $('#mytable').dataTable();
        //
        //   function tampil_data(){
        //     $.ajax({
        //       type : 'ajax',
        //       url  : '<?php echo base_url('presensi/tampil_data') ?>',
        //       async : false,
        //       dataType :'json',
        //       success : function(data){
        //         var html = '';
        //         var i;
        //         for(i=0; i<data.length; i++){
        //           html += '<tr>'+
        //                   '<td>'+data[i].tanggal+'</td>'+
        //                   '<td>'+data[i].nim+'</td>'+
        //                   '<td>'+data[i].nama+'</td>'+
        //                   '<td>'+data[i].nama_rombel+'</td>'+
        //                   '<td>'+data[i].absen+'</td>'+
        //                   '<tr>';
        //         }
        //         $('#show_data').html(html);
        //       }
        //     });
        //   }
        // });

    </script>
