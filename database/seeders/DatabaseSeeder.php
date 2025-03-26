<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Julius Bernardino Erfanda',
            'email' => 'juliusbernardinoerfanda@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '082254694962',
            'password' => bcrypt('19231679'),
        ]);
        User::create([
            'nama' => 'Marsel',
            'email' => 'katutunsambar@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '085246508729',
            'password' => bcrypt('19232049'),
        ]);
        User::create([
            'nama' => 'Muhammad Sidiq Permana',
            'email' => 'sidiq.permana8000@gmail.com',
            'role' => '2',
            'status' => 1,
            'hp' => '089693339118',
            'password' => bcrypt('19231410'),
        ]);
        User::create([
            'nama' => 'Will Smith',
            'email' => 'wills@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '089800453264',
            'password' => bcrypt('11118888'),
        ]);
        #data kategori
        kategori::create([
            'nama_kategori' => 'MLBB'
        ]);
        kategori::create([
            'nama_kategori' => 'PUBG'
        ]);
        kategori::create([
            'nama_kategori' => 'COC'
        ]);
        kategori::create([
            'nama_kategori' => 'FREE FIRE'
        ]);
        kategori::create([
            'nama_kategori' => 'COD'
        ]);
    }
}