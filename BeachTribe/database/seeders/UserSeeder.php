<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([

            // CONTAS ADMIN DOS MEMBROS DO GRUPO

            [
                "name" => 'Carolina',
                "email"=>'2231378@my.ipleiria.pt',
                "password" => '$2y$12$H721hzcP85rWpz.s9xbpN.JSxSdx0p8RrlNkt3DytlzKZkDEwbc5u',
                "phone" => NULL,
                "address" => NULL,
                "tipo" => 'A',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => 'Dinis',
                "email"=>'2231338@my.ipleiria.pt',
                "password" => '$2y$12$arl0YeMW2WchZFNLaaquGeb2icaN5BfWOfCso7KheWRrHDk/xm1hK',
                "phone" => NULL,
                "address" => NULL,
                "tipo" => 'A',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => 'João',
                "email"=>'2223235@my.ipleiria.pt',
                "password" => '$2y$12$C16TSDbq8BUDBS3EzgK92Ojer/dSfqSv35d8D3n0F9vqTsrBsCpw6',
                "phone" => NULL,
                "address" => NULL,
                "tipo" => 'A',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => 'Marcelo',
                "email"=>'2231340@my.ipleiria.pt',
                "password" => '$2y$12$gYjfiz1yPg8mpinr9IVMtuz/XFpp4OrrtcLSloO2SQZvD88r4BfVS',
                "phone" => NULL,
                "address" => NULL,
                "tipo" => 'A',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => 'Samuel',
                "email"=>'2220841@my.ipleiria.pt',
                "password" => '$2y$12$jZFDcpBjmcgUW6zG.KvozOjCjcxWrNz3.Tcw2jfpymhyS1UeMwEbO',
                "phone" => NULL,
                "address" => NULL,
                "tipo" => 'A',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // CONTAS DE CLIENTE
            
            [
                "name" => 'Felipe Pino',
                "email"=>'felipe.pino@gmail.com',
                "password" => '',
                "phone" => '923547681',
                "address" => '2001-650, Rua do Pino, Guimarães',
                "tipo" => 'C',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
