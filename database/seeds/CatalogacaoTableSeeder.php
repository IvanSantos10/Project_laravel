<?php

use Illuminate\Database\Seeder;

class CatalogacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Projeto\Entities\Catalogacao::class,500)->create();
    }
}
