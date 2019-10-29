<?php

use Illuminate\Database\Seeder;

class Kompartemen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('kompartemens')->insert([
            'nama_kompartemen'=>'DIT AK',
        ]);
    }
}
