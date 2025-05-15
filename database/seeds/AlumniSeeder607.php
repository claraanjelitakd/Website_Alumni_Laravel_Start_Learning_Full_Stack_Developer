<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AlumniSeeder607 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('alumni607')->insert([
        //     [
        //         'nim' => '72230607',
        //         'namalengkap' => 'Clara Angelita Karunia Dewi',
        //         'angkatan' => 2023,
        //         'email' => 'claraanjelitakd@gmail.com',
        //         'no_telp' => '085866408193',
        //         'alamat' => 'Krajan Tirtomartani Kalasan Sleman Yogyakarta',
        //         'linkedin' => 'https://www.linkedin.com/in/clara-angelita-karunia-dewi-77b5b228b/',
        //         'foto' => 'clara.jpg',
        //         'company' => 'PT. Djarum Indonesia',
        //         'job_title' => 'Software Engineer',
        //     ]
        // ]);

        $faker = Faker::create('id_ID');
        for ($i=0; $i<101;$i++){
            DB::table('alumni607')->insert([
                'nim' => $faker->unique()->numerify('########'),
                'namalengkap' => $faker->name,
                'angkatan' => $faker->year($max = 'now'),
                'email' => $faker->unique()->safeEmail,
                'no_telp' => substr(preg_replace('/\D/', '', $faker->phoneNumber), 0, 15),
                'alamat' => $faker->address,
                'linkedin' => $faker->url,
                'foto' => $faker->imageUrl(640, 480, 'people') . '.jpg',
                'company' => $faker->company,
                'job_title' => $faker->jobTitle,
            ]);
        }
    }
}
