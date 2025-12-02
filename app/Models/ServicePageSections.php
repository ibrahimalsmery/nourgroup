<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePageSections extends BaseModel
{
    //
    protected $fillable = [
        'title',
        'content',
        'image',
        'service_id'
    ];
}
