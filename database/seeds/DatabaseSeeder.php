<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Daniel',
            'apellidos' => 'Reyes Espinoza',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('alumnoss'),
        ]);
    }
}