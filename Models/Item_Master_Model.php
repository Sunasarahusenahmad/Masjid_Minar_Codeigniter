<?php

namespace App\Models;

use CodeIgniter\Model;


class Item_Master_Model extends Model
{
    protected $table = 'item_master';
    protected $primaryKey = 'item_id';
    protected $allowedFields = [
        'category_id',
        'item_name',
        'item_image',
        'editor1'
    ];
}
