<?php

namespace Database\Seeders;

use App\Models\Banjar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BanjarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            "Batu",
            "Gambang",
            "Pande",
            "Munggu",
            "Pandean",
            "Serangan",
            "Peregae",
            "Lebah Pangkung",
            "Pengiasan",
            "Alangkajeng",
            "Delod Bale Agung",
        ];

        foreach ($values as $value) {
            Banjar::firstOrCreate([
                "name" => $value,
            ]);
        }
    }
}
