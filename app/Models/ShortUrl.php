<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class ShortUrl extends Model
{
    use HasFactory;
    protected $fillable = ['original_url','short_url','nom'];
   
}
