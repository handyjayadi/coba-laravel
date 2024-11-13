<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\ProdukSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(4)->create();

        Category::create([
            'name' => 'Pembunuhan',
            'slug' => 'pembunuhan'
        ]);

        Category::create([
            'name' => 'Kecelakaan',
            'slug' => 'kecelakaan'
        ]);

        Category::create([
            'name' => 'Social Media',
            'slug' => 'Social Media'
        ]);

        Post::create([
            'title' => 'BACOK BACOKAN DI TAMAN PANCING',
            'slug' => 'bacokditamanpancing',
            'excerpt' => 'Kasus pembunuhan juru parkir (jukir) I Komang Agus Asmara, 25, yang terjadi di bantaran Sungai Taman Pancing,',
            'body' => 'Kasus pembunuhan juru parkir (jukir) I Komang Agus Asmara, 25, yang terjadi di bantaran Sungai Taman Pancing, Desa Pemogan, Kecamatan Denpasar Selatan, Kota Denpasar pada Rabu (6/11) lalu berhasil diungkap polisi. Pelaku pembunuhan itu ternyata adalah teman korban sendiri diketahui bernama Agus Sugianto, 31. Pelaku asal Banyuwangi, Jawa Timur itu disergap aparat kepolisian di mess tempat tinggalnya di Kelurahan Legian, Kecamatan Kuta, Kabupaten Badung, Jumat (8/11) dini hari sekitar pukul 02.00 Wita. ',
            'category_id' => 3,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'KECELAKAAN MAUD',
            'slug' => 'maud',
            'excerpt' => 'Pengemudi Calya Nopol BG 1425 BS tewas usai bertabrakan dengan sebuah truk. Diduga mobil yang dikendarai korban merupakan hasil curian.',
            'body' => 'Pengemudi Calya Nopol BG 1425 BS tewas usai bertabrakan dengan sebuah truk. Diduga mobil yang dikendarai korban merupakan hasil curian.
Diketahui peristiwa tersebut terjadi di Jalan Lintas Timur (Jalintim) Palembang - Jambi Km 158, Desa Simpang Tungkal, Kecamatan Tunja, Kabupaten Musi Banyuasin (Muba) pada, Jumat',
            'category_id' => 2,
            'user_id' => 2
        ]);
        
        Post::factory(3)->create();
    }
}
