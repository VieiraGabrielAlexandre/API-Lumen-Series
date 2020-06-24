<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'email' => 'email@email',
            'password' => \Illuminate\Support\Facades\Hash::make('senha')
        ]);
    }
}
