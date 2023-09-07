<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::insert([
            [
                'id' => 1,
                'name' => 'PT SINAR SURI',
                'address' => 'Jl. Maleo No. 4 HBM, Remu Utara, Distrik Sorong - Kota Sorong'
            ],
            [
                'id' => 2,
                'name' => 'CV KASIH MURAH',
                'address' => 'Jl. A.I Nasution No. 44 Klabala, Distrik Sorong Barat - Kota Sorong'
            ],
            [
                'id' => 3,
                'name' => 'TOKO MEGAH',
                'address' => 'Jl. Jend. A. Yani No. 71 Remu, Kota Sorong'
            ],
            [
                'id' => 4,
                'name' => 'TOKO SAHABAT',
                'address' => 'Jl. A. Yani No. 17 Malabutor, Distrik Sorong Manoi - Kota Sorong'
            ],
            [
                'id' => 5,
                'name' => 'SORONG BLANGKO',
                'address' => 'Jl. Pramuka No. 47 Remu Utara, Distrik Sorong Kota - Kota Sorong'
            ],
            [
                'id' => 6,
                'name' => 'TOKO SAPUTRA',
                'address' => 'Jl. Ps. Pagi Raya No. 112 Roa Malaka, Kec. Tambora - Kota Jakarta Barat'
            ],
            [
                'id' => 7,
                'name' => 'PT JOYCO',
                'address' => 'Kamal Muara, Kec. Penjaringan, Jakarta Utara'
            ],
            [
                'id' => 8,
                'name' => 'PT KENKO',
                'address' => 'Blok D, Jalan Pantai Indah Selatan 1 Kl. Elang Laut NO.55-56, Kamal Muara - Kec. Penjaringan, Jakarta Utara'
            ],
            [
                'id' => 9,
                'name' => 'PT BORNEO',
                'address' => 'Sicincin, Kec. Enam Lingkung - Kab. Padang Pariaman'
            ],
            [
                'id' => 10,
                'name' => 'PT STANDARD PEN',
                'address' => 'Jl. Cideng Timur No.50, Petojo Sel - Kec. Gambir, kota Jakarta Pusat'
            ],
            [
                'id' => 11,
                'name' => 'PT SNOWMAN INDONESIA',
                'address' => 'Jl. Outer Ringroad Lkr. Luar No.1 Cengkareng Barat, Kec. Cengkareng - Kota Jakarta Barat'
            ],
            [
                'id' => 12,
                'name' => 'ANGKASA ASEMKA',
                'address' => 'Jl. Ps. Pagi Raya No. 84 Roa Malaka, Tambora - Kota Jakarta Barat'
            ],
            [
                'id' => 13,
                'name' => 'BINTANG JAYA',
                'address' => 'Ps. Pasar Pagi Asemka, Blok S Lantai 44-45, Jl. Pintu Kecil No. 2 Pinangsia, Kec. Taman Sari - Kota Jakarta barat'
            ],
            [
                'id' => 14,
                'name' => 'MENARA AGUNG',
                'address' => 'Ps. Pagi Lama Lantai 1 Blok A - LO - 1 - AKS, No. 60, Jl. Petak Baru Tambora, Roa Malaka - Kota Jakarta barat'
            ],
            [
                'id' => 15,
                'name' => 'SUMBER REZEKI',
                'address' => 'Jl. Mangga Dua No. 8 Mangga Dua Selatan, Kec. Sawah Besar - Kota Jakarta Pusat'
            ],
            [
                'id' => 16,
                'name' => 'SARANA SUKSES',
                'address' => 'Jl. Raya Serang Km.18 Talagasari, Kec. Cikupa - Kab. Tangerang, Banten'
            ],
            [
                'id' => 17,
                'name' => 'PRIMA STATIONERY',
                'address' => 'Blok Masjid No.2 Jalan Poncol Susukan, Kec. Ciracas - Kota Jakarta Timur'
            ],
            [
                'id' => 18,
                'name' => 'JAYA ABADI PASAR PAGI',
                'address' => 'Jl. Ps. Pagi Raya No. 37 Roa Malaka, Tambora - Kota Jakarta Barat'
            ],
        ]);
    }
}
