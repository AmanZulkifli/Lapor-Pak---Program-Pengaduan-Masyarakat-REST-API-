<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



use App\Models\User;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Head Staff Aman',
            'username' => 'head staff DKI',
            'email' => 'hstaff@jakarta.com',
            'role' => 'HEAD_STAFF',
            'password' => Hash::make('aman1234'),
        ]);

        
    }
}
