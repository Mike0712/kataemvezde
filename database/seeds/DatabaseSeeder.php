<?php

use Illuminate\Database\Seeder;
use Mnabialek\LaravelModular\Facades\Modular;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modular::seed($this);
    }
}
