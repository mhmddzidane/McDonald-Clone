<?php

namespace App\Models;

use CodeIgniter\Model;

class PromoModel extends Model
{
    public function tampil_data()
    {
        return $this->db->table("promo")->orderBy('id', 'DESC')->get()->getResultArray();
    }
}
