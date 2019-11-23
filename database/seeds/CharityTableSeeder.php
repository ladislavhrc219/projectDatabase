<?php

use Illuminate\Database\Seeder;

class CharityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $charities = factory(App\Charity::class, 100)->make();
        foreach($charities as $charity) {
            $charity->save();
        }
    }
}
