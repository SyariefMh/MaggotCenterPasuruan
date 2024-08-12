<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    use HasFactory;

    protected $table = 'interface_data'; // Set the table name if it's different from the model name

    protected $fillable = [
        'UID_Interface', 'Nama', 'Deskripsi', 'created_at', 'updated_at',
    ];

    public $timestamps = true; // Set to false if created_at and updated_at aren't managed automatically
}

