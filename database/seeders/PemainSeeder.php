<?php

namespace Database\Seeders;
use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Belakang',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Depan',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Penjaga Gawang',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Kapten',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Belakang',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Depan',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Depan',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Belakang',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Kapten',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Depan',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Penjaga Gawang',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Depan',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Belakang',
        ]);
        Pemain::create([
            'nama_pemain'=>fake()->name(),
            'nomor_punggung'=>fake()->numberBetween(1,99),
            'posisi'=>'Pertahanan Depan',
        ]);

    }
}
