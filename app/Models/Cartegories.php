<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartegories extends Model
{
    use HasFactory;

    protected $table = 'cartegories';

    protected $fillable = [
        'name',
        'slug',
        'desription',
        'image',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'navbar_status',
        'status',
        'created_by',
    ];
    
}
