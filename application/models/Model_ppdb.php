<?php

class Model_ppdb extends CI_Model {

    public $table ="tbl_ppdb";

    function save($foto,$ijazah,$skhun) {
        $data = array(
            'nis'           => $this->input->post('nis', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'nama_siswa'          => $this->input->post('nama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'alamat_siswa'     => $this->input->post('alamat_siswa',TRUE),
            'nama_ayah'     => $this->input->post('nama_ayah',TRUE),
            'tempat_lahir_ayah'     => $this->input->post('tempat_lahir_ayah',TRUE),
            'tanggal_lahir_ayah'     => $this->input->post('tanggal_lahir_ayah',TRUE),
            'pekerjaan_ayah'     => $this->input->post('pekerjaan_ayah',TRUE),
            'nama_ibu'     => $this->input->post('nama_ibu',TRUE),
            'tempat_lahir_ibu'     => $this->input->post('tempat_lahir_ibu',TRUE),
            'tanggal_lahir_ibu'     => $this->input->post('tanggal_lahir_ibu',TRUE),
            'pekerjaan_ibu'     => $this->input->post('pekerjaan_ibu',TRUE),
            'alamat_ortu'     => $this->input->post('alamat_ortu',TRUE),
            'jumlah_saudara'     => $this->input->post('jumlah_saudara',TRUE),
            'penghasilan_ortu'     => $this->input->post('penghasilan_ortu',TRUE),
            'nilai_un'     => $this->input->post('nilai_un',TRUE),
            'nilai_raport'     => $this->input->post('nilai_raport',TRUE),
            'nomor_hp_ortu'     => $this->input->post('nomor_hp_ortu',TRUE),
            'foto' => $foto,
            'file_ijazah' => $ijazah,
            'file_ijazah' => $skhun,
            'keterangan'     => $this->input->post('keterangan',TRUE),
            'status'     => $this->input->post('status',TRUE),

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
