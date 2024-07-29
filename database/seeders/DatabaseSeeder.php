<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Berita::create([
            'judul_berita' => 'Ombudsman RI Temukan Maladministrasi Terkait Belum Terbitnya SPPT PBB-P2 Atas 113 Bidang Tanah di Kabupaten Bungo',
            'link_gambar' => 'https://ombudsman.go.id/content/images/sp/sp_20240502_140152.jpg',
            'link_berita' => 'https://ombudsman.go.id/news/r/ombudsman-ri-temukan-maladministrasi-terkait-belum-terbitnya-sppt-pbb-p2-atas-113-bidang-tanah-di-kabupaten-bungo',
        ]);
    }
}
