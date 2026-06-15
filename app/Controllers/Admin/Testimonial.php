<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TestimonialModel;

class Testimonial extends BaseController
{
    protected $testimonialModel;
    protected $uploadPath = FCPATH . 'uploads/testimonials/';

    public function __construct()
    {
        $this->testimonialModel = new TestimonialModel();
    }

    public function index()
    {
        $data['testimonials'] = $this->testimonialModel->findAll();
        return view('admin/testimonials/index', $data);
    }

    public function create()
    {
        return view('admin/testimonials/create');
    }

    public function store()
    {
        $rules = [
            'name'    => 'required|max_length[255]',
            'message' => 'required',
            'image'   => 'if_exist|is_image[image]|max_size[image,2048]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $imageFile = $this->request->getFile('image');
        $imageName = null;
        if ($imageFile && $imageFile->isValid() && ! $imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move($this->uploadPath, $imageName);
        }

        $this->testimonialModel->save([
            'name'     => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'message'  => $this->request->getPost('message'),
            'image'    => $imageName,
        ]);

        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial created successfully.');
    }

    public function edit($id)
    {
        $testimonial = $this->testimonialModel->find($id);

        if (! $testimonial) {
            return redirect()->to('/admin/testimonials')->with('error', 'Testimonial not found.');
        }

        return view('admin/testimonials/edit', ['testimonial' => $testimonial]);
    }

    public function update($id)
    {
        $testimonial = $this->testimonialModel->find($id);

        if (! $testimonial) {
            return redirect()->to('/admin/testimonials')->with('error', 'Testimonial not found.');
        }

        $rules = [
            'name'    => 'required|max_length[255]',
            'message' => 'required',
            'image'   => 'if_exist|is_image[image]|max_size[image,2048]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $imageFile = $this->request->getFile('image');
        $imageName = $testimonial['image'];

        if ($imageFile && $imageFile->isValid() && ! $imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move($this->uploadPath, $imageName);

            if ($testimonial['image'] && is_file($this->uploadPath . $testimonial['image'])) {
                unlink($this->uploadPath . $testimonial['image']);
            }
        }

        $this->testimonialModel->update($id, [
            'name'     => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'message'  => $this->request->getPost('message'),
            'image'    => $imageName,
        ]);

        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial updated successfully.');
    }

    public function delete($id)
    {
        $testimonial = $this->testimonialModel->find($id);

        if ($testimonial && $testimonial['image'] && is_file($this->uploadPath . $testimonial['image'])) {
            unlink($this->uploadPath . $testimonial['image']);
        }

        $this->testimonialModel->delete($id);
        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial deleted successfully.');
    }
}
