<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        //
        $sectors = [
            ['name' => 'اقتصادي وتنموي'],
            ['name' => 'بنية تحتية'],
            ['name' => 'اجتماعي وانساني'],
            ['name' => 'تعليمي وتدريب'],
            ['name' => 'تقني ومعرفي']
        ];

        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
