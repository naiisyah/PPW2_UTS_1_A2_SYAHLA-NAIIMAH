<?php

namespace Database\Seeders;

use App\Models\Pemainmodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++){
            Pemainmodel::create([
                'NamaPemain'=>fake()->name(),
                'NoPunggung'=>fake()->numberBetween(1, 20),
                'Posisi'=>fake()->sentence(1),

            ]);
        }
    }
}
