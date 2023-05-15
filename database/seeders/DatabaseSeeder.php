<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use App\Models\Gambar;
use App\Models\Kategori;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'kode_pegawai' => '01',
            'nama' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'email' => 'admin@gmail.com',
            'alamat' => 'Null',
            'jenis_kelamin' => 'L',
            'no_hp' => '08xxx',
            'level' => 'Administrator',
        ]);

        Kategori::create([
            'kode_kategori' => '0001',
            'nama' => 'Plywood',
        ]);
        Kategori::create([
            'kode_kategori' => '0002',
            'nama' => 'Chair',
        ]);
        Kategori::create([
            'kode_kategori' => '0003',
            'nama' => 'Table',
        ]);
        Kategori::create([
            'kode_kategori' => '0004',
            'nama' => 'Garden Tile',
        ]);
        Kategori::create([
            'kode_kategori' => '0005',
            'nama' => 'Wall Panel',
        ]);
        Kategori::create([
            'kode_kategori' => '0006',
            'nama' => 'Flooring',
        ]);
        Kategori::create([
            'kode_kategori' => '0007',
            'nama' => 'MDF',
        ]);
        Barang::create([
            'kode_barang' => '01',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 2.7,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '02',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 2.4,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '03',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 3.6,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '04',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 5.5,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '05',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 7,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '06',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 9,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '07',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 9,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '08',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '09',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '10',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '11',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '12',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '13',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '14',
            'nama' => 'Block Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '15',
            'nama' => 'Block Board',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '16',
            'nama' => 'Block Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '17',
            'nama' => 'Block Board',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '18',
            'nama' => 'Block Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '19',
            'nama' => 'Block Board',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '20',
            'nama' => 'Particle Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '21',
            'nama' => 'Particle Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '22',
            'nama' => 'Particle Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '23',
            'nama' => 'HMR',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 1,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '24',
            'nama' => 'Chair',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 2,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '25',
            'nama' => 'Chair',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 2,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '26',
            'nama' => 'Table',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 3,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '27',
            'nama' => 'Garden Tile',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 4,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '28',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '29',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '30',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '31',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '32',
            'nama' => 'Flooring',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 6,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '33',
            'nama' => 'Flooring',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 6,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '34',
            'nama' => 'Flooring',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 6,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Barang::create([
            'kode_barang' => '35',
            'nama' => 'MDF',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 7,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
            'stok' => 0,
        ]);
        Gambar::create([
            'kode_gambar' => '01',
            'nama' => 'Plywood1',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => '02',
            'nama' => 'Plywood2',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => '03',
            'nama' => 'Plywood3',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => '04',
            'nama' => 'Plywood4',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => '05',
            'nama' => 'Plywood5',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => '06',
            'nama' => 'Plywood6',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => '07',
            'nama' => 'Plywood7',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => '08',
            'nama' => 'Chair1',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => '09',
            'nama' => 'Chair2',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => '10',
            'nama' => 'Chair3',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => '11',
            'nama' => 'Chair4',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => '12',
            'nama' => 'Chair5',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => '13',
            'nama' => 'Chair6',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => '14',
            'nama' => 'Table1',
            'kategori_id' => 3,
        ]);
        Gambar::create([
            'kode_gambar' => '15',
            'nama' => 'Table2',
            'kategori_id' => 3,
        ]);
        Gambar::create([
            'kode_gambar' => '16',
            'nama' => 'Gardentile1',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => '17',
            'nama' => 'Gardentile2',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => '18',
            'nama' => 'Gardentile3',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => '19',
            'nama' => 'Gardentile4',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => '20',
            'nama' => 'Wallpanel1',
            'kategori_id' => 5,
        ]);
        Gambar::create([
            'kode_gambar' => '21',
            'nama' => 'Wallpanel2',
            'kategori_id' => 5,
        ]);
        Gambar::create([
            'kode_gambar' => '22',
            'nama' => 'Wallpanel3',
            'kategori_id' => 5,
        ]);
        Gambar::create([
            'kode_gambar' => '23',
            'nama' => 'Flooring1',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => '24',
            'nama' => 'Flooring2',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => '25',
            'nama' => 'Flooring3',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => '26',
            'nama' => 'Flooring4',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => '27',
            'nama' => 'Mdf1',
            'kategori_id' => 7,
        ]);

    }
}
