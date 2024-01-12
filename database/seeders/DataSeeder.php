<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Programming;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            "Ways", 'Tutorial', 'Tips', 'Websites', 'Frontend'
        ];
        $programmings = [
            'PHP', 'Laravel', 'NodeJS', 'JavaScript', 'HTML', 'CSS', 'Bootstrap'
        ];

        foreach($tags as $t){
            Tag::create([
                'slug' => Str::slug($t),
                'name' => $t,
            ]);
        };

        foreach($programmings as $p){
            Programming::create([
                'slug' => Str::slug($p),
                'name' => $p,
            ]);
        };
    }
}
