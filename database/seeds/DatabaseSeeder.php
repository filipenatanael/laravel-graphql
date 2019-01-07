<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    factory('App\Models\User', 10)->create();
    // $this->call(UsersTableSeeder::class);
    // DB::table('users')->insert([
    //   'name' => str_random(10),
    //   'email' => str_random(10).'@gmail.com',
    //   'password' => bcrypt('secret'),
    // ]);
  }
}
