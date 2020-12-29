<?php

Class Arsip extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        $this->load->library('ssp');
        $this->load->model('Model_arsip');
    }


    function data() {

        // nama tabel
        $table = 'tbl_dokumen';
        // nama PK
        $primaryKey = 'id_dokumen';
        // list field
        $columns = array(
            array('db' => 'id_dokumen', 'dt' => 'id_dokumen'),
            array('db' => 'nama_pemilik', 'dt' => 'nama_pemilik'),
            array('db' => 'nis_nuptk', 'dt' => 'nis_nuptk'),
            array('db' => 'nama_dokumen', 'dt' => 'nama_dokumen'),
            array('db' => 'tanggal', 'dt' => 'tanggal'),
            array('db' => 'pemilik', 'dt' => 'pemilik'),
            array('db' => 'file_dokumen', 'dt' => 'file_dokumen',
            'formatter' => function( $d) {
                if(empty($d)){
                    return "File Tidak Ada";
                }else{
                    return "<a href='".base_url()."uploads/file/".$d."' download target='_blank' >Download</a>";
                }
             }),
            array(
                'db' => 'id_dokumen',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('arsip/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').'
                    &nbsp;
                        '.anchor('arsip/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                }
            )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );
        header('Content-Type: application/json');
        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

    function index() {

        $this->template->load('template', 'arsip/list');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_file_dokumen();
            $this->Model_arsip->save($uploadFoto);
            redirect('arsip');
        } else {
            $this->template->load('template', 'arsip/add');
        }
    }

    function edit($id = null){

        if(isset($_POST['submit'])){
            $uploadFoto = $this->upload_file_dokumen();
            $this->Model_arsip->update($uploadFoto);
            redirect('arsip');
        }else{
            $id_dok  = $this->uri->segment(3);
            $data['arsip'] = $this->db->get_where('tbl_dokumen',array('id_dokumen'=>$id_dok))->row_array();
            
            $this->template->load('template', 'arsip/edit',$data);
        }
    }

    function delete(){
        $id_dok = $this->uri->segment(3);
        if(!empty($id_dok)){
            // proses delete data
            $this->db->where('id_dokumen',$id_dok);
            $this->db->delete('tbl_dokumen');
        }
        redirect('arsip');
    }

    function upload_file_dokumen(){
        $id_dok = $this->uri->segment(3);
        $config['upload_path']          = './uploads/file/';
        $config['allowed_types']        = 'jpg|png|pdf';
        $config['max_size']             = 1024; // imb
        $config['file_name']            = "dokumen-" . uniqid();
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
}
