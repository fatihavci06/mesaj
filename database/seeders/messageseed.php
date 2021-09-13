<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class messageseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
        'content'=>"guk guk! saat ".date('H'),
        'sender_id'=>0,
        'updated_at'=>date('Y.m.d.H.i.s'),
        'created_at'=>date('Y.m.d'),

        
        ]);
    }
}
