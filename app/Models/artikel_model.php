<?php

namespace App\Models;

use CodeIgniter\Model;

class artikel_model extends Model
{

    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['id_artikel', 'judul_artikel', 'penulis', 'Deskripsi'];

    public function getArtikel()
    {
        $builder = $this->db->table('artikel');
        return $builder->get();
    }

    public function saveArtikel($data)
    {
        $query = $this->db->table('artikel')->insert($data);
        return $query;
    }

    public function updateArtikel($data, $id)
    {
        $query = $this->db->table('artikel')->update($data, array('id_artikel' => $id));
        return $query;
    }

    public function deleteArtikel($id)
    {
        $query = $this->db->table('artikel')->delete(array('id_artikel' => $id));
        return $query;
    }
}
