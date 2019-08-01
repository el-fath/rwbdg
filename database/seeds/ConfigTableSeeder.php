<?php

use Illuminate\Database\Seeder;
use App\Model\Config;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::truncate();
        factory(Config::class, 1)->create();
    }
}
