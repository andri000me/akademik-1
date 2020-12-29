<?php

class Ppdb extends CI_Controller {

  function __construct() {
      parent::__construct();
      //chekAksesModule();
      $this->load->library('ssp');
      $this->load->model('Model_ppdb');
    }

    function data() {

        // nama tabel
        $table = 'tbl_ppdb';
        // nama PK
        $primaryKey = 'id_pendaftar';
        // list field
        $columns = array(
            array('db' => 'foto',
                'dt' => 'foto',
                'formatter' => function( $d) {
                   if(empty($d)){
                       return "<img width='30px' src='".  base_url()."/uploads/user-siluet.jpg'>";
                   }else{
                       return "<img width='75px' height='88px' src='".  base_url()."/uploads/ppdb/foto_siswa_baru/".$d."'>";
                   }
                }
            ),
            array('db' => 'nis', 'dt' => 'nis'),
            array('db' => 'nama_siswa', 'dt' => 'nama_siswa'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array(
                'db' => 'id_pendaftar',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('ppdb/detail/'.$d,'<i class="fa fa-search"></i>','class="btn btn-xs btn-success tooltips" data-placement="top" data-original title="Detail"').'
                    &nbsp;'.anchor('ppdb/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-warning tooltips" data-placement="top" data-original title="Edit"').'
                        &nbsp;
                        '.anchor('ppdb/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original title="Delete"');
                }
            )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

    function index()
    {
      $this->template->load('template', 'ppdb/list');
    }
    function detail() {
        if(isset($_POST['submit'])){
            $uploadFoto = $this->upload_foto_siswa();
            $this->Model_siswa->update($uploadFoto);
            redirect('ppdb');
        }else{
            $nim           = $this->uri->segment(3);
            $data['ppdb'] = $this->db->get_where('tbl_ppdb',array('id_pendaftar'=>$nim))->row_array();
            $this->template->load('template', 'ppdb/detail',$data);
        }
    }
    function add() {
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto_siswa();
            $uploadFileIjazah = $this->upload_file_ijazah_siswa();
            $uploadFileSkhun = $this->upload_file_skhun_siswa();
            $this->Model_ppdb->save($uploadFoto, $uploadFileIjazah, $uploadFileSkhun);
            redirect('ppdb');
        } else {
            $this->template->load('template', 'ppdb/add');
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $uploadFoto = $this->upload_foto_siswa();
            $this->Model_ppdb->update($uploadFoto);
            redirect('ppdb');
        }else{
            $nisn          = $this->uri->segment(3);
            $data['ppdb'] = $this->db->get_where('tbl_ppdb',array('id_pendaftar'=>$nisn))->row_array();
            $this->template->load('template', 'ppdb/edit',$data);
        }
    }

    function delete(){
        $nisn = $this->uri->segment(3);
        if(!empty($nisn)){
            // proses delete data
            $this->db->where('id_pendaftar',$nisn);
            $this->db->delete('tbl_ppdb');
        }
        redirect('ppdb');
    }

    function upload_foto_siswa(){
        $config['upload_path']          = './uploads/ppdb/foto_siswa_baru/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
    function upload_file_ijazah_siswa(){
        $config['upload_path']          = './uploads/ppdb/foto_siswa_baru/';
        $config['allowed_types']        = 'jpg|png|pdf';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('ijazah');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
    function upload_file_skhun_siswa(){
        $config['upload_path']          = './uploads/ppdb/foto_siswa_baru/';
        $config['allowed_types']        = 'jpg|png|pdf';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('skhun');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }

}
