<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \Codeigniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'       => 'Johnny Wellton',
        //         'alamat'     => 'Jl. ABC No. 123',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama'       => 'Doddy Ferdiasyah',
        //         'alamat'     => 'Jl. BCA No. 103',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama'       => 'Erik',
        //         'alamat'     => 'Jl. TBC No. 129',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ]
        // ];

        $faker = \Faker\Factory::create('ms_MY');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama'       => $faker->name,
                'alamat'     => $faker->address,
                // faker hasilkan detik ditukar oleh codeigniter menjadi datetime, kemudian ditukar menjadi string.
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('orang')->insert($data);
        }

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        // $this->db->table('orang')->insertBatch($data);
    }
}
