<?php
namespace App\models;
use CodeIgniter\Model;


class LoketModel extends model{

    protected $table = 'loket';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'keterangan', 'pelayanan_id'];
    public function getLoket()
    {      
        $builder = $this->db->table('loket');
        $builder->select('loket.id,loket.nama as namaloket,loket.keterangan as ketloket,loket.pelayanan_id,pelayanan.nama,pelayanan.keterangan,pelayanan.kode');
        $builder->join('pelayanan', 'pelayanan.id = loket.pelayanan_id', 'left');
        $query = $builder->get();
        return $query->getResult();
    }

}