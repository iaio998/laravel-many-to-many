<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Vue',
            'Html',
            'Php',
            'Laravel',
            'Javascript',
            'Css',
            'Sass',
        ];
        foreach ($technologies as $technology) {
            $newCategory = new Technology();
            $newCategory->name = $technology;
            $newCategory->slug = Str::slug($technology, '-');
            $newCategory->save();
        }
    }
}
