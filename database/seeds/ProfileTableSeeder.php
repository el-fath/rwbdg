<?php

use Illuminate\Database\Seeder;
use App\Model\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();
        factory(Profile::class, 1)->create();
    }
}
