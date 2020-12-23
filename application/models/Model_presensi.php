<?php

class Model_presensi extends CI_Model {

  public $table = "tbl_presensi";

  function tambah_absen(){
    $data = array(
      'tanggal' => $this->input->post('tanggal', TRUE),
      'nim'     => $this->input->post('nim',TRUE),
      'nama'    => $this->input->post('nama', TRUE),
      'rombel'  => $this->input->post('rombel', TRUE),
      'absen'   => $this->input->post('absen', TRUE)
    );
    $this->db->insert($this->table,$data);
  }

  function edit_absen(){
    $data = array(
      'tanggal' => $this->input->post('tanggal', TRUE),
      'nim'     => $this->input->post('nim',TRUE),
      'nama'    => $this->input->post('nama', TRUE),
      'rombel'  => $this->input->post('rombel', TRUE),
      'absen'   => $this->input->post('absen', TRUE)
    );
    $id_presensi = $this->input->post('id_presensi');
    $this->db->where('id_presensi',$id_presensi);
    $this->db->update($this->table,$data);
  }
}
