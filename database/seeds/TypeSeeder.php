<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(['name' => 'Park']);
        DB::table('types')->insert(['name' => 'Museum']);
        DB::table('types')->insert(['name' => 'Planetarium']);
        DB::table('types')->insert(['name' => 'Shopping center']);
        DB::table('types')->insert(['name' => 'University']);
    }
}
