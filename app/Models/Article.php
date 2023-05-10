<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
    public function category () {
        return $this->belongTo(Category::class);
    }
    public function user () {
        return $this->belongsTo(User::class);
    }
}
