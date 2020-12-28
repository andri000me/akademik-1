<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <?php
    if(!empty($message)) {
                echo $message;
            }


     ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Arsip Dokumen
            <div class="panel-tools">
                <?php echo anchor('arsip/add','<i class="fa fa-edit" aria-hidden="true"></i>',"title='Tambah Data'");?>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NIS/NUPTK</th>
                        <th>NAMA DOKUMEN</th>
                        <th>TANGGAL</th>
                        <th>PEMILIK</th>
                        <th>FILE</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <!-- <tbody>
                              <?php
                              $no = 1;
                              foreach($tbl_dokumen as $row) {
                              ?>
                                  <tr>
                                      <td><?php echo $no;?></td>
                                      <!-- jika ada barang di dalam database maka tampilkan -->
                                      <td><?php echo $row->nama_pemilik;?></td>
                                      <td><?php echo $row->nis_nuptk;?></td>
                                      <td><?php echo $row->nama_dokumen;?></td>
                                      <td><?php echo $row->tanggal;?></td>
                                      <td><?php echo $row->pemilik;?></td>
                                      <td><?php echo $row->file_dokumen;?></td>
                                      <td class="text-center">
                              <a href="<?php echo base_url('arsip/edit/'.$row->id_dokumen) ?>"><input type="submit" class="btn btn-success btn-xs" name="edit" value="Ubah"></a>
                              <a onclick="deleteConfirm('<?php echo site_url('arsip/delete/'.$row->id_dokumen) ?>')"href="#" name="<?php echo $row->nama_pemilik;?>" class="hapus btn btn-danger btn-xs" kode="<?php echo $row->id_dokumen;?>">Hapus</a>
                          </td>
                                  </tr>
                              <?php $no++; } ?>
                              </tbody> -->
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>
<!-- Modal Hapus-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" name="idhapus" id="idhapus">
                <p>Apakah anda yakin ingin menghapus data <strong class="text-konfirmasi"> </strong> ?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger btn-xs" id="konfirmasi">Hapus</button>
        </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>


  <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('arsip/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "10px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    { "data": "nama_pemilik" ,
                        "width": "80px",
                        "sClass": "text-center",
                    },
                    {
                        "data": "nis_nuptk",
                        "width": "150px",
                        "height" : "10px",
                        "sClass": "text-center"
                    },
                    { "data": "nama_dokumen",
                        "width":"100px",
                        "sClass": "text-center", },
                    { "data": "tanggal",
                        "width":"100px",
                        "sClass": "text-center", },
                    { "data": "pemilik", "width": "15px",
                        "sClass": "text-center",
                    },
                    { "data": "file_dokumen", "width": "15px",
                        "sClass": "text-center",
                    },
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

<!-- <script type="text/javascript">


    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            var name=$(this).attr("name");

            $(".text-konfirmasi").text(name)
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });

        $("#konfirmasi").click(function(){
            var kode_barang = $("#idhapus").val();

            $.ajax({
                url:"<?php echo site_url('arsip/delete');?>",
                type:"POST",
                data:"id_dokumen="+id_dokumen,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('arsip/index/delete-success');?>";
                }
            });
        });
    });
</script> -->
