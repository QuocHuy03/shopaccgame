<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'categories';
    protected $fillable = ['title', 'decs', 'image', 'status', 'order_categoies'];

    public function accessories() {
        return $this->belongsTo(Accessories::class);
    }
    public function nick() {
        return $this->hasMany(Nick::class);
    }
}
