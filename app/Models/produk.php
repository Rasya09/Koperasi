<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'desc',
        'price',
        'stock',
        'kategori_id',
    ];
    
    public function Kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id','id');
    }
}