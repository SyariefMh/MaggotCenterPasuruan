<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Primary key tabel
    protected $primaryKey = 'UID_Produk';

    // Jika primary key bukan auto-increment
    public $incrementing = false;

    // Tipe data primary key (karena menggunakan UUID)
    protected $keyType = 'string';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'UID_Produk',
        'Nama',
        'Deskripsi',
        'Gambar',
        'Harga',
    ];

    // Kolom tanggal yang akan di-manage oleh Laravel
    public $timestamps = true;

    // Jika kamu ingin menonaktifkan timestamps, bisa gunakan ini
    // public $timestamps = false;
}
