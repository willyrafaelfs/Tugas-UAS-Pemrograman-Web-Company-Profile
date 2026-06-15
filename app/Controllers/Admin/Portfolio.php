<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;

class Portfolio extends BaseController
{
    protected $portfolioModel;
    protected $uploadPath = FCPATH . 'uploads/portfolio/';

    public function __construct()
    {
        $this->portfolioModel = new PortfolioModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Portfolio',
            'portfolio' => $this->portfolioModel->findAll()
        ];

        return view('admin/portfolio/index', $data);
    }

    public function create()
    {
        return view('admin/portfolio/create', ['title' => 'Add Portfolio']);
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'uploaded[image]|is_image[image]|max_size[image,2048]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $imageFile = $this->request->getFile('image');
        $imageName = null;

        if ($imageFile && $imageFile->isValid() && ! $imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move($this->uploadPath, $imageName);
        }

        $this->portfolioModel->save([
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image'       => $imageName
        ]);

        return redirect()->to('/admin/portfolio')->with('success', 'Portfolio created successfully.');
    }

    public function edit($id)
    {
        $portfolio = $this->portfolioModel->find($id);

        if (!$portfolio) {
            return redirect()->to('/admin/portfolio')->with('error', 'Data portfolio tidak ditemukan.');
        }

        $data = [
            'title'     => 'Edit Portfolio',
            'portfolio' => $portfolio
        ];

        return view('admin/portfolio/edit', $data);
    }

    public function update($id)
    {
        $portfolio = $this->portfolioModel->find($id);

        if (!$portfolio) {
            return redirect()->to('/admin/portfolio')->with('error', 'Data portfolio tidak ditemukan.');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'if_exist|is_image[image]|max_size[image,2048]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $imageFile = $this->request->getFile('image');
        $imageName = $portfolio['image'];

        if ($imageFile && $imageFile->isValid() && ! $imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move($this->uploadPath, $imageName);

            // Hapus gambar lama
            if ($portfolio['image'] && is_file($this->uploadPath . $portfolio['image'])) {
                unlink($this->uploadPath . $portfolio['image']);
            }
        }

        $this->portfolioModel->update($id, [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image'       => $imageName
        ]);

        return redirect()->to('/admin/portfolio')->with('success', 'Portfolio updated successfully.');
    }

    public function delete($id)
    {
        $portfolio = $this->portfolioModel->find($id);

        if (!$portfolio) {
            return redirect()->to('/admin/portfolio')->with('error', 'Data portfolio tidak ditemukan.');
        }

        // Hapus gambar dari folder
        if ($portfolio['image'] && is_file($this->uploadPath . $portfolio['image'])) {
            unlink($this->uploadPath . $portfolio['image']);
        }

        $this->portfolioModel->delete($id);
        return redirect()->to('/admin/portfolio')->with('success', 'Portfolio deleted successfully.');
    }
}
