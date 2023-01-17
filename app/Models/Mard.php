<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mard extends Model
{
    use HasFactory;
    protected $table = 'mardon';
    protected $fillable = ['phone','name','address'];
}
