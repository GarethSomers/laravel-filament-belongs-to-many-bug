<?php

namespace Database\Seeders;

use Faker\Core\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\Collection::create([
             'title' => 'Foo Recipes'
         ]);

        \App\Models\Collection::create([
            'title' => 'Bar Recipes'
        ]);

        \App\Models\Collection::create([
            'title' => 'Foo Bar Recipes'
        ]);

        \App\Models\CollectionParent::create([
            'collection_id' => 3,
            'parent_id' => 1
        ]);

        \App\Models\CollectionParent::create([
            'collection_id' => 3,
            'parent_id' => 2
        ]);
    }
}
