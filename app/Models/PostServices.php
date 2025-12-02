<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostServices extends BaseModel
{
    //
    protected $fillable = [
        'post_id',
        'service_id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
