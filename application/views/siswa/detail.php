<div class="col-sm-12">
<label class="col-sm-12 control-label text-center" for="form-field-1"> <b>DETAIL DATA SISWA</b></label>
<br>
<br>
    <?php
                    echo form_open_multipart('siswa/add', 'role="form" class="form-horizontal"');
                    echo form_hidden('nis', $siswa['nis']);
                    ?>
        <div class="col-sm-6">
            <!-- start: TEXT FIELDS PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i>
                    Form Data Siswa
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NIS
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="nis" value="<?php echo $siswa['nis'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" value="<?php echo $siswa['tempat_lahir'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir" value="<?php echo $siswa['tanggal_lahir'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            JENIS KELAMIN
                        </label>
                        <div class="col-sm-5">
                             <input type="text" name="gender" value="<?php echo $siswa['gender'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            AGAMA
                        </label>
                        <div class="col-sm-5">
                        <?php
                        echo cmb_dinamis('agama', 'tbl_agama', 'nama_agama', 'kd_agama', $siswa['kd_agama'],'disabled');
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            ALAMAT SISWA
                        </label>
                        <div class="col-sm-9">
                        <textarea rows="6" cols="100" type="text" name="alamat_siswa"  id="form-field-1" class="form-control" disabled><?php echo htmlspecialchars($siswa['alamat_siswa']); ?></textarea>
                    </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            FOTO
                        </label>
                        <div class="col-sm-2">
                        <img src="<?php echo base_url()."/uploads/foto_siswa/".$siswa['foto']?>" width="200">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            ROMBEL
                        </label>
                        <div class="col-sm-6">
                            <?php echo cmb_dinamis ('kelas', 'tbl_rombel', 'kelas', 'id_rombel',$siswa['id_rombel'],'disabled');?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end: TEXT FIELDS PANEL -->
        </div>
        <div class="col-sm-6">
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Form Data Orang Tua
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        NAMA AYAH
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="nama_ayah" value="<?php echo $siswa['nama_ayah'] ?>" disabled="" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR AYAH
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir_ayah" value="<?php echo $siswa['tempat_lahir_ayah'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir_ayah" value="<?php echo $siswa['tanggal_lahir_ayah'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        PEKERJAAN AYAH
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="pekerjaan_ayah" value="<?php echo $siswa['pekerjaan_ayah'] ?>" disabled="" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        NAMA IBU
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="nama_ibu" value="<?php echo $siswa['nama_ibu'] ?>" disabled="" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR IBU
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir_ibu"  value="<?php echo $siswa['tempat_lahir_ibu'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir_ibu"  value="<?php echo $siswa['tanggal_lahir_ibu'] ?>" disabled="" id="form-field-1" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        PEKERJAAN IBU
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="pekerjaan_ibu" value="<?php echo $siswa['pekerjaan_ibu'] ?>" disabled="" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        ALAMAT<br>ORANG TUA
                    </label>
                    <div class="col-sm-9">
                    <textarea rows="6" cols="100" type="text" name="alamat_ortu"  id="form-field-1" class="form-control" disabled><?php echo htmlspecialchars($siswa['alamat_ortu']); ?></textarea>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        JUMLAH SAUDARA
                    </label>
                    <div class="col-sm-5">
                        <input type="number" name="jumlah_saudara"value="<?php echo $siswa['jumlah_saudara'] ?>" disabled="" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        JUMLAH PENGHASILAN KEDUA ORTU
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="penghasil_ortu" value="<?php echo "Rp. " . number_format($siswa['penghasilan_ortu'], 2, ",", "."); ?>" disabled id="form-field-1" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
                    <label class="col-sm-2 control-label" for="form-field-1">

                    </label>
                    <div class="col-sm-1">
                        <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                    </div>
    </div>
    </form>
</div>
