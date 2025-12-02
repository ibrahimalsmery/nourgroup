<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElearningRequest extends BaseModel
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'interest',
        'message',
    ];
}
