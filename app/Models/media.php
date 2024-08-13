<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;

    protected $table = 'beritas'; // Nama tabel, sesuaikan dengan nama tabel kamu

    protected $primaryKey = 'UID_Berita'; // Kolom primary key

    public $incrementing = false; // Jika primary key tidak auto-increment

    protected $keyType = 'string'; // Tipe data primary key

    protected $fillable = [
        'UID_Berita',
        'Judul',
        'Deskripsi',
        'Tanggal',
        'Gambar',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'Tanggal',
    ];
}
