<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $foreignKey = 'Room_id, user_id';
    protected $table = 'reservation';
    protected $fillable = array(
        'user_id',
        'dateIn',
        'dateOut',
    );
}
