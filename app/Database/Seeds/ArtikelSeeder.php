<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class ArtikelSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'judul_artikel'          =>  'Nutrisi Penting dari Makanan Ibu Menyusui agar Bayi Cerdas',
				'penulis' =>  'ALODOKTER',
				'deskripsi' => 'Makanan Ibu Menyusui agar Bayi Cerdas
				Hingga saat ini, belum diketahui adanya makanan khusus untuk ibu menyusui yang dapat membuat bayi cerdas. Sebenarnya, meski ibu menyusui tidak memperoleh nutrisi yang lengkap, ASI yang dikeluarkan masih bisa memenuhi kebutuhan gizi bayi. Kekurangan jenis nutrisi tertentu akan diambil dari tubuh ibu.
				Namun jika dibiarkan dalam jangka panjang, hal ini dapat memengaruhi kondisi kesehatan ibu. Itulah sebabnya penting untuk tidak mengonsumsi hanya satu jenis makanan tertentu atau melakukan diet berlebihan. Hal ini dapat mengurangi kualitas dan jumlah ASI.
				Makanan yang baik untuk ibu menyusui perlu mengandung berbagai nutrisi berikut:1. Karbohidrat kompleks 2. Protein 3. Lemak sehat 4. Zat besi 5. Kalsium'
			],
			[
				'judul_artikel'          =>  '5 Manfaat Vitamin C bagi Ibu Menyusui',
				'penulis' =>  'ALODOKTER',
				'deskripsi' => 'Apa saja manfaat vitamin C untuk ibu menyusui? Berikut ini adalah beberapa di antaranya:
				1. Memperkuat daya tahan tubuh 2. Meningkatkan penyerapan zat besi 3. Mendukung kesehatan serta kekuatan tulang dan gigi 4. Memperbaiki jaringan tubuh yang rusak 5. Menurunkan risiko terjadinya mastitis'
			]
		];
		$this->db->table('artikel')->insertBatch($data);
	}
}
