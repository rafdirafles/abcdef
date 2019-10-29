<?php

use Illuminate\Database\Seeder;

class Divisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('divisis')->insert([
            'id_satker'=>1,
            'nama_devisi'=>'siak',
        ]);
    }
}
