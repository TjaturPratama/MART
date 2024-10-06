<?php

namespace Database\Factories;

use App\Models\KepalaKeluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KepalaKeluarga>
 */
class KepalaKeluargaFactory extends Factory
{
    protected $model = KepalaKeluarga::class;

    // Daftar no_kk yang telah disediakan
    protected static $noKKList = [
        '1234567890',
        '2345678901',
        '3456789012',
        '4567890123',
        '5678901234',
        '6789012345',
        '7890123456',
        '8901234567',
        '9012345678',
        '0123456789',
    ];

    // Counter untuk memilih no_kk sesuai urutan
    protected static $counter = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Ambil no_kk berdasarkan urutan counter, gunakan modulo untuk menghindari kesalahan indeks
        $noKK = self::$noKKList[self::$counter % count(self::$noKKList)];

        // Increment counter untuk entri berikutnya
        self::$counter++;

        return [
            'kepala_keluarga' => $this->faker->name, // Nama kepala keluarga menggunakan Faker
            'no_kk' => $noKK, // Menggunakan no_kk dari array berdasarkan urutan
        ];
    }
}
