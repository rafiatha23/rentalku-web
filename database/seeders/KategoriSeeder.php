<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori_kota = [
            ['name'=> "Surabaya"],
            ['name'=> "Yogayakarta"],
            ['name'=> "Bandung"],
            ['name'=> "Jakarta"],
            ['name'=> "Malang"],
        ];
        
        DB::table("kategori_kotas")->insert($kategori_kota);

        $kategori_seat = [
            ['name'=> "4"],
            ['name'=> "7"],
            ['name'=> "9"],
        ];
        DB::table("kategori_seats")->insert($kategori_seat);

        $kategori_jenis = [
            ['name'=> "MVP"],
            ['name'=> "Sedan"],
            ['name'=> "SUV"],
            ['name'=> "Bus"],
        ];
        DB::table("kategori_jenis")->insert($kategori_jenis);
    }
}
