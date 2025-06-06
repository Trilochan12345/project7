<?php

namespace App\Models;
use CodeIgniter\Model;

class CodesModel extends Model
{
    protected $table = 'codes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'series', 'category', 'phone', 'series_text', 'description', 'item_id'
    ];

public function getJoinedData()
{
    return $this->select('codes.*, item.item_name')
                ->join('item', 'item.id = codes.item_id')
                ->findAll();
}

}
