<?php

namespace Database\Seeders;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Jean Pool Ramirez',
            'email'=>'jean.seiya@hotmail.com',
            'password'=>bcrypt('12345678')
        ]);

        User::create([
            'name'=> 'AdminP',
            'email'=>'AdminP@AdminP.com',
            'password'=>bcrypt('12345678')
        ]);

        User::create([
            'name'=> 'Nuevo Nombre',
            'email'=>'new@new.com',
            'password'=>bcrypt('12345678')
        ]);

    }
}
