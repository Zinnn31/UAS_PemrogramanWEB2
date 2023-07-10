<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;
    protected $fillable = ['simbol','namaAlternatif'];
    protected $table = 'alternatif';
    public $timestamps = false;
}
