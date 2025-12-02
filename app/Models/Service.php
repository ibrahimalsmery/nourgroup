<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Service extends BaseModel
{
    use hasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'links',
        'description',
        'image',
        'custom_view'
    ];
    protected $casts = [
        'links' => 'array', // automatically cast JSON to array
    ];

    // ترجع رابط الصورة، سواء كانت خارجية أو مخزنة محليًا
    public function getImageUrl(): ?string
    {
        if (!$this->image) return null;

        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image; // صورة خارجية
        }

        return asset('public/' . $this->image); // صورة محلية
    }

    public function getLinks(): array
    {
        return $this->links ? json_decode($this->links, true) : [];
    }

    public function experts()
    {
        return $this->belongsToMany(Expert::class, 'expert_services', 'service_id', 'expert_id');
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_services', 'service_id', 'post_id');
    }

    public function page_sections(){
        return $this->hasMany(ServicePageSections::class);
    }
}
