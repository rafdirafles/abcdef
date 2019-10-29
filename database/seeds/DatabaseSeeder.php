<?php

use App\Unit_kerja;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(Unit_kerja::class);
        // $this->call(DatabaseSeeder::class);
        $this->call([
            Kompartemen::class,
            Satker::class,
            Divisi::class,
            Pangkat::class,
            Jabatan::class,
            UserSeed::class,
            CommentsTableSeeder::class,
        ]);
    }
}
