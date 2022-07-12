<?php
namespace App\models;
use CodeIgniter\Model;

class AntrianModel extends model{
 protected $table = 'antrian';
 protected $primaryKey = 'id';
 protected $useAutoIncrement = true;
 protected $allowedFields = ['nama','tanggal','no_antrian','status','waktu_panggil','waktu_selesai','pelayanan_id','loket_id'];
}
