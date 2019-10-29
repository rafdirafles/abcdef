<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
    	for($i = 1; $i <= 50; $i++){
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('users')->insert([
    			'nama_pegawai' => $faker->name,
                'email' =>  $faker->email,
                'password' => bcrypt('secret'),
    			// 'gelar_depan' => $faker->randomElement(['spd','skom']),
    			// 'gelar_belakang' => $faker->randomElement(['drs','ir','prof']),
    			'no_kta_pegawai' =>$faker->numberBetween(1,50),
    			'jenis_pegawai' => $faker->randomElement(['pns','polri']),
    			'nip_nrp' =>  $faker->numberBetween(1,50),
    			'nidn' =>  $faker->randomElement(['drs1','ir','prof']),
    			'alamat' => $faker->address,
    			'tempat_lahir' =>$faker->randomElement(['jepara','demak','pati']),
    			'tanggal_lahir' => date($format = 'Y-m-d'),
                'jk' => $faker->randomElement(['L','P']),
                'agama' => $faker->randomElement(['islam','kristen','katolik','hindu','budha','konghucu']),
    			'no_kep_jabatan' => $faker->numberBetween(1,10),
    			'nik' => $faker->numberBetween(1,50),
    			// 'status_menikah' => $faker->randomElement(['belum kawin','kawin','janda','duda']),
    			// 'no_kk'=> $faker->randomElement(['d','i','p']),
                // 'hobi' => $faker->randomElement(['game','voly']),
                // 'no_tlp' => $faker->randomElement(['d','i','p']),
                'no_hp' => $faker->randomElement(['d','i','p']),
                'tgl_masuk' => date($format = 'Y-m-d'),
                // 'tinggi_badan' =>$faker->numberBetween(1,100),
                // 'berat_badan' => $faker->numberBetween(1,100),
                // 'warna_rambut' => $faker->randomElement(['hitam','merah']),
                // 'bentuk_muka' =>$faker->randomElement(['oval','bulat']),
                // 'warna_kulit' => $faker->randomElement(['hitam','putih']),
                // 'ciri_khas' => $faker->randomElement(['hitam','putih']),
                // 'cacat_tubuh' =>$faker->randomElement(['sakit','cidera']),
                'is_status' =>intval($faker->boolean),
                'id_satker'=>1,
                'id_kompartemen'=>1,
                'id_divisi'=>1,
                'pangkat'=>1,
                'jabatan'=>1,
                'level'=>1,
                'foto' => $faker->address,
    		]);
    	}
    }
}
