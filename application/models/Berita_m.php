<?php
class Berita_m extends CI_Model{
	function insert_db($data){
		$this->db->insert('berita',$data);
	}
        function select_db(){
            return $this->db->query("Select * FROM berita")->result();
        }
       function delete_db($id){
            $this->db->where('id_berita',$id);
            $this->db->delete('berita');
        }

        function tampilBeritaHome(){
            return $this->db->query("SELECT * FROM berita ORDER by tanggal DESC LIMIT 3")->result();
        }

        function select_id($id){
            return $this->db->query("SELECT * FROM berita WHERE id_berita='$id'")->result();
        }
        function edit_db($id,$data){
            $this->db->where('id_berita',$id);
            $this->db->update('berita',$data);
        }
        
        function select_berita(){
        $query = $this->db->query("SELECT * FROM berita order by tanggal DESC limit 10");
        return $query->result();
    }
        function select_berita_where($id) {
        $query = $this->db->query("SELECT * FROM berita WHERE id_berita='$id'");
        return $query->result();
    }

    function cariDataBerita($keyword)
    {
        $this->db->like('judul', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('isi', $keyword);
        return $this->db->get('berita')->result();
    }

    function tampilBeritaAgama($id)
    {
        $query = $this->db->query("SELECT * FROM berita WHERE kategori='Agama' AND id='$id'");
    }
}