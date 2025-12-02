<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffingForCompanyRequest extends BaseModel
{
    //
    protected $fillable = [
        'company',
        'general_manger',
        'email',
        'phone',
        'sector',
        'service_type',
        'description'
    ];
}
