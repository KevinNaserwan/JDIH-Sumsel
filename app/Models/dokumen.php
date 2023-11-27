<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';
    protected $fillable = ['jenis_dokumen', 'nomor', 'tahun', 'judul', 'teu', 'singkatan', 'tempat', 'tanggal_tetap', 'status', 'tanggal_pengundangan', 'subyek', 'pemrakarsa', 'sumber', 'bidang', 'urusan', 'bahasa', 'abstrak', 'dokumen'];


    public function jenis()
    {
        return $this->belongsTo(jenis::class, 'jenis_dokumen', 'jenis_dokumen');
    }
    public $timestamps = false;
}
