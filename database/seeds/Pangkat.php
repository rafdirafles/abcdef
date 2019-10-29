<?php

use Illuminate\Database\Seeder;

class Pangkat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pangkats')->insert([

            'nama_pangkat'=>'Kombes',
        ]);
    }
}
