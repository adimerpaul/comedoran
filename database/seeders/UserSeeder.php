<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'name'=>'ADMIN',
//            'email'=>'admin@test.com',
//            'password'=>Hash::make('admin'),
//            'tipo'=>'ADMIN'
//        ]);
        DB::table('users')->insert([
            [
                'name'=>'estudiante',
                'email'=>'estudiante@test.com',
                'password'=>Hash::make('estudiante'),
                'tipo'=>'ESTUDIANTE'
            ],
            [
                'name'=>'ADMIN',
                'email'=>'admin@test.com',
                'password'=>Hash::make('admin'),
                'tipo'=>'ADMIN'
            ],
            [
                'name'=>'SOCIAL',
                'email'=>'social@test.com',
                'password'=>Hash::make('social'),
                'tipo'=>'SOCIAL'
            ],
            [
                'name'=>'NUTRICIONISTA',
                'email'=>'nutricionista@test.com',
                'password'=>Hash::make('nutricionista'),
                'tipo'=>'NUTRICIONISTA'
            ]
        ]);
    }
}
