<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffingForClientRequest extends BaseModel
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'sector',
        'job_type',
        'message',
        'file'
    ];
}
