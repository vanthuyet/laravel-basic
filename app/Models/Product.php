<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   protected $fillable = [
    'ten',
    'supplier_id',
    'mo_ta',
    'gia_ban',
    'so_luong_ton'
   ];
}
