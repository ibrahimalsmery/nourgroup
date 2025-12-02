<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchForCompanyRequest extends BaseModel
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
