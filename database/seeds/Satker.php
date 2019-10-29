<?php

use Illuminate\Database\Seeder;
// use DB;
class Satker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('satkers')->insert([
            'id_kompartemen'=>1,
            'nama_satker'=>'BAG JARLAT',
        ]);
    }
}
