<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\State;
use App\Models\CarModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */

    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        State::truncate();

        $states = json_decode(file_get_contents(storage_path() . "/data/states.json"), true);
        foreach ($states as $key => $state) {
            State::create([
                'capital' => $state['capital'],
                'code' => $state['code'],
                'name' => $state['name'],
                'year' => $state['year'],

            ]);
        }

        $this->command->info('states Seeded');
    }
}
