<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            'Islam',
            'Kristen',
            'Katholik',
            'Hindu',
            'Budha',
            'Khonghucu',
            'Kepercayaan Terhadap Tuhan YME / Lainnya'
        ];

        foreach ($values as $value) {
            Religion::firstOrCreate([
                "name" => $value,
            ]);
        }
    }
}
