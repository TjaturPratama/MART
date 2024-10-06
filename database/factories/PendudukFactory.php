<?php

namespace Database\Factories;

use App\Models\KepalaKeluarga;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penduduk>
 */
class PendudukFactory extends Factory
{
    protected $model = Penduduk::class; // Pastikan Anda mendeklarasikan model yang sesuai

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Ambil daftar no_kk dari database
        $noKKList = KepalaKeluarga::pluck('no_kk')->toArray();

        return [
            'nik' => $this->faker->unique()->numerify('##########'), // 10 digit untuk NIK
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(), // Format bisa disesuaikan
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
            'no_kk' => $this->faker->randomElement($noKKList), // Memilih no_kk secara acak dari daftar
            'status' => $this->faker->randomElement(['Kepala Keluarga', 'Anggota Keluarga']),
            'no_telepon' => $this->faker->optional()->phoneNumber,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
        ];
    }
}
