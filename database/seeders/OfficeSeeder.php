<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(table: "offices")->insert([
            "id" => "1",
            "name" => "Cikutra Office",
            "address" => "Jl. Cikutra No. 1, Cikutra, Kota Bandung, Jawa Barat 40132",
            "contactName" => "Jaya Kusuma",
            "phone" => "089614568840",
            "image" => '',
        ]);

        Office::factory(10)->create();
    }
}
