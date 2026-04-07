<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']); // supaya form & url helpers otomatis
    }

    // =================== LIST ARTIKEL ===================
    public function index()
    {
        $model = new ArtikelModel();
        $artikel = $model->findAll();

        return view('artikel/index', [
            'title' => 'Daftar Artikel',
            'artikel' => $artikel
        ]);
    }

    // =================== DETAIL ARTIKEL ===================
    public function view($slug)
    {
        $model = new ArtikelModel();
        $artikel = $model->where(['slug' => $slug])->first();

        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('artikel/detail', [
            'title' => $artikel['judul'],
            'artikel' => $artikel
        ]);
    }

    // =================== ADMIN INDEX ===================
    public function admin_index()
    {
        $model = new ArtikelModel();
        $artikel = $model->findAll();

        return view('artikel/admin_index', [
            'title' => 'Daftar Artikel',
            'artikel' => $artikel,
            'success' => session()->getFlashdata('success')
        ]);
    }

    // =================== ADD DATA ===================
    public function add()
    {
        if ($this->request->getMethod() === 'post') {

            $validation = $this->validate([
                'judul' => 'required|min_length[3]',
                'isi'   => 'required|min_length[10]'
            ]);

            if (!$validation) {
                return view('artikel/form_add', [
                    'title' => 'Tambah Artikel',
                    'validation' => $this->validator
                ]);
            }

            $model = new ArtikelModel();
            $model->insert([
                'judul'  => $this->request->getPost('judul'),
                'isi'    => $this->request->getPost('isi'),
                'slug'   => url_title($this->request->getPost('judul'), '-', true),
                'status' => 1
            ]);

            session()->setFlashdata('success', 'Artikel berhasil ditambahkan.');
            return redirect()->to('/admin/artikel');
        }

        return view('artikel/form_add', [
            'title' => 'Tambah Artikel'
        ]);
    }

    // =================== EDIT DATA ===================
    public function edit($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);

        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }

        if ($this->request->getMethod() === 'post') {

            $validation = $this->validate([
                'judul' => 'required|min_length[3]',
                'isi'   => 'required|min_length[10]'
            ]);

            if (!$validation) {
                return view('artikel/form_edit', [
                    'title' => 'Edit Artikel',
                    'artikel' => $artikel,
                    'validation' => $this->validator
                ]);
            }

            $model->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi'   => $this->request->getPost('isi'),
                'slug'  => url_title($this->request->getPost('judul'), '-', true),
            ]);

            session()->setFlashdata('success', 'Artikel berhasil diperbarui.');
            return redirect()->to('/admin/artikel');
        }

        return view('artikel/form_edit', [
            'title' => 'Edit Artikel',
            'artikel' => $artikel
        ]);
    }

    // =================== DELETE DATA ===================
    public function delete($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);

        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }

        $model->delete($id);

        session()->setFlashdata('success', 'Artikel berhasil dihapus.');
        return redirect()->to('/admin/artikel');
    }
}