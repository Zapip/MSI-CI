<?php

namespace App\Controllers;
use App\Models\Product;

class Home extends BaseController
{
    public function index(): string
    {
        $productModel = new Product();
        $data['title'] = "Buku";
        $data['content'] = "Buku Sistem Informasi";
        $data['products'] = $productModel->findAll();
        return view('product-views', $data);
    }
    public function create(): string
    {
        $productModel = new Product();
        $data['title'] = "Buku";
        $data['content'] = "Buku Sistem Informasi";
        $data['product'] = $productModel->findAll();
        return view('product-add', $data);
    }
    public function store()
    {
        $productModel = new Product();
        $data = [
            'produk' => $this->request->getPost('produk'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah')
        ];
        $productModel->insert($data);
        return redirect()->to('product-views');
    }
    public function edit($id)
    {
        $productModel = new Product();
        $data['title'] = "Buku";
        $data['content'] = "Buku Sistem Informasi";
        $data['product'] = $productModel->find($id);
        return view('product-edit', $data);
    }
    public function update($id)
    {
        $productModel = new Product();
        $data = [
            'produk' => $this->request->getPost('produk'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah')
        ];
        $productModel->update($id, $data);
        return redirect()->to('product-views');
    }
    public function destroy($id)
    {
        $productModel = new Product();
        $productModel->delete($id);
        return redirect()->to('product-views');
    }




}
