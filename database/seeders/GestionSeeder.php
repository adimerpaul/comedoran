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
        DB::table('gestions')->insert(['nombre'=>'II/2001','tipo'=>'NUEVOS','inicio'=>'2021-01-01','fin'=>'2021-12-31']);
        DB::table('gestions')->insert(['nombre'=>'II/2001','tipo'=>'ANTIGUOS','inicio'=>'2021-01-01','fin'=>'2021-12-31']);
        DB::table('gestions')->insert(['nombre'=>'II/2001','tipo'=>'REPOSTULANTES','inicio'=>'2021-01-01','fin'=>'2021-12-31']);
    }
}
