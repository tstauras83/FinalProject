<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [

            ['name' => 'Aktyvus', 'type' => 'user'],
            ['name' => 'Neaktyvus', 'type' => 'user'],
            ['name' => 'Blokuotas', 'type' => 'user'],
            ['name' => 'Ištrintas', 'type' => 'user'],

        ];

        foreach ($statuses as $status) {
            Status::updateOrCreate($status);
        }
    }
}
