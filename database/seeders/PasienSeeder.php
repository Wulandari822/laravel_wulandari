<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::updateOrCreate(
            ['nama' => 'Fitri Yani'],
            [
                'alamat' => 'Jl. Melati No.3, Bandung',
                'telepon' => '08198765432',
                'rumah_sakit_id' => 2,
            ]
        );

        Pasien::updateOrCreate(
            ['nama' => 'Wulandari'],
            [
                'alamat' => 'Jl. Anggrek No.7, Jakarta',
                'telepon' => '081517091474',
                'rumah_sakit_id' => 1,
            ]
        );
    }
}
