<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $dim = array(180, 200, 220, 240, 260, 280, 300);
        $back_colors = array('0000FF', 'FF0000', 'FFFF00');

        foreach(range(1,50) as $index) {

            $k = array_rand($dim);
            $w = $dim[$k];

            $i = array_rand($back_colors);
            $c = $back_colors[$i];

            DB::table('posts')->insert([
                'description'  => $faker->text($maxNbChars = 30),
                'original'     => 'https://via.placeholder.com/180x400',
                'thumb_img'    => 'https://via.placeholder.com/90',
                'card_img'     => 'https://via.placeholder.com/' . $w . 'x400/' . $c,
                'publisher'    => 1,
                'is_published' => 1,
                'type'         => 1
            ]);
        }
    }
}
