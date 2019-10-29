<?php

use Illuminate\Database\Seeder;

class Unit_kerja extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unit_kerjas')->insert([
            'nama_unit_kerja'=>'bindik',
        ]);
    }
}
