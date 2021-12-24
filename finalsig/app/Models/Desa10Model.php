<?php

namespace App\Models;

use CodeIgniter\Model;

class Desa10Model extends Model
{
    protected $table      = 'desa10';
    protected $allowedFields = [
        'foto', ' keterangan', 'desa1','desa2','desa3','desa4', 'desa5',
    'desa6', 'desa7', 'desa8', 'desa9', 'desa10', 'desa11', 'desa12', 'desa13', 'desa14', 'desa15'];

    public function search($keyword)
    {
        return $this->table('desa10')->like('slug', $keyword);
    }

    public function getdesa($kecamatan = false)
    {
        if ($kecamatan == false) {
            return $this->findAll();
        }

        return $this->where(['kecamatan' => $kecamatan])->first();
    }

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->table('desa10')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('desa10')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
}
