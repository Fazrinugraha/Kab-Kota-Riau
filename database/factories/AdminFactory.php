<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'tanggal_lahir' => $this->faker->date,
            'tempat_lahir' => $this->faker->city,
            'email' => $this->faker->unique()->safeEmail,
            'no_hp' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'kelas' => $this->faker->word,
            'prodi' => $this->faker->word,
            'jurusan' => $this->faker->word,
            'foto' => null, // Atau bisa menggunakan $this->faker->imageUrl() jika ingin mengisi
        ];
    }
}