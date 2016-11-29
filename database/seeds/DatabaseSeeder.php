<?php

use Estoque\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategoriaTableSeeder');
    }
}

class CategoriaTableSeeder extends Seeder
{
    public function run(){
        Categoria::create(['nome' => 'ELETRODOMESTICO']);
        Categoria::create(['nome' => 'ELETRONICO']);
        Categoria::create(['nome' => 'BRINQUEDO']);
        Categoria::create(['nome' => 'ESPORTE']);
    }
}