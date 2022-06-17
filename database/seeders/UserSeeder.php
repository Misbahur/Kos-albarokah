<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'Pemilik',
                'email' => 'pemilik@gmail.com',
                'password' => Hash::make('1234567'),
                'nohp' => '088888888888',
                'foto' => 'https://cdn.pixabay.com/photo/2016/08/31/11/55/icon-1633250_1280.png',
                'ktp' => 'https://i.pinimg.com/originals/a9/ce/61/a9ce611ce29b695ba60f2db9d6f2215b.jpg',
                'alamat' => 'Kabat',
                'jenis_kelamin' => 'L',
                'role' => 'pemilik'
            ],
            [
                'name' => 'Penyewa',
                'email' => 'penyewa@gmail.com',
                'password' => Hash::make('1234567'),
                'nohp' => '099999999099',
                'foto' => 'https://cdn.pixabay.com/photo/2016/08/31/11/55/icon-1633250_1280.png',
                'ktp' => 'https://i.pinimg.com/originals/a9/ce/61/a9ce611ce29b695ba60f2db9d6f2215b.jpg',
                'alamat' => 'Tegaldelimo',
                'jenis_kelamin' => 'P',
                'role' => 'penyewa'
            ]
            ];

        User::insert($users);
    }
}
