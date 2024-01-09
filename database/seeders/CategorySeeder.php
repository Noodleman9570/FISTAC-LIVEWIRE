<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category;
        $category->name = 'Programacion';
        $category->save();

        $category1 = new Category;
        $category1->name = 'Desarrollo web';
        $category1->save();

        $category2 = new Category;
        $category2->name = 'Diseño web';
        $category2->save();

        
    }
}
