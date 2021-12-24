<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table      = 'umum';
    protected $allowedFields = [
        'jumdesa', 'tpstt', 'tpstd', 'tpsttd', 'fbabjs', 'fbabju', 'fbabbj', 'patipal', 'patsawah', 'patlt', 'patl', 'splcdl', 'splcrs', 'splcd', 'splcsi',
        'sauma', 'saumdm', 'saumtm', 'saumaiu', 'saums', 'saumd', 'saucma', 'saucdm', 'sauctm', 'saucaiu', 'saucs', 'saucd'
    ];

    public function search($keyword)
    {
        return $this->table('umum')->like('kecamatan', $keyword);
    }

    public function getHome($kecamatan = false)
    {
        if ($kecamatan == false) {
            return $this->findAll();
        }

        return $this->where(['kecamatan' => $kecamatan])->first();
    }

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->table('umum')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('umum')
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
