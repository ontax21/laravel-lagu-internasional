<?php

namespace Database\Seeders;

use App\Models\LaguInternasional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaguInternasionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaguInternasional::factory()->count(10)->create();
    }
}
