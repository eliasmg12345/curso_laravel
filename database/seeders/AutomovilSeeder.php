<?php

namespace Database\Seeders;

use App\Models\Automovil;
use Illuminate\Database\Seeder;

class AutomovilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $automovil=Automovil::create([
            'marca'=>'toyota',
            'modelo'=>'auris',
            'color'=>'blanco',
            'precio'=>'25555',
            'matricula'=>'1213656'
        ]);
        $automovil=Automovil::create([
            'marca'=>'volvo',
            'modelo'=>'s90',
            'color'=>'negro',
            'precio'=>'800000',
            'matricula'=>'3425435'
        ]);
        $automovil=Automovil::create([
            'marca'=>'peugeot',
            'modelo'=>'3008 SUV',
            'color'=>'plomo',
            'precio'=>'43000',
            'matricula'=>'32432432'
        ]);
        $automovil=Automovil::create([
            'marca'=>'ford',
            'modelo'=>'kuga',
            'color'=>'azul',
            'precio'=>'30200',
            'matricula'=>'1243534'
        ]);
        $automovil=Automovil::create([
            'marca'=>'hyundai',
            'modelo'=>'santa fe',
            'color'=>'blanco',
            'precio'=>'67000',
            'matricula'=>'4564564'
        ]);
    }
}
