<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $foreignkey = 'id_supplier';
    protected $fillable = [
        'nama_barang',
        'harga',
        'stok',
    ];
}