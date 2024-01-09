<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = new Tag;
        $tag->name = 'Javascript';
        $tag->save();

        $tag1 = new Tag;
        $tag1->name = 'PHP';
        $tag1->save();

        $tag2 = new Tag;
        $tag2->name = 'Livewire';
        $tag2->save();

        $tag3 = new Tag;
        $tag3->name = 'Python';
        $tag3->save();

        $tag3 = new Tag;
        $tag3->name = 'Laravel';
        $tag3->save();
    }
}
