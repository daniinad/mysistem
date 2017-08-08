<?php

use Illuminate\Database\Seeder;
use App\Bahan;
use App\Pelanggan;
use App\Transaksis;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bahan1 = Bahan::create(['nama'=>'Pipa Air','merk'=>'StrongPipe','ukuran'=>'200','harga'=>'30000']);
        $bahan2 = Bahan::create(['nama'=>'Semen','merk'=>'3Roda','ukuran'=>'3','harga'=>'40000']);
        $bahan3 = Bahan::create(['nama'=>'Cat','merk'=>'Nippon Paint','ukuran'=>'10','harga'=>'50000']);


        $pelanggan1 = Pelanggan::create(['nama'=>'Ujang','alamat'=>'Bojong','no_hp'=>'089123456','id_bahan'=>$bahan1->id]);
        $pelanggan2 = Pelanggan::create(['nama'=>'Sukma','alamat'=>'Curdog','no_hp'=>'089123455','id_bahan'=>$bahan2->id]);
        $pelanggan3 = Pelanggan::create(['nama'=>'Konelo','alamat'=>'Sukaluyu','no_hp'=>'089123457','id_bahan'=>$bahan3->id]);


        $transaksi1 = Transaksis::create(['id_bahan'=>$bahan1->id,'id_pelanggan'=>$pelanggan1->id]);
        $transaksi2 = Transaksis::create(['id_bahan'=>$bahan2->id,'id_pelanggan'=>$pelanggan2->id]);
        $transaksi3 = Transaksis::create(['id_bahan'=>$bahan3->id,'id_pelanggan'=>$pelanggan3->id]);
    }
}
