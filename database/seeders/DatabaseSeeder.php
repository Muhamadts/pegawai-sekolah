<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Administrator',
                'role' => 'admin',
                'password' => Hash::make('password'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'guru.tendik@gmail.com'],
            [
                'name' => 'Guru dan Tendik',
                'role' => 'guru_tendik',
                'password' => Hash::make('password'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'kepsek@gmail.com'],
            [
                'name' => 'Kepala Sekolah',
                'role' => 'kepsek',
                'password' => Hash::make('password'),
            ]
        );
    }
}