<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_artikel'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul_artikel'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'penulis' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'Deskripsi' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			]
		]);
		$this->forge->addPrimaryKey('id_artikel');
		$this->forge->createTable('artikel');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('artikel');
	}
}
