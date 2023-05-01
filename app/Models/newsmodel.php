<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsmodel extends Model
{
    use HasFactory;
    protected $table='news_list';
    protected $fillable=['title','content','image'];
}
