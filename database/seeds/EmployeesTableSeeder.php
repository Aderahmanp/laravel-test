<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'username' => 'ucup',
            'startup_id' => 1
        ]);
        DB::table('employees')->insert([
            'username' => 'aidil',
            'startup_id' => 1
        ]);
        DB::table('employees')->insert([
            'username' => 'fadhil',
            'startup_id' => 1
        ]);
        DB::table('employees')->insert([
            'username' => 'ade',
            'startup_id' => 1
        ]);
        DB::table('employees')->insert([
            'username' => 'lerry',
            'startup_id' => 1
        ]);
    }
}

