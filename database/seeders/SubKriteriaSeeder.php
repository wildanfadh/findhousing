<?php

namespace Database\Seeders;

use App\Models\SubKriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // harga
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 150.5 juta s/d 160 juta',
                'nilai' => 9,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 160 juta s/d 170 juta',
                'nilai' => 8,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 170 juta s/d 180 juta',
                'nilai' => 7,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 150.5 juta s/d 160 juta',
                'nilai' => 6,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 190 juta s/d 200 juta',
                'nilai' => 5,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 200 juta s/d 210 juta',
                'nilai' => 4,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 210 juta s/d 220 juta',
                'nilai' => 3,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 220 juta s/d 230 juta',
                'nilai' => 2,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 1,
                'uraian' => 'Hrg > 230 juta s/d 240 juta',
                'nilai' => 1,
                'created_at' => now(),
            ],
            // end harga

            // tipe
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 21',
                'nilai' => 1,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 22',
                'nilai' => 2,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 23',
                'nilai' => 3,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 24',
                'nilai' => 4,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 25',
                'nilai' => 5,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 26',
                'nilai' => 6,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 27',
                'nilai' => 7,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 28',
                'nilai' => 8,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 29',
                'nilai' => 9,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 30',
                'nilai' => 10,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 31',
                'nilai' => 11,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 32',
                'nilai' => 12,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 33',
                'nilai' => 13,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 32',
                'nilai' => 14,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 33',
                'nilai' => 15,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 34',
                'nilai' => 16,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 35',
                'nilai' => 17,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 2,
                'uraian' => 'Tipe 36',
                'nilai' => 18,
                'created_at' => now(),
            ],
            // end tipe

            // fasilitas umum
            [
                'kriteria_id' => 3,
                'uraian' => 'Tingkat Bawah',
                'nilai' => 1,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 3,
                'uraian' => 'Tingkat Menengah',
                'nilai' => 2,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 3,
                'uraian' => 'Tingkat Tinggi/Atas',
                'nilai' => 3,
                'created_at' => now(),
            ],
            // end fasilitas umum

            // lokasi
            [
                'kriteria_id' => 4,
                'uraian' => 'Sangat terjangkau dari sarana publik',
                'nilai' => 1,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 4,
                'uraian' => 'Dekat dengan sarana publik',
                'nilai' => 2,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 4,
                'uraian' => 'Jauh dengan sarana publik',
                'nilai' => 3,
                'created_at' => now(),
            ],
            [
                'kriteria_id' => 4,
                'uraian' => 'Sangat jauh dengan sarana publik',
                'nilai' => 4,
                'created_at' => now(),
            ],
            // end lokasi
        ];

        SubKriteria::insert($data);
    }
}
