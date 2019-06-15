<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);

        DB::table('complaints')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10).'@gmail.com',
            // 'password' => bcrypt('secret'),
        ]);
    }
}
