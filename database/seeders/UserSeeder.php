<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => sprintf('user%02d',$i),
                'email' => sprintf('user%02d@gmail.com',$i),
                'password' => Hash::make('password'),
                'level' => $i % 3,
            ]);
        }

    }
}
