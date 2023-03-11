<?php

namespace Database\Seeders;
use DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outlets')->insert([
        [
            'nama'=>'Toko Dedeh Laundry',
            'alamat'=> 'Padaherang',
            'tlp'=>'09876543'
        ],
        [
            'nama'=>'Toko Dedeh Laundry-2',
            'alamat'=>'Kalipucang',
            'tlp'=>'098765432'
        ],
    ]);

         DB::table('users')->insert([
        [
            'nama'=>'Administrator',
            'username'=> 'admin',
            'password'=>bcrypt('1234'),
            'role'=>'admin',
            'outlet_id'=>1,
        ],
        [
            'nama'=>'Kasir',
            'username'=> 'kasir',
            'password'=>bcrypt('1234'),
            'role'=>'kasir',
            'outlet_id'=>1,
        ],
        [
            'nama'=>'Pemilik',
            'username'=>'owner',
            'password'=>bcrypt('1234'),
            'role'=>'owner',
            'outlet_id'=>1,
        ]
        ]);

        DB::table('pakets')->insert([
            [
                'nama_paket'=>'Reguler',
                'harga'=> 7000,
                'jenis'=>'kiloan',
                'outlet_id'=> 1,
            ],
            [
                'nama_paket'=>'Bed Cover',
                'harga'=>5000,
                'jenis'=>'bed_cover',
                'outlet_id'=> 1,
            ],

            
        ]);

        DB::table('members')->insert([
            [
                'nama'=>'Dodo Sidodo',
                'jenis_kelamin'=> 'L',
                'alamat'=>'Padaherang',
                'tlp'=> 12345678990
            ],
            [
                'nama'=>'Ananda',
                'jenis_kelamin'=> 'P',
                'alamat'=>'Padaherang',
                'tlp'=> 12345678988
            ],
            [
                'nama'=>'Caca',
                'jenis_kelamin'=> 'P',
                'alamat'=>'Banjarsari',
                'tlp'=> 12345678977
            ]

            
        ]);
    }
}
