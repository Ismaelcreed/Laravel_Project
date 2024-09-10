<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    protected $fillable = [
        'nom',
        'etiquette',
        'petit_desc',
        'desc',
        'prix normal',
        'solde',
        'status_stock',
        'quantite',
        'image',
        'images',
        'category_id',
        'brand_id',
        'created_at',
        'updated_at'
    ];
}
