<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;    
use App\Models\User;
use App\Models\StaffProvince;
use Illuminate\Support\Facades\Hash;

class StaffProvinceSeeder extends Seeder
{
    public function run()
    {
        $staffUser = User::create([
            'email' => 'headstaff@aceh.com',
            'password' => Hash::make('password'),
            'role' => 'HEAD_STAFF',
            'name' => 'Test Staff',
            'username' => 'testhstaffaceh'
        ]);

        StaffProvince::create([
            'user_id' => $staffUser->id,
            'province' => 'ACEH'
        ]);
    }
}
