<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
            'password' => bcrypt('admin123'),
        ]);

        #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan nilai masing-masing anggota kelompok
        User::create([
            'nama' => 'Sopian Aji',
            'email' => 'sopian4ji@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081234567892',
            'password' => bcrypt('admin123'),
        ]);

        Kategori::create([
            "nama_kategori" => "Brownies",
        ]);
        Kategori::create([
            "nama_kategori" => "combro",
        ]);
        Kategori::create([
            "nama_kategori" => "Dawet",
        ]);
        Kategori::create([
            "nama_kategori" => "Mochi",
        ]);
        Kategori::create([
            "nama_kategori" => "wingko",
        ]);
    }
}
