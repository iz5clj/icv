<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m1 = new Message;
        $m1->name = 'm1';
        $m1->text01 = '106848';
        $m1->text02 = 'Positivi';
        $m1->updated = now();
        $m1->user_id = 1;
        $m1->save();

        $m2 = new Message;
        $m2->name = 'm2';
        $m2->text01 = '57576';
        $m2->text02 = 'Guariti';
        $m2->updated = now();
        $m2->user_id = 1;
        $m2->save();

    }
}