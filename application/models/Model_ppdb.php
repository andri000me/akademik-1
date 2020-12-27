<?php

class Model_ppdb extends CI_Model {

    public $table ="tbl_ppdb";

    function save($foto) {
        $data = array(
            'nisn'           => $this->input->post('nisn', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'nama'          => $this->input->post('nama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'alamat'        => $this->input->post('alamat', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'foto'          => $foto
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
            'alamat'        => $this->input->post('alamat', TRUE),
            'gender'        => $this->input->post('gender', TRUE)
            );
        }else{
            // update with foto
            $data = array(
            'nama'          => $this->input->post('nama', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'alamat'        => $this->input->post('alamat', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'foto'          => $foto,
            );
        }
        $nisn   = $this->input->post('nisn');
        $this->db->where('nisn',$nisn);
        $this->db->update($this->table,$data);
    }

}
