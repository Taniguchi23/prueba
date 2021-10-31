<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'id'=>1,
                'title'=>'Plan Win 35',
                'description'=> 'Internet 10 MB + Cable WinTv 40 canales + Instalación gratis + Programación de programas',
                'price'=>35.00,
                'front'=>'1',
            ],
            [
                'id'=>2,
                'title'=>'Plan Win 55',
                'description'=> 'Internet 20 MB + Cable WinTv 60 canales + Instalación gratis + Programación de programas',
                'price'=>55.00,
                'front'=>'1',
            ],
            [
                'id'=>3,
                'title'=>'Plan Win 75',
                'description'=> 'Internet 50 MB + Cable WinTv 80 canales + Instalación gratis + Programación de programas',
                'price'=>75.00,
                'front'=>'1',
            ],
            [
                'id'=>4,
                'title'=>'Plan Win 105',
                'description'=> 'Internet 80 MB + Cable WinTv 100 canales + Instalación gratis + Programación de programas',
                'price'=>105.00,
                'front'=>'1',
            ],
        ];
        Plan::insert($plans);
    }
}
