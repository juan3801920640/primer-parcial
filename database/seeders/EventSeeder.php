<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Event::factory()->count(10)->create();

        DB::table('events')->insert(
            [
                'name' => 'Concierto Leyendas del Rock',
                'start_date' => now(),
                'end_date' => now(),
                'location' => 'Movistar Arena',
                'capacity' => 2000
            ]
            );
    }
}
