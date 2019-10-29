<?php

use Illuminate\Database\Seeder;

class Jabatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([

            'nama_jabatan'=>'Kabag bindik',
        ]);
    }
}
