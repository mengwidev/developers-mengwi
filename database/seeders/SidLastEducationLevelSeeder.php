<?php

namespace Database\Seeders;

use App\Models\SidLastEducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SidLastEducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            "TIDAK / BELUM SEKOLAH",
            "BELUM TAMAT SD/SEDERAJAT",
            "TAMAT SD / SEDERAJAT",
            "SLTP/SEDERAJAT",
            "SLTA / SEDERAJAT",
            "DIPLOMA I / II",
            "AKADEMI/ DIPLOMA III/S. MUDA",
            "DIPLOMA IV/ STRATA I",
            "STRATA II",
            "STRATA III",
        ];

        foreach ($values as $value) {
            SidLastEducationLevel::firstOrCreate([
                "name" => $value,
            ]);
        };
    }
}
