<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vat extends Model
{
    protected $fillable = [
        'vat', 'logo', 'favicon', 'phone',  'email', 'address'
    ];
}
