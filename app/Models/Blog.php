<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'blogs';
    protected $fillable = ['title', 'description', 'image', 'status', 'content','king_of_blogs'];
}
