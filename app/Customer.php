<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['firstname', 'lastname', 'email', 'number', 'address'];

    public $timestamps = false;
}
