<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'type', 'description', 'price', 'slug', 'quantity'
    ];

    protected $hidden = [
        // jika nanti ada field yang tidak mau ditampilkan
    ];


    // relasi ke tabel lain 
    public function galleries() {
        // sementara di komen dulu sampai nanti sudah ada galleri
        // return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
