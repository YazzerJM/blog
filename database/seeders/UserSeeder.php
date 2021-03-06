<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yasser Jimenez Martinez',
            'email' => 'yazzer.jimenez@gmail.com',
            'password' => bcrypt('123123')
        ])->assignRole('Admin');

        User::factory(99)->create();
    }
}
