<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Compare extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id'];
}
