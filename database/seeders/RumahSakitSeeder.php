<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RumahSakit;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RumahSakit::updateOrCreate(
            ['nama' => 'RSUD Ciawi'],
            [
                'alamat' => 'Jl Puncak No. 479, Ciawi, Bogor, Jawa Barat',
                'email' => 'info@rsudciawi.com',
                'telepon' => '0251-8240797'
            ]
        );

        RumahSakit::updateOrCreate(
            ['nama' => 'RSUD Kota Bogor'],
            [
                'alamat' => 'Jl. DR. Sumeru No.120, RT.03/RW.20, Menteng, Kec. Bogor Bar',
                'email' => 'rsud@kotabogor.go.id',
                'telepon' => '0251-8312292'
            ]
        );
    }
}
