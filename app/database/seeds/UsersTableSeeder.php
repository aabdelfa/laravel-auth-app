<?php

class UsersTableSeeder extends seeder {
  public function run()
  {
      $faker = Faker\Factory::create();

      for($i=1; $i <10; $i++) {
        $user = User::create(array(
          'email' => $faker->email,
          'name' => $faker->unique->userName,
          'password' => $faker->word,
          'remember_token' => str_random(50)

          ));
      }
  }
}