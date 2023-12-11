<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at', 'tanggal_lahir'];

    public function religion()
    {
        return $this->belongsTo(Religion::class, 'id_religion', 'id');
    }
}
