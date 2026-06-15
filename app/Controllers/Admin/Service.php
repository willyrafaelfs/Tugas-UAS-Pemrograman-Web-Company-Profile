<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class Service extends BaseController
{
    protected $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }

    public function index()
    {
        $data['services'] = $this->serviceModel->findAll();
        return view('admin/services/index', $data);
    }

    public function create()
    {
        return view('admin/services/create');
    }

    public function store()
    {
        $rules = [
            'title'       => 'required|max_length[255]',
            'description' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $this->serviceModel->save([
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/admin/services')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = $this->serviceModel->find($id);

        if (! $service) {
            return redirect()->to('/admin/services')->with('error', 'Service not found.');
        }

        return view('admin/services/edit', ['service' => $service]);
    }

    public function update($id)
    {
        if (! $this->serviceModel->find($id)) {
            return redirect()->to('/admin/services')->with('error', 'Service not found.');
        }

        $rules = [
            'title'       => 'required|max_length[255]',
            'description' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $this->serviceModel->update($id, [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/admin/services')->with('success', 'Service updated successfully.');
    }

    public function delete($id)
    {
        $this->serviceModel->delete($id);
        return redirect()->to('/admin/services')->with('success', 'Service deleted successfully.');
    }
}
