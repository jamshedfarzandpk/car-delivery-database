<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */

    public function run()
    {
		
        User::factory()->count(4)->create();

        $this->command->info('User Seeded');
    }
}
