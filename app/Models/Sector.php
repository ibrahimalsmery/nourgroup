<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends BaseModel
{
    /** @use HasFactory<\Database\Factories\SectorFactory> */
    use HasFactory;
    protected $fillable = ['name'];
}
