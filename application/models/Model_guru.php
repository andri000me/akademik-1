<?php

class Model_guru extends CI_Model {

    public $table ="tbl_guru";
    
    function save($foto) {
        $data = array(
            'nuptk'      => $this->input->post('nuptk', TRUE),
            'nama_guru'  => $this->input->post('nama_guru', TRUE),
            'gender'     => $this->input->post('gender', TRUE),
            'tempat_lahir'   => $this->input->post('tempat_lahir', TRUE),
            'tanggal_lahir'   => $this->input->post('tanggal_lahir', TRUE),
            'phone'   => $this->input->post('phone', TRUE),
            'alamat'   => $this->input->post('alamat', TRUE),
            'foto'          => $foto,
        );
        $this->db->insert($this->table,$data);
    }
    
    function update($foto) {
        if (empty($foto)) {
            $data = array(
                'nuptk'      => $this->input->post('nuptk', TRUE),
                'nama_guru'  => $this->input->post('nama_guru', TRUE),
                'gender'     => $this->input->post('gender', TRUE),
                'tempat_lahir'   => $this->input->post('tempat_lahir', TRUE),
                'tanggal_lahir'   => $this->input->post('tanggal_lahir', TRUE),
                'phone'   => $this->input->post('phone', TRUE),
                'alamat'   => $this->input->post('alamat', TRUE),
            );
        }else{
            $data = array(
                'nuptk'      => $this->input->post('nuptk', TRUE),
            'nama_guru'  => $this->input->post('nama_guru', TRUE),
            'gender'     => $this->input->post('gender', TRUE),
            'tempat_lahir'   => $this->input->post('tempat_lahir', TRUE),
            'tanggal_lahir'   => $this->input->post('tanggal_lahir', TRUE),
            'phone'   => $this->input->post('phone', TRUE),
            'alamat'   => $this->input->post('alamat', TRUE),
            'foto'          => $foto,
            );

        }
        $id_guru   = $this->input->post('id_guru');
        $this->db->where('id_guru',$id_guru);
        $this->db->update($this->table,$data);
    }
    
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('tbl_user')->row_array();
        return $user;
    }

}