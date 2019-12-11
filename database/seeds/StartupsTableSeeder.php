<?php

use Illuminate\Database\Seeder;

class StartupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('startups')->insert([
            'name' => 'alfabeta',
        ]);
    }
}
