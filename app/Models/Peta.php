<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peta extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_peta';

    protected $table = 'petas';

    protected $guarded = ['id_peta'];
}
