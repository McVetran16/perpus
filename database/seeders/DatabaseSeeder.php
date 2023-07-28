<?php

namespace Database\Seeders;

use App\Model\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => Role::where('name', 'SuperAdmin')->first('id'),
        ]);
    }
}
