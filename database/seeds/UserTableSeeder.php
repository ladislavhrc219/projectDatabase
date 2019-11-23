<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // factory(App\User::class, 100)->create()->each(function ($user) {
            // Seed the relation with one address
            // $address = factory(App\UserAddress::class, 100)->make();
            // $user->address()->saveMany($address);
            // // Seed the relation with 5 purchases
            // $purchases = factory(App\UserPurchase::class, 50)->make();
            // $user->purchases()->saveMany($purchases);
            // $item = factory(App\Items::class, 100)->make();
            // $item->item()->saveMany($item);
        // });

        factory(App\User::class, 100)->create()->each(function ($user) {
            // Seed the relation with one address
            $items = factory(App\Items::class, 100)->make();
            $items->item()->saveMany($items);
        });
    }
}
