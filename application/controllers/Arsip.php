<?php

Class Arsip extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        $this->load->library('ssp');
        $this->load->model('Model_arsip');
        $this->load->helper(array('form', 'url'));
    }

    function data() {

        // nama tabel
        $table = 'tbl_dokumen';
        // nama PK
        $primaryKey = 'id_dokumen';
        // list field
        $columns = array(
            // array('db' => 'foto',
            //     'dt' => 'foto',
            //     'formatter' => function( $d) {
            //        if(empty($d)){
            //            return "<img width='30px' src='".  base_url()."/uploads/user-siluet.jpg'>";
            //        }else{
            //            return "<img width='75px' height='88px' src='".  base_url()."/uploads/".$d."'>";
            //        }
            //     }
            // ),
            array('db' => 'nama_pemilik', 'dt' => 'nama_pemilik'),
            array('db' => 'nis_nuptk', 'dt' => 'nis_nuptk'),
            array('db' => 'nama_dokumen', 'dt' => 'nama_dokumen'),
            array('db' => 'tanggal', 'dt' => 'tanggal'),
            array('db' => 'pemilik', 'dt' => 'pemilik'),
            array('db' => 'file_dokumen', 
                    'dt' => 'file_dokumen'
                ),
            array(
                'db' => 'id_dokumen',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('arsip/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').'
                    <br><br>
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

    function edit(){
        if(isset($_POST['submit'])){
            $uploadFoto = $this->upload_file_dokumen();
            $this->Model_siswa->update($uploadFoto);
            redirect('siswa');
        }else{
            $nim           = $this->uri->segment(3);
            $data['siswa'] = $this->db->get_where('tbl_siswa',array('nim'=>$nim))->row_array();
            $this->template->load('template', 'arsip/edit',$data);
        }
    }

    function delete(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id_dokumen',$id);
            $this->db->delete('tbl_dokumen');
        }
        redirect('arsip');
    }

    // function upload_dokumen(){
    //     $config['upload_path']          = './uploads/file';
    //     $config['allowed_types']        = 'jpg|png|pdf';
    //     $config['max_size']             = 1024; // imb
    //     $this->load->library('upload', $config);
    //         // proses upload
    //     if(! $this->upload->do_upload('file_dokumen')){
    //         $error = array('error'=> $this->upload->display_errors());
    //         $this->load->view('template', 'arsip/list',$error);
    //     }else{
    //         $data= array('upload_data'=> $this->upload->data());
    //         $this->load->view('template', 'arsip/list',$data);
    //     }
    //     // $this->upload->do_upload('file_dokumen');
    //     // $upload = $this->upload->data();
    //     // return $upload['file_name'];
    // }
    function upload_file_dokumen(){
        $config['upload_path']          = './uploads/file/';
        $config['allowed_types']        = 'jpg|png|pdf';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
}
