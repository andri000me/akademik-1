<?php

class Model_users extends CI_Model {

    public $table ="tbl_user";
    
    function save($foto) {
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE),
            'foto'            => $foto
        );
        $this->db->insert($this->table,$data);
    }
    
    function update($foto) {
        // update field foto kosong & password kosong
        if(empty($foto) && empty($this->input->post('password', TRUE))){
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'id_level_user'   => $this->input->post('id_level_user', TRUE)
        );}
        //update field password kosong & foto ada
        else if (empty($this->input->post('password', TRUE))){
            $data = array(
                'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
                'username'        => $this->input->post('username', TRUE),
                'id_level_user'   => $this->input->post('id_level_user', TRUE),
                'foto'            => $foto
            );
        }
        //update field password ada & foto kosong
        else if (empty($foto)){
            $data = array(
                'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
                'username'        => $this->input->post('username', TRUE),
                'id_level_user'   => $this->input->post('id_level_user', TRUE),
                'password'        => md5($this->input->post('password', TRUE)),
            );
        }
        //update field password ada & foto ada
        else{
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE),
            'foto'            => $foto
        );
        }
        $id_user   = $this->input->post('id_user');
        $this->db->where('id_user',$id_user);
        $this->db->update($this->table,$data);
    }

}