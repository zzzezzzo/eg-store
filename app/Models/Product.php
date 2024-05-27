<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
        // SQL Statement -> SELECT * FROM categories WHERE id = $this->category_id
    }
}
