<?php

namespace App\Models;

use CodeIgniter\Model;

class Masjid_Model extends Model
{
    protected $table = 'category_master';
    protected $primaryKey = 'id';
    protected $allowedFields = ['category_name'];
}


