<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertServices extends BaseModel
{
    //
    protected $fillable = [
        'expert_id',
        'service_id',
    ];

    public function expert()
    {
        return $this->belongsTo(Expert::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
