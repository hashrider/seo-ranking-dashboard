<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'Hot',
            'color' => '#ec250d',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'Trending',
            'color' => '#1d8cf8',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'name' => 'New',
            'color' => '#e14eca',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
