<?php

namespace Database\Seeders;

use App\Models\KepalaKeluarga;
use App\Models\Penduduk;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Factories\KepalaKeluargaFactory as kepala_keluargaFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'password' => Hash::make('123456'),
        ]);
        KepalaKeluarga::factory()->count(10)->create();
        Penduduk::factory()->count(20)->create();
    }
}
