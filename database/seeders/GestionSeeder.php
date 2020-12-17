<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gestions')->insert(['nombre'=>'II/2000','tipo'=>'NUEVOS','inicio'=>'2020-01-01','fin'=>'2020-12-31']);
        DB::table('gestions')->insert(['nombre'=>'II/2000','tipo'=>'ANTIGUOS','inicio'=>'2020-01-01','fin'=>'2020-12-31']);
        DB::table('gestions')->insert(['nombre'=>'II/2000','tipo'=>'REPOSTULANTE','inicio'=>'2020-01-01','fin'=>'2020-12-31']);
    }
}
