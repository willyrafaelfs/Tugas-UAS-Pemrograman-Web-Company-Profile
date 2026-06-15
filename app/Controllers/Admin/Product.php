<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('admin/products/index', $data);
    }

    public function create()
    {
        return view('admin/products/create');
    }

    public function store()
    {
        $rules = [
            'name'        => 'required|max_length[255]',
            'description' => 'required',
            'price'       => 'required|numeric',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $this->productModel->save([
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
        ]);

        return redirect()->to('/admin/products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = $this->productModel->find($id);

        if (! $product) {
            return redirect()->to('/admin/products')->with('error', 'Product not found.');
        }

        return view('admin/products/edit', ['product' => $product]);
    }

    public function update($id)
    {
        if (! $this->productModel->find($id)) {
            return redirect()->to('/admin/products')->with('error', 'Product not found.');
        }

        $rules = [
            'name'        => 'required|max_length[255]',
            'description' => 'required',
            'price'       => 'required|numeric',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $this->productModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
        ]);

        return redirect()->to('/admin/products')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/admin/products')->with('success', 'Product deleted successfully.');
    }
}
