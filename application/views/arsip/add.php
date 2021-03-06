<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Tambah Arsip Dokumen
        </div>
        <div class="panel-body">

            <?php
            echo form_open_multipart('arsip/add', 'role="form" class="form-horizontal"');
            ?>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA PEMILIK
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nama_pemilik" placeholder="MASUKAN NAMA PEMILIK" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NIS/NUPTK
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nis_nuptk" placeholder="MASUKAN NIS/NUPTK" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA DOKUMEN
                </label>
                <div class="col-sm-9">
                    <input type="text" name="dokumen" placeholder="MASUKAN NAMA DOKUMEN" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2  control-label" for="date">TANGGAL</label>
            <div class="col-sm-9">
                <input type="date" name="tanggal" placeholder="TANGGAL" id="form-field-1" class="form-control">
            </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    KATEGORI PEMILIK
                </label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('pemilik', array('Siswa' => 'Siswa', 'Guru' => 'Guru', 'Karyawan' => 'Karyawan'), null, "class='form-control'") ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    UPLOAD FILE
                </label>
                <div class="col-sm-9">
                    <input type="file" name="userfile">
                    <h6 style="font-family:verdana;" class="alert alert-danger"><b>Format File PDF, JPG, PNG Serta Size Tidak Lebih Dari 1Mb</b></h6>
                </div>
            </div>
            

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger  btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('arsip', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>