<?php

/**
 * Description of Pengaduan_m
 *
 * @author Lenovo
 */
class Pengaduan_m extends CI_Model {

    function insert_db($data) {
        $this->db->insert('pengaduan', $data);
    }

    function select_db() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('pengaduan', 'user.email = pengaduan.username');
        $query = $this->db->get();
        return $this->db->query("Select * FROM pengaduan")->result();
    }

    function delete_db($id) {
        $this->db->where('id_pengaduan', $id);
        $this->db->delete('pengaduan');
    }

    function select_by_db($id) {
        return $this->db->query("Select * FROM pengaduan WHERE id_pengaduan='$id'")->result();
    }

    function edit_db($id, $data) {
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan', $data);
    }

    function select_pengaduan() {
        $query = $this->db->query("SELECT * FROM pengaduan order by tanggal DESC limit 5");
        return $query->result();
    }

    function select_pengaduan_where($id) {
        $query = $this->db->query("SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
        return $query->result();
    }

}
