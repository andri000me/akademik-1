<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Tambah Data Guru
        </div>
        <div class="panel-body">

            <?php
            echo form_open('guru/add', 'role="form" class="form-horizontal"');
            ?>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NUPTK
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nuptk" placeholder="NUPTK" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA GURU/KARYAWAN
                </label>
                <div class="col-sm-9">
                    <input type="text" name="nama_guru" placeholder="NAMA GURU/KARYAWAN" id="form-field-1" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label text-justify" for="form-field-1">
                    JENIS KELAMIN
                </label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('gender', array('p' => 'LAKI LAKI', 'w' => 'PEREMPUAN'), '', "class='form-control'") ?>
                </div>
            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label text-justify" for="form-field-1">
                            TEMPAT, TANGGAL LAHIR 
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                        </div>
            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            NO HP/TELEPON 
                        </label>
                        <div class="col-sm-3">
                            <input type="number" placeholder="NO HP/TELEPON" name="phone" class="form-control"></input>
                        </div>
                    
            </div> 
            <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            ALAMAT 
                        </label>
                        <div class="col-sm-6">
                            <textarea placeholder="ALAMAT" name="alamat" class="form-control"></textarea>
                        </div>
                    
            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-field-1">
                            FOTO
                        </label>
                        <div class="col-sm-2">
                            <input type="file" name="userfile">
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