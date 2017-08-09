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
    	Model::unguard();

        $this->call('UsersTableSeeder');
        $this->call('CitasTableSeeder');
        $this->call('ClasesTableSeeder');
        $this->call('ConfiguracionTableSeeder');
        $this->call('CursosTableSeeder');
        $this->call('NoticiasTableSeeder');
        $this->call('ServiciosTableSeeder');
        $this->call('VideosTableSeeder');
    }
}
