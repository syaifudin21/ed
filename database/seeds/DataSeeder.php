<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'username' => 'admin',
            'password' => bcrypt(121212)
        ];

        $guru = [
            // 'nomor_user' =>, 
            'nama' => 'Guru A',
            'deskripsi' => 'Guru A Mengajar',
            'username' => 'guru',
            'password' => bcrypt(121212)
        ];
        $siswa = [
            'nomor_user' => NULL, 
            'referal' => NULL, 
            'nama' => 'siswa A',
            'foto' => NULL,
            'kelas' => 'XI IPA',
            'username' => 'admin',
            'password' => bcrypt(121212)
        ];
        

        DB::table('admins')->insert($admin);
        DB::table('gurus')->insert($guru);
        DB::table('siswas')->insert($siswa);
        
    }
}
