<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public $incrementing=true;
    public $timestamps = true;
    public $tablename = "promotions";
}
