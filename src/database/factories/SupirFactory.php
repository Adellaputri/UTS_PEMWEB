<?php

namespace Database\Factories;

use App\Models\Supir;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupirFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supir::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_supir' => $this->faker->name,
            'harga_sewa' => $this->faker->randomNumber(5),
            'usia' => $this->faker->numberBetween(20, 60),
            'status' => $this->faker->randomElement(['Aktif', 'Tidak Aktif']),
            'deskripsi' => $this->faker->text,
            'sehat' => $this->faker->boolean,
            'driver_lisensi_lengkap' => $this->faker->boolean,
            'berpengalaman' => $this->faker->boolean,
            'gambar' => 'default.jpg', // Default gambar
            'slug' => $this->faker->slug,
        ];
    }
}