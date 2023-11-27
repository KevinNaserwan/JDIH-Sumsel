<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';
    protected $fillable = ['jenis_dokumen'];


    public function dokumen()
    {
        return $this->hasMany(dokumen::class, 'jenis_dokumen', 'jenis_dokumen');
    }
    public $timestamps = false;
}
