<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Database\Seeders\StatesTableSeeder;
use Database\Seeders\UserTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    
    /**
     * Test the get List of All Customers.
     *
     * @return void
     */
    public function test_the_customers_list_with_returns_a_successful_response()
    {
        $this->seed(StatesTableSeeder::class);
        $this->seed(UserTableSeeder::class);
        $user = User::get()->count();
        $this->assertTrue($user > 0);

        
    }
}
