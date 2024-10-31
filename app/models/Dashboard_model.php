<?php

class Dashboard_model
{
    private $table = 'restoran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDashboard()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDashboardById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function tambahDataRestoran($data)
    {
        $query = "INSERT INTO restoran 
              (nama_resto, kisaran_harga, no_hp, alamat, deskripsi, deskripsi_singkat, img_url, img_preview1, img_preview2, img_preview3, ratting)
              VALUES
              (:nama_resto, :kisaran_harga, :no_hp, :alamat, :deskripsi, :deskripsi_singkat, :img_url, :img_preview1, :img_preview2, :img_preview3, :ratting)";

        $this->db->query($query);
        $this->db->bind('nama_resto', $data['nama_resto']);
        $this->db->bind('kisaran_harga', $data['kisaran_harga']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('deskripsi_singkat', $data['deskripsi_singkat']);
        $this->db->bind('img_url', $data['img_url']);
        $this->db->bind('img_preview1', $data['img_preview1']);
        $this->db->bind('img_preview2', $data['img_preview2']);
        $this->db->bind('img_preview3', $data['img_preview3']);
        $this->db->bind('ratting', $data['ratting']); // Binding ratting

        $this->db->execute();

        return $this->db->rowCount();
    }




    public function hapusDataDashboard($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

 // Mengambil data restoran berdasarkan id
public function getRestoranById($id) {
    $this->db->query('SELECT * FROM restoran WHERE id = :id');
    $this->db->bind('id', $id);
    return $this->db->single();
}

// Update data restoran
public function updateRestoran($data) {
    $query = "UPDATE restoran SET 
                nama_resto = :nama_resto, 
                kisaran_harga = :kisaran_harga, 
                no_hp = :no_hp, 
                alamat = :alamat, 
                deskripsi = :deskripsi, 
                deskripsi_singkat = :deskripsi_singkat, 
                img_url = :img_url, 
                img_preview1 = :img_preview1, 
                img_preview2 = :img_preview2, 
                img_preview3 = :img_preview3, 
                ratting = :ratting 
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama_resto', $data['nama_resto']);
    $this->db->bind('kisaran_harga', $data['kisaran_harga']);
    $this->db->bind('no_hp', $data['no_hp']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->bind('deskripsi_singkat', $data['deskripsi_singkat']);
    $this->db->bind('img_url', $data['img_url']);
    $this->db->bind('img_preview1', $data['img_preview1']);
    $this->db->bind('img_preview2', $data['img_preview2']);
    $this->db->bind('img_preview3', $data['img_preview3']);
    $this->db->bind('ratting', $data['ratting']);

    $this->db->execute();
    return $this->db->rowCount();
}



    public function cariDataDashboard()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama_resto LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}