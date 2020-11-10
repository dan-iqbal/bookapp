<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        DB::table('authors')->insert([
            'name' => 'Masashi Kishimoto',
            'gender' => 'male',
            'biography' => 'Masashi Kishimoto adalah seorang Mangaka Jepang. Masashi Kishimoto mulai mengembangkan bakatnya akan menggambar semenjak usia SD. Dia menjadi mangaka terkenal semenjak karyanya, Naruto sukses besar baik di Jepang sendiri ataupun di negara-negara lain.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('authors')->insert([
            'name' => 'Yusei Matsui',
            'gender' => 'male',
            'biography' => 'Yūsei Matsui adalah seniman manga Jepang. Dia adalah asisten Yoshio Sawai, seniman manga dari Bobobo-bo Bo-bobo. Dua manga-nya Neuro: Kelas Detektif Supernatural dan Pembunuhan diserialkan dalam Weekly Shonen Jump. ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('authors')->insert([
            'name' => 'Touma Kamiyama',
            'gender' => 'male',
            'biography' => 'is the main protagonist of Kamen Rider Saber. He is a novelist and bookstore owner who fights the Megid as Kamen Rider Saber in the hopes of recovering his lost childhood memories.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('authors')->insert([
            'name' => 'Hajime Ishiyama',
            'gender' => 'male',
            'biography' => 'Para penggemar manga dan anime pastinya mengenal judul yang satu ini, Shingeki no Kyojin atau juga dikenal sebagai Attack on Titan. Buah karya mangaka Hajime Isayama ini, telah menuai sukses yang sangat besar di negeri asalnya, Jepang maupun di beberapa negara lain hingga menumbuhkan fans di Korea.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
