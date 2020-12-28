<?php

class Model_siswa extends CI_Model {

    public $table ="tbl_siswa";
    
    function save($foto) {
        $data = array(
            'nis'           => $this->input->post('nis', TRUE),
            'kd_agama'      => $this->input->post('agama', TRUE),
            'nama'          => $this->input->post('nama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'foto'          => $foto,
            'id_rombel'     => $this->input->post('rombel',TRUE),
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
        );
        $this->db->insert($this->table,$data);
        
        $tahun_akademik = $this->db->get_where('tbl_tahun_akademik',array('is_aktif'=>'y'))->row_array();
        
        $history =  array(
            'nis'                 =>  $this->input->post('nis', TRUE),
            'id_tahun_akademik'   =>  $tahun_akademik['id_tahun_akademik'],
            'id_rombel'           =>  $this->input->post('rombel', TRUE)
            );
        $this->db->insert('tbl_history_kelas',$history);
    }
    
    function update($foto) {
        if(empty($foto)){
            // update without foto
            $data = array(
                'kd_agama'      => $this->input->post('agama', TRUE),
                'nama'          => $this->input->post('nama', TRUE),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
                'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
                'gender'        => $this->input->post('gender', TRUE),
                'id_rombel'     => $this->input->post('rombel',TRUE),
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
            );
        }else{
            // update with foto
            $data = array(
            'kd_agama'      => $this->input->post('agama', TRUE),
            'nama'          => $this->input->post('nama', TRUE),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
            'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
            'gender'        => $this->input->post('gender', TRUE),
            'foto'          => $foto,
            'id_rombel'     => $this->input->post('rombel',TRUE),
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
            );
        }
        $nis   = $this->input->post('nis');
        $this->db->where('nis',$nis);
        $this->db->update($this->table,$data);
    }
    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }

}