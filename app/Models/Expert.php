<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Expert extends BaseModel
{

    protected $fillable = [
        'name',
        'title',
        'specialization',
        'image',
        'current_position',
        'qualifications',
        'experience',
        'sectors',
        'achievements',
        'quote',
        'email',
        'linkedin',
        'x',
        'facebook',
        'tiktok',
        'youtube',
        'instagram',
        'website',
    ];

    protected $casts = [
        'qualifications' => 'array',
        'sectors' => 'array',
        'achievements' => 'array',
    ];

    /**
     * علاقة تربط الخبير بالخدمات
     * باستخدام IDs المخزنة داخل حقل JSON
     */
    public function services()
    {
        return $this->belongsToMany(Service::class, 'expert_services', 'expert_id', 'service_id');
    }

    public function getImageAttribute($value){
        return $value ? $value : 'public/placeholders/expert.svg';
    }
}
