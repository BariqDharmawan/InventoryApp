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
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 38
            ],
            [
                "kode_barang" => "A002",
                "name" => "Amplop PPL 104PPS",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 249
            ],
            [
                "kode_barang" => "A003",
                "name" => "Amplop Garda 90PPS",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 9
            ],
            [
                "kode_barang" => "A004",
                "name" => "Amplop Garda 104PPS",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 72
            ],
            [
                "kode_barang" => "A005",
                "name" => "Amplop Garment 90PPS",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 1
            ],
            [
                "kode_barang" => "A006",
                "name" => "Amplop Garment 104PPS",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 51
            ],
            [
                "kode_barang" => "A007",
                "name" => "Binder A4 2 Ring",
                "unit" => "PCS",
                "harga_satuan" => 5000,
                "qty" => 473
            ],
            [
                "kode_barang" => "A008",
                "name" => "Binder A4 3 Ring",
                "unit" => "PCS",
                "harga_satuan" => 7000,
                "qty" => 291
            ],
            [
                "kode_barang" => "A009",
                "name" => "Book Cover Hardcover",
                "unit" => "PCS",
                "harga_satuan" => 12000,
                "qty" => 1259
            ],
            [
                "kode_barang" => "A010",
                "name" => "Book Cover Softcover",
                "unit" => "PCS",
                "harga_satuan" => 9000,
                "qty" => 843
            ],
            [
                "kode_barang" => "A011",
                "name" => "Box File Besar",
                "unit" => "PCS",
                "harga_satuan" => 15000,
                "qty" => 289
            ],
            [
                "kode_barang" => "A012",
                "name" => "Box File Kecil",
                "unit" => "PCS",
                "harga_satuan" => 10000,
                "qty" => 197
            ],
            [
                "kode_barang" => "A013",
                "name" => "Brown Cover A4",
                "unit" => "PCS",
                "harga_satuan" => 4000,
                "qty" => 506
            ],
            [
                "kode_barang" => "A014",
                "name" => "Certificate Holder",
                "unit" => "PCS",
                "harga_satuan" => 8500,
                "qty" => 103
            ],
            [
                "kode_barang" => "A015",
                "name" => "Clear Holder A4",
                "unit" => "PCS",
                "harga_satuan" => 2000,
                "qty" => 632
            ],
            [
                "kode_barang" => "A016",
                "name" => "Clips Besar",
                "unit" => "PCS",
                "harga_satuan" => 800,
                "qty" => 789
            ],
            [
                "kode_barang" => "A017",
                "name" => "Clips Kecil",
                "unit" => "PCS",
                "harga_satuan" => 600,
                "qty" => 1034
            ],
            [
                "kode_barang" => "A018",
                "name" => "Correction Tape",
                "unit" => "PCS",
                "harga_satuan" => 3000,
                "qty" => 241
            ],
            [
                "kode_barang" => "A019",
                "name" => "Erasable Pen",
                "unit" => "PCS",
                "harga_satuan" => 3500,
                "qty" => 502
            ],
            [
                "kode_barang" => "A020",
                "name" => "Expanding File Besar",
                "unit" => "PCS",
                "harga_satuan" => 11000,
                "qty" => 68
            ],
            [
                "kode_barang" => "A021",
                "name" => "Expanding File Kecil",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 156
            ],
            [
                "kode_barang" => "A022",
                "name" => "Fastener",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 480
            ],
            [
                "kode_barang" => "A023",
                "name" => "File Separator",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 348
            ],
            [
                "kode_barang" => "A024",
                "name" => "Fold Back Clip 1\"",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 280
            ],
            [
                "kode_barang" => "A025",
                "name" => "Fold Back Clip 2\"",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 144
            ],
            [
                "kode_barang" => "A026",
                "name" => "Glue Stick",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 132
            ],
            [
                "kode_barang" => "A027",
                "name" => "Gunting Besar",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 72
            ],
            [
                "kode_barang" => "A028",
                "name" => "Gunting Kecil",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 120
            ],
            [
                "kode_barang" => "A029",
                "name" => "ID Card",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 500
            ],
            [
                "kode_barang" => "A030",
                "name" => "Index Kartu",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 240
            ],
            [
                "kode_barang" => "A031",
                "name" => "Kalkulator 10 Digit",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 72
            ],
            [
                "kode_barang" => "A032",
                "name" => "Kalkulator 12 Digit",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 67
            ],
            [
                "kode_barang" => "A033",
                "name" => "Kalkulator 14 Digit",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 48
            ],
            [
                "kode_barang" => "A034",
                "name" => "Kalkulator Mini",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 192
            ],
            [
                "kode_barang" => "A035",
                "name" => "Kertas Buffalo A4 70 gram",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 1440
            ],
            [
                "kode_barang" => "A036",
                "name" => "Kertas Fax",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 1218
            ],
            [
                "kode_barang" => "A037",
                "name" => "Kertas HVS A4 70 gram",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 1632
            ],
            [
                "kode_barang" => "A038",
                "name" => "Kertas HVS A4 Merak 70 gram",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 1422
            ],
            [
                "kode_barang" => "A039",
                "name" => "Kertas NCR 2 Lembar",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 951
            ],
            [
                "kode_barang" => "A040",
                "name" => "Kertas Photo A4",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 743
            ],
            [
                "kode_barang" => "A041",
                "name" => "Kertas Print A4 70 gram",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 1100
            ],
            [
                "kode_barang" => "A042",
                "name" => "Kertas Print F4 70 gram",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 843
            ],
            [
                "kode_barang" => "A043",
                "name" => "Kertas Tinta A4",
                "unit" => "PCS",
                "harga_satuan" => 0,
                "qty" => 597
            ],
        ]);
    }
}
