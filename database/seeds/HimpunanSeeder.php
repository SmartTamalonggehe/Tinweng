<?php

namespace Database\Seeders;

use App\Models\Himpunan;
use Illuminate\Database\Seeder;

class HimpunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Himpunan::create([
            'nm_himpunan' => 'Rendah',
            'bobot_himpunan' => 1,
        ]);
        Himpunan::create([
            'nm_himpunan' => 'Sedang',
            'bobot_himpunan' => 2,
        ]);
        Himpunan::create([
            'nm_himpunan' => 'Tinggi',
            'bobot_himpunan' => 3,
        ]);
    }
}
