<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spk extends Model
{
    use HasFactory;
    protected $fillable = ['id','hasil','namaAlternatif'];
    protected $table = 'spk';
    public $timestamps = false;
}
