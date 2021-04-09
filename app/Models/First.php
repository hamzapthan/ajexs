<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Db;
class First extends Model
{
    use HasFactory;
   protected $fillable = [
    'name','category','data',
   ];
}
