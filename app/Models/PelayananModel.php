<?php
namespace App\models;
use CodeIgniter\Model;

class PelayananModel extends model{
 protected $table = 'pelayanan';
 protected $primaryKey = 'id';
 protected $useAutoIncrement = true;
 protected $allowedFields = ['nama', 'keterangan', 'kode'];
}