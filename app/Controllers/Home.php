<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\artikel_model;

class Home extends Controller
{
	protected $artikel_model;
	public function __construct()
	{
		$this->artikelmodel = new artikel_model();
	}

	public function index()
	{
		// $model = new Artikel_model();
		// $data['artikel']  = $model->getArtikel()->getResult();
		// echo view('artikel_view', $data);
		$artikel = $this->artikelmodel->findAll();

		$data = [
			'title' => 'Home | Lora Kirana',
			'artikel' => $artikel
		];
		return view('artikel_view', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Artikel | Lora Kirana'
		];
		return view('create', $data);
	}

	public function save()
	{
		// validasi input
		if (!$this->validate([
			'judul_artikel' => 'required',
			'penulis' => 'required',
			'Deskripsi' => 'required',
		])) {
			return redirect()->to('/home/create');
		}

		$this->artikelmodel->save([
			'judul_artikel' => $this->request->getVar('judul_artikel'),
			'penulis'		  => $this->request->getVar('penulis'),
			'Deskripsi' => $this->request->getVar('Deskripsi'),
		]);

		session()->setFlashdata('pesan', 'Data Artikel Berhasil Ditambahkan .');

		return redirect()->to('/home');
	}

	public function delete($id_artikel)
	{
		$this->artikelmodel->delete($id_artikel);
		return redirect()->to('/home');
	}

	// public function update()
	// { 
	//     $model = new artikel_model();
	//     $id = $this->request->getPost('artikel_id');
	//     $data = array(
	//         'artikel_id'        => $this->request->getPost('artikel_id'),
	//         'artikel_judul'       => $this->request->getPost('artikel_judul'),
	//         'artikel_penulis' => $this->request->getPost('artikel_penulis'),
	//         'artikel_deskripsi' => $this->request->getPost('artikel_deskripsi'),
	//     );
	//     $model->updateArtikel($data, $id);
	//     return redirect()->to('/artikel');
	// }

	// public function delete()
	// {
	//     $model = new artikel_model();
	//     $id = $this->request->getPost('id_artikel');
	//     $model->deleteArtikel($id);
	//     return redirect()->to('/artikel');
	// }
}
