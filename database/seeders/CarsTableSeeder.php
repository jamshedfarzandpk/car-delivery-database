<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Country;
use App\Models\CarModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        CarModel::truncate();
        Car::truncate();

        $cars = json_decode(file_get_contents(storage_path() . "/data/cars.json"), true);
        foreach ($cars as $key => $car) {
            $cars = Car::create([
                'title' => $car['title'],
                'value' => $car['value']
            ]);
            //   Insert Data to relational Table Car models
            foreach ($car['models'] as $key => $carModel) {
                if (!str_contains($carModel['value'], 'MODELS')) {
                    $cars->carModels()->create([
                        'title' => $carModel['title'],
                        'value' => $carModel['value']
                    ]);
                }
            }
        }
        $this->command->info('Cars Seeded');
    }
}
