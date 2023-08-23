<?php

namespace Database\Seeders;

use App\Models\Peramalan;
use App\Models\Procurement;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                "kode_barang" => "A001",
                "name" => "Amplop PPL 90PPS",
                "unit" => "box",
                "harga_satuan" => 26000,
                "qty" => 38
            ],
            [
                "kode_barang" => "A002",
                "name" => "Amplop PPL 104PPS",
                "unit" => "box",
                "harga_satuan" => 18000,
                "qty" => 249
            ],
            [
                "kode_barang" => "A003",
                "name" => "Amplop Garda 90PPS",
                "unit" => "box",
                "harga_satuan" => 25000,
                "qty" => 9
            ],
            [
                "kode_barang" => "A004",
                "name" => "Amplop Garda 104PPS",
                "unit" => "box",
                "harga_satuan" => 17000,
                "qty" => 72
            ],
            [
                "kode_barang" => "A005",
                "name" => "Amplop Garment 90PPS",
                "unit" => "box",
                "harga_satuan" => 23000,
                "qty" => 1
            ],
            [
                "kode_barang" => "A006",
                "name" => "Amplop Garment 104PPS",
                "unit" => "box",
                "harga_satuan" => 15000,
                "qty" => 51
            ],
            [
                "kode_barang" => "A007",
                "name" => "Amplop Cokelat Tali Borneo F4",
                "unit" => "box",
                "harga_satuan" => 68000,
                "qty" => 473
            ],
            [
                "kode_barang" => "A008",
                "name" => "Amplop Coklat Tali Borneo A4",
                "unit" => "box",
                "harga_satuan" => 55000,
                "qty" => 291
            ],
            [
                "kode_barang" => "A009",
                "name" => "Amplop Cokelat Tali Borneo B5",
                "unit" => "box",
                "harga_satuan" => 38000,
                "qty" => 1259
            ],
            [
                "kode_barang" => "A010",
                "name" => "Amplop Coklat Tali Envlope F4",
                "unit" => "box",
                "harga_satuan" => 83000,
                "qty" => 843
            ],
            [
                "kode_barang" => "A011",
                "name" => "Amplop Coklat Tali Envlope A4",
                "unit" => "box",
                "harga_satuan" => 65000,
                "qty" => 289
            ],
            [
                "kode_barang" => "A012",
                "name" => "Amplop Cokelat Tali Envlope B5",
                "unit" => "box",
                "harga_satuan" => 47000,
                "qty" => 197
            ],
            [
                "kode_barang" => "A013",
                "name" => "Amplop Cokelat Polos Borneo F4",
                "unit" => "box",
                "harga_satuan" => 55000,
                "qty" => 506
            ],
            [
                "kode_barang" => "A014",
                "name" => "Amplop Cokelat Polos Borneo A4",
                "unit" => "box",
                "harga_satuan" => 50000,
                "qty" => 103
            ],
            [
                "kode_barang" => "A015",
                "name" => "Amplop Cokelat Polos B5",
                "unit" => "box",
                "harga_satuan" => 35000,
                "qty" => 632
            ],
            [
                "kode_barang" => "A016",
                "name" => "Amplop Cokelat Polos Gaji",
                "unit" => "box",
                "harga_satuan" => 30000,
                "qty" => 789
            ],
            [
                "kode_barang" => "A017",
                "name" => "Binder Clips Joyko 105",
                "unit" => "box",
                "harga_satuan" => 4000,
                "qty" => 1034
            ],
            [
                "kode_barang" => "A018",
                "name" => "Binder Clips Joyko 107",
                "unit" => "box",
                "harga_satuan" => 4000,
                "qty" => 241
            ],
            [
                "kode_barang" => "A019",
                "name" => "Binder Clips Joyko 111",
                "unit" => "box",
                "harga_satuan" => 6000,
                "qty" => 502
            ],
            [
                "kode_barang" => "A020",
                "name" => "Binder Clips Joyko 155",
                "unit" => "box",
                "harga_satuan" => 7000,
                "qty" => 68
            ],
            [
                "kode_barang" => "A021",
                "name" => "Binder Clips Joyko 200",
                "unit" => "box",
                "harga_satuan" => 12000,
                "qty" => 156
            ],
            [
                "kode_barang" => "A024",
                "name" => "Binder Clips Kenko 107",
                "unit" => "box",
                "harga_satuan" => 4000,
                "qty" => 743
            ],
            [
                "kode_barang" => "A025",
                "name" => "Binder Clips Kenko 111",
                "unit" => "box",
                "harga_satuan" => 6000,
                "qty" => 1100
            ],
            [
                "kode_barang" => "A027",
                "name" => "Binder Clips Kenko 200",
                "unit" => "box",
                "harga_satuan" => 12000,
                "qty" => 843
            ],
            [
                "kode_barang" => "A117",
                "name" => "Correction Tape Joyko Merah",
                "unit" => "box",
                "harga_satuan" => 4000,
                "qty" => 597
            ],
        ]);
    }
}
