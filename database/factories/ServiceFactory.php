<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = \App\Models\Service::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(), // مصفوفة من 3 أسطر
            'image' => 'https://placehold.co/600x400', // يمكن إضافة صور حقيقية لاحقاً
        ];
    }
}
