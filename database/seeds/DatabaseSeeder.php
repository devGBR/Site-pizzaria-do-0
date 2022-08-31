<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::insert('insert into sabores (nome, descricao, tamanho)
                  values(?,?,?)',
                  array('Calabresa com queijo', 
                        'Calabresa, Queijo, Orégano, Cebola', 
                        'P = 15 , M = 30, G = 40, GG = 50, EGG = 60')
                 );

        DB::insert('insert into sabores (nome, descricao, tamanho)
                  values(?,?,?)',
                  array('Três Queijos', 
                        '3 Queijo, Orégano, Molho especial, Catupiry', 
                        'P = 15 , M = 30, G = 40, GG = 50, EGG = 60')
                 );                 
    }
}
