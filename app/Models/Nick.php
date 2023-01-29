<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nick extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'nicks';
    protected $fillable = ['title', 'attribute', 'price', 'status', 'description','image','category_id','ms'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function gallery() {
        return $this->hasMany(Gallery::class);
    }
}
