<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
           'name' => 'Cícero Roniel',
           'email' => 'admin@gmail.com'
        ]);
    }
}
