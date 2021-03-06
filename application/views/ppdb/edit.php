<div class="col-sm-12">
<?php
                    echo form_open_multipart('ppdb/edit', 'role="form" class="form-horizontal"');
                    echo form_hidden('id_pendaftar', $ppdb['id_pendaftar']);
                    ?>
        <div class="col-sm-6">
            <!-- start: TEXT FIELDS PANEL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i>
                    Form Pendaftaran Siswa Baru
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NIS
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="nis" value="<?php echo $ppdb['nis'] ?>" placeholder="NIS" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NAMA
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" value="<?php echo $ppdb['nama_siswa'] ?>" placeholder="NAMA LENGKAP" id="form-field-1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" value="<?php echo $ppdb['tempat_lahir'] ?>" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir" value="<?php echo $ppdb['tanggal_lahir'] ?>" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            JENIS KELAMIN
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo form_dropdown('gender', array('Laki-Laki' => 'LAKI LAKI', 'Perempuan' => 'PEREMPUAN'), null, "class='form-control'", $ppdb['gender']);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            AGAMA
                        </label>
                        <div class="col-sm-5">
                            <?php
                            echo cmb_dinamis('agama', 'tbl_agama', 'nama_agama', 'kd_agama', $ppdb['kd_agama']);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            ALAMAT SISWA
                        </label>
                        <div class="col-sm-6">
                            <textarea rows="6" cols="100" placeholder="ALAMAT SISWA" name="alamat_siswa" class="form-control"><?php echo htmlspecialchars($ppdb['alamat_siswa']); ?></textarea>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            ASAL SEKOLAH
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="asal_sekolah" value="<?php echo $ppdb['asal_sekolah'] ?>"id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NILAI UN
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="nilai_un" value="<?php echo $ppdb['nilai_un'] ?>" placeholder="NILAI UN" id="form-field-1" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            NILAI RAPORT
                        </label>
                        <div class="col-sm-5">
                            <input type="text" value="<?php echo $ppdb['nilai_raport'] ?>" name="nilai_raport" placeholder="NILAI RAPORT" id="form-field-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    FOTO SISWA
                </label>
                <div class="col-sm-6">
                    <input type="file" name="userfile">
                    <br>
                    <img src="<?php echo base_url()."/uploads/ppdb/foto_siswa_baru/".$ppdb['foto']?>" width="200">
                    <h6 style="font-family:verdana;" class="alert alert-danger"><b>Format File JPG, PNG Serta Size Tidak Lebih Dari 1Mb</b></h6>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    IJAZAH
                </label>
                <div class="col-sm-6">
                    <input type="file" value="<?php echo $ppdb['file_ijazah'] ?>"name="ijazah">
                    <br>
                    <img src="<?php echo base_url()."/uploads/ppdb/foto_siswa_baru/".$ppdb['file_ijazah']?>" width="200">
                    <h6 style="font-family:verdana;" class="alert alert-danger"><b>Format File PDF, JPG, PNG Serta Size Tidak Lebih Dari 1Mb</b></h6>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    SKHUN
                </label>
                <div class="col-sm-6">
                    <input type="file" value="<?php echo $ppdb['file_skhun'] ?>" name="skhun">
                    <br>
                    <img src="<?php echo base_url()."/uploads/ppdb/foto_siswa_baru/".$ppdb['file_skhun']?>" width="200">
                    <h6 style="font-family:verdana;" class="alert alert-danger"><b>Format File PDF, JPG, PNG Serta Size Tidak Lebih Dari 1Mb</b></h6>
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
                        <input type="text" value="<?php echo $ppdb['nama_ayah'] ?>"name="nama_ayah" placeholder="NAMA AYAH" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR AYAH
                        </label>
                        <div class="col-sm-5">
                            <input type="text" value="<?php echo $ppdb['tempat_lahir_ayah'] ?>" name="tempat_lahir_ayah" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" value="<?php echo $ppdb['tanggal_lahir_ayah'] ?>" name="tanggal_lahir_ayah" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        PEKERJAAN AYAH
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $ppdb['pekerjaan_ayah'] ?>" name="pekerjaan_ayah" placeholder="PEKERJAAN AYAH" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        NAMA IBU
                    </label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $ppdb['nama_ibu'] ?>" name="nama_ibu" placeholder="NAMA IBU" id="form-field-1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR IBU
                        </label>
                        <div class="col-sm-5">
                            <input type="text" value="<?php echo $ppdb['tempat_lahir_ibu'] ?>" name="tempat_lahir_ibu" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" value="<?php echo $ppdb['tanggal_lahir_ibu'] ?>" name="tanggal_lahir_ibu" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-field-1">
                        PEKERJAAN IBU
                    </label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $ppdb['pekerjaan_ibu'] ?>" name="pekerjaan_ibu" placeholder="PEKERJAAN IBU" id="form-field-1" class="form-control">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NOMOR HP
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?php echo $ppdb['nomor_hp_ortu'] ?>" name="nomor_hp_ortu" placeholder="NOMOR HP ORANG TUA" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    ALAMAT
                </label>
                <div class="col-sm-6">
                    <textarea rows="6" cols="100" name="alamat_ortu" class="form-control"><?php echo htmlspecialchars($ppdb['alamat_ortu']); ?></textarea>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    JUMLAH SAUDARA
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?php echo $ppdb['jumlah_saudara'] ?>" name="jumlah_saudara" placeholder="JUMLAH SAUDARA " id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    JUMLAH PENGHASILAN KEDUA ORTU
                </label>
                <div class="col-sm-9">
                    <input type="number" value="<?php echo $ppdb['penghasilan_ortu'] ?>"name="penghasilan_ortu" placeholder="PENGHASILAN KEDUA ORANG TUA" id="form-field-1" class="form-control">
                </div>
            </div>

            <div class="form-group text-left">
                            <label class="col-sm-5 control-label" for="form-field-1">
                                STATUS
                            </label>
                            <div class="col-sm-5">
                                <?php
                                echo form_dropdown('status', array('Diverifikasi' => 'Diverifikasi', 'Ditolak' => 'Ditolak', 'Diterima' => 'Diterima'), null, "class='form-control'", $ppdb['status']);
                                ?>
                            </div>
            </div>

            <div class="form-group">
                        <label class="col-sm-5 control-label" for="form-field-1">
                            KETERANGAN
                        </label>
                        <div class="col-sm-5">
                            <textarea rows="6" cols="100" placeholder="KETERANGAN"name="keterangan"class="form-control"><?php echo htmlspecialchars($ppdb['keterangan']); ?></textarea>
                        </div>

                    </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-2">
                    <button type="submit" name="submit" class="btn btn-danger  btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('ppdb', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>


            </div>
        </div>

    </div>
    </form>
</div>
