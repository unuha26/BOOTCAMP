<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $foreignKey = 'Room_id, Customer_id';
    protected $table = 'transaction_details';
    protected $fillable = array(
        'TransactionDate',
        'price',
        'CheckInDate',
        'CheckOutDate',
    );
}
