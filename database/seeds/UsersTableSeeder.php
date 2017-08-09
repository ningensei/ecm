<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    
    public function run()
    {   
        DB::table('users')->insert([
            'name' => 'adminECM',
            'email' => 'ecmusica@gmail.com',
            'password' => '$2y$10$gigso8yJCmna5N56fArpuuK8KXwd43tSAjdKsDZsHtaUg.AnKYphy'
        ]);
    }   
}