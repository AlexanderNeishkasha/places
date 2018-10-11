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
        DB::table('types')->insert(['name' => 'Парк']);
        DB::table('types')->insert(['name' => 'Музей']);
        DB::table('types')->insert(['name' => 'Планетарий']);
        DB::table('types')->insert(['name' => 'Торговый центр']);
        DB::table('types')->insert(['name' => 'Университет']);
    }
}
