<?php

class Model_arsip extends CI_Model {

    public $table ="tbl_dokumen";

    function save($foto) {
        $data = array(
            'nama_pemilik'           => $this->input->post('nama_pemilik', TRUE),
            'nis_nuptk'      => $this->input->post('nis_nuptk', TRUE),
            'nama_dokumen'          => $this->input->post('dokumen', TRUE),
            'tanggal' => $this->input->post('tanggal', TRUE),
            'pemilik'        => $this->input->post('pemilik', TRUE),
            'file_dokumen'          => $foto
        );
        $this->db->insert($this->table,$data);

    }

    function update($foto) {
        if(empty($foto)){
            // update without foto
                $data = array(
                'nama_pemilik'          => $this->input->post('nama_pemilik', TRUE),
                'nis_nuptk'      => $this->input->post('nis_nuptk', TRUE),
                'nama_dokumen' => $this->input->post('nama_dokumen', TRUE),
                'tanggal'  => $this->input->post('tanggal', TRUE),
                'pemilik'        => $this->input->post('pemilik', TRUE)
            );
        }else{
            // update with foto
                $data = array(
                    'nama_pemilik'          => $this->input->post('nama_pemilik', TRUE),
                    'nis_nuptk'      => $this->input->post('nis_nuptk', TRUE),
                    'nama_dokumen' => $this->input->post('nama_dokumen', TRUE),
                    'tanggal'  => $this->input->post('tanggal', TRUE),
                    'pemilik'        => $this->input->post('pemilik', TRUE),
                    'file_dokumen'          => $foto
            );
        }
        $id_dok   = $this->input->post('id_dokumen');
        $this->db->where('id_dokumen',$id_dok);
        $this->db->update($this->table,$data);
    }


}
