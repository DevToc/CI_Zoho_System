<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    // protected $allowedFields = ['name', 'code', 'barcode', 'price', 'cost', 'weight'];


    protected $allowedFields = ['name', 'code', 'barcode', 'price', 'cost', 'weight', 'length', 'width', 'height', 'tax', 'buy', 'sale', 'stock_control', 'brand_id', 'category_id', 'image', 'description'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
