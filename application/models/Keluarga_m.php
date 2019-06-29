<?php

class Keluarga_m extends CI_Model {

    function insert_db($data) {
        $this->db->insert('keluarga', $data);
    }

    function select_db() {
        return $this->db->query("Select * FROM keluarga")->result();
    }

    function select_status($status) {
        return $this->db->query("Select jumlah FROM keluarga WHERE status='$status'")->row();
    }

    function delete_db($id) {
        $this->db->where('id_keluarga', $id);
        $this->db->delete('keluarga');
    }

    function select_id($id) {
        return $this->db->query("Select * FROM keluarga WHERE id_keluarga='$id'")->result();
    }

    function edit_db($id, $data) {
        $this->db->where('id_keluarga', $id);
        $this->db->update('keluarga', $data);
    }

    function select_keluarga() {
        $query = $this->db->query("SELECT * FROM keluarga");
        return $query->result();
    }

    function select_keluarga_where($id) {
        $query = $this->db->query("SELECT * FROM keluarga WHERE id_keluarga='$id'");
        return $query->result();
    }

}
