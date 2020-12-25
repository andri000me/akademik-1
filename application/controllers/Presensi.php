<?php

Class Presensi extends CI_Controller {

  function __construct() {
      parent::__construct();
      //chekAksesModule();
      $this->load->library('ssp');
      $this->load->model('Model_presensi');
  }

  function data() {
      // nama tabel
      $table = 'tbl_presensi';
      // nama PK
      $primaryKey = 'id_presensi';
      // list field
      $columns = array(
          array('db' => 'id_presensi', 'dt' => 'id_presensi'),
          array('db' => 'tanggal', 'dt' => 'tanggal'),
          array('db' => 'nim', 'dt' => 'nim'),
          array('db' => 'nama', 'dt' => 'nama'),
          array('db' => 'rombel','dt' => 'rombel'),
          array('db' => 'absen','dt' => 'absen'),
          array(
              'db' => 'id_presensi',
              'dt' => 'aksi',
              'formatter' => function( $d) {
                  //return "<a href='edit.php?id=$d'>EDIT</a>";
                  return anchor('presensi/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').'
                      '.anchor('presensi/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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

  function tampil_data(){
    $data = $this->Model_presensi->tampil();
    // var_dump($data);
    echo json_encode($data);
  }

  function index() {
    $this->template->load('template', 'presensi/list');
  }

  function add() {
      if (isset($_POST['submit'])) {
          $this->Model_presensi->tambah_absen();
          redirect('presensi');
      } else {
          $this->template->load('template', 'presensi/add');
      }
  }
  function edit(){
      if(isset($_POST['submit'])){
          $this->Model_presensi->edit_absen();
          redirect('presensi');
      }else{
          $id_presensi      = $this->uri->segment(3);
          $data['presensi'] = $this->db->get_where('tbl_presensi',array('id_presensi'=>$id_presensi))->row_array();
          $this->template->load('template', 'presensi/edit',$data);
      }
  }

  function delete(){
      $id_presensi = $this->uri->segment(3);
      if(!empty($id_presensi)){

          $this->db->where('id_presensi',$id_presensi);
          $this->db->delete('tbl_presensi');
      }
      redirect('presensi');
  }


}
