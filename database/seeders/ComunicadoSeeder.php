<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comunicados')->insert([
            'nombre'=>'CONVOCATORIA',
            'contenido'=>'convocarotia a',
            'color'=>'note-personal',
            'created_at'=>now()
        ]);
        DB::table('comunicados')->insert([
            'nombre'=>'CONVOCATORIA',
            'contenido'=>'convocarotia a',
            'color'=>'note-work',
            'ESTADO'=>'OCULTO',
            'created_at'=>now()
        ]);
        DB::table('comunicados')->insert([
            'nombre'=>'CONVOCATORIA',
            'contenido'=>'convocarotia a',
            'color'=>'note-social',
            'created_at'=>now()
        ]);
        DB::table('comunicados')->insert([
            'nombre'=>'CONVOCATORIA',
            'contenido'=>'convocarotia a',
            'color'=>'note-important',
            'ESTADO'=>'OCULTO',
            'created_at'=>now()
        ]);
        DB::table('comunicados')->insert([
            'nombre'=>'CONVOCATORIA',
            'contenido'=>'convocarotia a',
            'color'=>'note-fav',
            'created_at'=>now()
        ]);
    }
}
