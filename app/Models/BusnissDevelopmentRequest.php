<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusnissDevelopmentRequest extends BaseModel
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'sector',
        'service',
        'message',
    ];
}
