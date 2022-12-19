<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];

    protected $hidden = [
        // jika nanti ada field yang tidak mau ditampilkan
    ];

     // relasi ke tabel lain 
     public function product() {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    //accessor untuk URL Photo
    public function getPhotoAttribute($value) {
        return url('storage/' . $value);
    }
}
