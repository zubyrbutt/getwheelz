<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([

            'name' => 'About Cars',
            'slug' => str_slug('About cars')

        ]);
        Channel::create([

            'name' => 'About Bikes',
            'slug' => str_slug('About bikes')

        ]);

        Channel::create([

            'name' => 'About Car Rental',
            'slug' => str_slug('About Car Rental')

        ]);

        Channel::create([

            'name' => 'More Discussions',
            'slug' => str_slug('More Discussion')

        ]);
    }
}
