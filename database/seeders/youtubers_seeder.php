<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class youtubers_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtuber')->insert(
            [
                'name' => 'Atta Halilintar',
                'salary' => 'US$29',
                'description' => 'post video once in a week',
                'code' => 'Atta',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('youtuber')->insert(
            [
                'name' => 'Ria Ricis',
                'salary' => ' US$268',
                'description' => 'post video twice in a week',
                'code' => 'Ria',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('youtuber')->insert(
            [
                'name' => 'Raditya Dika',
                'salary' => 'US$52',
                'description' => 'everyday',
                'code' => 'Radit',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

    }
}
