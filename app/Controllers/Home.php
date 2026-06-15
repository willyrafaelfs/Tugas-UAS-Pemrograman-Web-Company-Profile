<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\ProductModel;
use App\Models\PortfolioModel;
use App\Models\TestimonialModel;
use App\Models\ContactModel;

class Home extends BaseController
{
    public function index()
    {
        $serviceModel = new ServiceModel();
        $productModel = new ProductModel();
        $portfolioModel = new PortfolioModel();
        $testimonialModel = new TestimonialModel();

        $data = [
            'services' => $serviceModel->findAll(),
            'products' => $productModel->findAll(),
            'portfolio' => $portfolioModel->findAll(),
            'testimonials' => $testimonialModel->findAll()
        ];

        return view('frontend/home', $data);
    }

    public function about()
    {
        return view('frontend/about');
    }

    public function services()
    {
        $serviceModel = new ServiceModel();
        $data['services'] = $serviceModel->findAll();
        return view('frontend/services', $data);
    }

    public function portfolio()
    {
        $portfolioModel = new PortfolioModel();
        $data['portfolio'] = $portfolioModel->findAll();
        return view('frontend/portfolio', $data);
    }

    public function products()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('frontend/products', $data);
    }

    public function testimonials()
    {
        $testimonialModel = new TestimonialModel();
        $data['testimonials'] = $testimonialModel->findAll();
        return view('frontend/testimonials', $data);
    }

    public function sendContact()
    {
        $rules = [
            'name'    => 'required|max_length[255]',
            'email'   => 'required|valid_email',
            'subject' => 'permit_empty|max_length[255]',
            'message' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to(base_url('/#contact'))
                ->withInput()
                ->with('error', $this->validator->listErrors());
        }

        $contactModel = new ContactModel();
        $contactModel->insert([
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'subject'    => $this->request->getPost('subject'),
            'message'    => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Redirect balik ke halaman utama (home) dengan flash message
        return redirect()->to(base_url('/#contact'))->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
