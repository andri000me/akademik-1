<?php

class Model_arsip extends CI_Model {

    public $table ="tbl_dokumen";
    
    function save($dokumen) {
        $data = array(
            'nama_pemilik'           => $this->input->post('nama_pemilik', TRUE),
            'nis_nuptk'      => $this->input->post('nis_nuptk', TRUE),
            'nama_dokumen'          => $this->input->post('dokumen', TRUE),
            'tanggal' => $this->input->post('tanggal', TRUE),
            'pemilik'        => $this->input->post('pemilik', TRUE),
            'file_dokumen'          => $dokumen
        );
        $this->db->insert($this->table,$data);
    
    }
    
    function update($foto) {
        if(empty($foto)){
            // update without foto
            $data = array(
            'nama'          => $this->input->post('nama', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender', TRUE)
        );
        }else{
            // update with foto
            $data = array(
            'nama'          => $this->input->post('nama', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'foto'          => $foto,
            'id_rombel'     => $this->input->post('rombel',TRUE)
        );
        }
        $nim   = $this->input->post('nim');
        $this->db->where('nim',$nim);
        $this->db->update($this->table,$data);
    }
    

}