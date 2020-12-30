<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Edit Data Guru
            <!-- <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div> -->
        </div>
        <div class="panel-body">

            <?php
            echo form_open_multipart('guru/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id_guru', $guru['id_guru']);
            ?>

<div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NUPTK
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nuptk" value="<?php echo $guru['nuptk']?>" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA GURU/KARYAWAN
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nama_guru" value="<?php echo $guru['nama_guru']?>" id="form-field-1" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label text-justify" for="form-field-1">
                    JENIS KELAMIN
                </label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('gender', array('p' => 'LAKI LAKI', 'w' => 'PEREMPUAN'), '', "class='form-control'", $guru['gender']) ?>
                </div>
            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label text-justify" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" value="<?php echo $guru['tempat_lahir']?>" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir" value="<?php echo $guru['tanggal_lahir']?>" id="form-field-1" class="form-control">
                        </div>
            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            NO HP/TELEPON
                        </label>
                        <div class="col-sm-3">
                            <input type="number" value="<?php echo $guru['phone']?>" name="phone" class="form-control"></input>
                        </div>

            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            ALAMAT
                        </label>
                        <div class="col-sm-6">
                            <textarea rows="6" cols="100" name="alamat" class="form-control"><?php echo htmlspecialchars($guru['alamat']); ?></textarea>
                        </div>

            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            FOTO
                        </label>
                        <div class="col-sm-2">
                            <input type="file" name="userfile">
                            <img src="<?php echo base_url()."/uploads/foto_guru/".$guru['foto']?>" width="200">
                        </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger  btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('guru', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
