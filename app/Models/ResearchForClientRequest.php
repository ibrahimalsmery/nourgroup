<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchForClientRequest extends BaseModel
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'message',
    ];
}
