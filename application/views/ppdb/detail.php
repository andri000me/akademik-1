<div class="col-sm-12">
<label class="col-sm-12 control-label text-center" for="form-field-1"> <b>DETAIL DATA SISWA BARU</b></label>
<br>
<br>
<?php
                    echo form_open_multipart('ppdb/detail', 'role="form" class="form-horizontal"');
                    echo form_hidden('id_pendaftar', $ppdb['id_pendaftar']);
                    ?>
        <div class="col-sm-6">
            <!-- start: TEXT FIELDS PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i>
                    Detail Data Siswa Baru
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NIS
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="nis" value="<?php echo $ppdb['nis'] ?>" disabled id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" value="<?php echo $ppdb['nama_siswa'] ?>" disabled id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" value="<?php echo $ppdb['tempat_lahir'] ?>" disabled id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir" value="<?php echo $ppdb['tanggal_lahir'] ?>" disabled id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            JENIS KELAMIN
                        </label>
                        <div class="col-sm-5">
                        <input type="text" name="gender" value="<?php echo $ppdb['gender'] ?>" disabled="" id="form-field-1" class="form-control">
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            AGAMA
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo cmb_dinamis('agama', 'tbl_agama', 'nama_agama', 'kd_agama', $ppdb['kd_agama'],'disabled');
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            ALAMAT SISWA
                        </label>
                        <div class="col-sm-6">
                            <textarea rows="6" cols="100" disabled name="alamat_siswa" class="form-control"><?php echo htmlspecialchars($ppdb['alamat_siswa']); ?></textarea>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NILAI UN
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="nilai_un" value="<?php echo $ppdb['nilai_un'] ?>" disabled id="form-field-1" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NILAI RAPORT
                        </label>
                        <div class="col-sm-5">
                            <input type="text" value="<?php echo $ppdb['nilai_raport'] ?>" name="nilai_raport" disabled id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    FOTO SISWA
                </label>
                <div class="col-sm-2">
                    <img src="<?php echo base_url()."/uploads/ppdb/foto_siswa_baru/".$ppdb['foto']?>" disabled width="200">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    IJAZAH
                </label>
                <div class="col-sm-2">
                    <img src="<?php echo base_url()."/uploads/ppdb/foto_siswa_baru/".$ppdb['file_ijazah']?>"disabled width="200">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    SKHUN
                </label>
                <div class="col-sm-2">
                    <img src="<?php echo base_url()."/uploads/ppdb/foto_siswa_baru/".$ppdb['file_skhun']?>" disabled width="200">
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
                Data Orang Tua
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        NAMA AYAH
                    </label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $ppdb['nama_ayah'] ?>"name="nama_ayah"disabled id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR AYAH
                        </label>
                        <div class="col-sm-5">
                            <input type="text" value="<?php echo $ppdb['tempat_lahir_ayah'] ?>" name="tempat_lahir_ayah" disabled id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" value="<?php echo $ppdb['tanggal_lahir_ayah'] ?>" name="tanggal_lahir_ayah" disabled id="form-field-1" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        PEKERJAAN AYAH
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $ppdb['pekerjaan_ayah'] ?>" name="pekerjaan_ayah" disabled id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        NAMA IBU
                    </label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $ppdb['nama_ibu'] ?>" name="nama_ibu" disabled id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR IBU
                        </label>
                        <div class="col-sm-5">
                            <input type="text" value="<?php echo $ppdb['tempat_lahir_ibu'] ?>" name="tempat_lahir_ibu" disabled id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" value="<?php echo $ppdb['tanggal_lahir_ibu'] ?>" name="tanggal_lahir_ibu" disabled id="form-field-1" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        PEKERJAAN IBU
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $ppdb['pekerjaan_ibu'] ?>" name="pekerjaan_ibu" disabled id="form-field-1" class="form-control">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NOMOR HP
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?php echo $ppdb['nomor_hp_ortu'] ?>" name="nomor_hp_ortu" disabled id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    ALAMAT ORTU
                </label>
                <div class="col-sm-6">
                    <textarea rows="6" cols="100" name="alamat_ortu" disabled class="form-control"><?php echo htmlspecialchars($ppdb['alamat_ortu']); ?></textarea>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    JUMLAH SAUDARA
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?php echo $ppdb['jumlah_saudara'] ?>" name="jumlah_saudara" disabled id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    JUMLAH PENGHASILAN KEDUA ORTU
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?php echo $ppdb['penghasilan_ortu'] ?>"name="penghasilan_ortu" disabled id="form-field-1" class="form-control">
                </div>
            </div>

            <div class="form-group text-left">
                            <label class="col-sm-5 control-label" for="form-field-1">
                                STATUS
                            </label>
                            <div class="col-sm-5">
                            <input type="text" value="<?php echo $ppdb['status'] ?>"name="status" disabled id="form-field-1" class="form-control">
                            </div>
            </div>

            <div class="form-group">
                        <label class="col-sm-5 control-label" for="form-field-1">
                            KETERANGAN
                        </label>
                        <div class="col-sm-5">
                            <textarea rows="6" cols="100" disabled name="keterangan"class="form-control"><?php echo htmlspecialchars($ppdb['keterangan']); ?></textarea>
                        </div>

                    </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <?php echo anchor('ppdb', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>


            </div>
        </div>

    </div>
    </form>
</div>
