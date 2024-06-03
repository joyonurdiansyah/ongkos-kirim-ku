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
        User::create([
            'name' => 'joyo',
            'email' => 'nurdiansyahjoyo@gmail.com',
            'password' => Hash::make('12345678'), 
            'email_verified_at' => now(), 
        ]);
    }
}
