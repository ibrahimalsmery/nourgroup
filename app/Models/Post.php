<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'image', 'title', 'content','actived_at'];


    public function services(){
        return $this->belongsToMany(Service::class,'post_services','post_id','service_id');
    }
}
