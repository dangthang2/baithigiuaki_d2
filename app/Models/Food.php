<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    // Chỉ định bảng 'foods' (số nhiều) được tạo từ migration
    protected $table = 'foods';

    protected $fillable = ['name', 'price', 'description', 'image', 'quantity', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
