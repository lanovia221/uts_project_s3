<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class content_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert(
            [
                'nama' => 'Resident Evil',
                'jenis' => 'game',
                'durasi' => '30-60 minute',
                'youtuber' => 'Atta',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('contents')->insert(
            [
                'nama' => 'Mukbang Octupus',
                'jenis' => 'food',
                'youtuber' => 'Ria',
                'durasi' => '5-10 minute',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('contents')->insert(
            [
                'nama' => 'Unboxing Paket Baju Untuk Talita',
                'jenis' => 'daily',
                'durasi' => '5-15 minute',
                'youtuber' => 'Radit',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        );

        
    }
}
