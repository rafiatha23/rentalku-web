<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengemudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengemudi_data = [
            ['user_id' => 3,"owner_id" => 2,"harga" => 100000, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
            ['user_id' => 4,"owner_id" => 2,"harga" => 100000, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
        ];
        DB::table("pengemudis")->insert($pengemudi_data);
    }
}
