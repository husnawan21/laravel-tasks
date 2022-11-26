<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // User::factory(10)->create();

    // User::factory()->create([
    //   'name' => 'Test User',
    //   'email' => 'test@example.com',
    // ]);
    // collect([
    //   [
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    //     'password' => bcrypt('password'),
    //     'email_verified_at' => now(),
    //     'created_at' => now(),
    //     'updated_at' => now()
    //   ],
    //   [
    //     'name' => 'Test User 2',
    //     'email' => 'test2@example.com',
    //     'password' => bcrypt('password'),
    //     'email_verified_at' => now(),
    //     'created_at' => now(),
    //     'updated_at' => now()
    //   ],

    // ])->each(function ($user) {
    //   User::create($user);
    // });

    User::factory(20)->create();
  }
}
