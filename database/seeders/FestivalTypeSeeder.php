<?php

namespace Database\Seeders;

use App\Models\FestivalType;
use Illuminate\Database\Seeder;

class FestivalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FestivalType::factory(5)->create();
    }
}
