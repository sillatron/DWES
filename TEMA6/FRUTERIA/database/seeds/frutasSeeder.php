<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=50;$i++){
            DB::table('fruta')->insert([
                'nombre'=>'Cereza'.$i,
                'descripcion'=> 'Descripcion de la fruta'.$i,
                'precio'=>$i,
                'fecha'=>date ('Y-m-d')
            ]);
        }
    //$this-> command->info('La tabla ha sido rellenada');
    }
}
