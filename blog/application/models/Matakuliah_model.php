<?php
class Matakuliah_model extends CI_Model {
    // Buat Property atau Variabel
    public $id, $nama, $sks, $kode;

    public function getAll(){
        // menampilkan seluruh data yang ada dalam tabel matakuliah menggunakan query bulder
        $query = $this->db->get('matakuliah');
        return $query->result();
        
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('matakuliah', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO matakuliah (nama_matkul, sks, kode, dosen_id) VALUES (?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE matakuliah SET nama_matkul=?,sks=?,kode=?,dosen_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data matakuliah
        $sql = "DELETE FROM matakuliah WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>