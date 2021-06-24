<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\artikel_model;

class artikel extends Controller
{
    public function index()
    {
        $model = new Artikel_model();
        $data['artikel']  = $model->getArtikel()->getResult();
        echo view('artikel_view', $data);
    }

    // public function save()
    // {
    //     $model = new artikel_model();
    //     $data = array(
    //         'artikel_id'        => $this->request->getPost('artikel_id'),
    //         'artikel_judul'       => $this->request->getPost('artikel_judul'),
    //         'artikel_penulis' => $this->request->getPost('artikel_penulis'),
    //         'artikel_deskripsi' => $this->request->getPost('artikel_deskripsi'),
    //     );
    //     $model->saveArtikel($data);
    //     return redirect()->to('/artikel');
    // }

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
    //     $id = $this->request->getPost('artikel_id');
    //     $model->deleteArtikel($id);
    //     return redirect()->to('/artikel');
    // }
}
