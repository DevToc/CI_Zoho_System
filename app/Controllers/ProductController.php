<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public $session;
    public $brand;
    public $category;
    public $product;
    public function __construct()
    {
        $this->session = session();
        $this->brand = new BrandModel();
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
    }
    public function index($id = '')
    {
        $data = [
            'page' => 'product/product',
            'title' => 'Product',
            'li_1' => 'Product',
            'li_2' => 'Product',
            'result' => $this->product->find($id),
            'brands' => $this->brand->findAll(),
            'categories' => $this->category->findAll()
        ];
        return view('partials/template', $data);
    }

    public function addProduct()
    {
        $validate = $this->validate([
            'name'  => 'required',
            'code'  => 'required',
            'barcode'  => 'required',
            'price'  => 'required|numeric',
            'cost'  => 'required|numeric',
        ]);
        if (!$validate) {
            $data['errors'] = $this->validator->getErrors();
            return redirect()->to('product');
        }
        if ($this->request->getVar('id')) {
            $input['id'] = $this->request->getVar('id');
            $mes = 'Updated';
        }



        $input['name'] = $this->request->getVar('name');
        $input['code'] = $this->request->getVar('code');
        $input['barcode'] = $this->request->getVar('barcode');
        $input['price'] = $this->request->getVar('price');
        $input['cost'] = $this->request->getVar('cost');
        $input['weight'] = $this->request->getVar('weight');
        $input['height'] = $this->request->getVar('height');
        $input['width'] = $this->request->getVar('width');
        $input['length'] = $this->request->getVar('length');
        $input['tax'] = $this->request->getVar('tax');
        $input['buy'] = $this->request->getVar('buy');
        $input['sale'] = $this->request->getVar('sale');
        $input['stock_control'] = $this->request->getVar('stock_control');
        $input['brand_id'] = $this->request->getVar('brand_id');
        $input['category_id'] = $this->request->getVar('category_id');
        $input['description'] = $this->request->getVar('description');

        if ($this->request->getFile('image') != '') {
            $img = $this->request->getFile('image');
            $img->move('assets/uploads');
            $input['image'] = $img->getName('image');
        }

        // print_r($input);
        // exit;
        $this->product->save($input);


        $info = [
            'status' => 'success',
            'message' => isset($mes) ? 'Successful ' . $mes : 'Successful Added'
        ];
        $this->session->setFlashData("info", $info);
        return redirect()->to('productList');
    }

    public function productList()
    {
        $data = [
            'page' => 'product/productList',
            'title' => 'Product',
            'li_1' => 'Product',
            'li_2' => 'Product List',
            'info' => $this->session->getFlashData("info"),
            'result' => $this->product->findAll()
        ];

        return view('partials/template', $data);
    }
    public function productAdd()
    {
        $data = [
            'page' => 'product/addproduct',
            'title' => 'Product',
            'li_1' => 'Product',
            'li_2' => 'Product add',
            'info' => $this->session->getFlashData("info"),
            'result' => $this->product->findAll()
        ];
        return view('partials/template', $data);
    }

    public function product_brand($id = '')
    {
        $data = [
            'page' => 'product/brand',
            'title' => 'Product',
            'li_1' => 'Product',
            'li_2' => 'Brand',
            'result' => $this->brand->find($id)
        ];
        return view('partials/template', $data);
    }

    public function addBrand()
    {
        $validate = $this->validate([
            'brand'  => 'required',
        ]);
        if (!$validate) {
            $data['errors'] = $this->validator->getErrors();
            return redirect()->to('product-brand');
        }
        if ($this->request->getVar('id')) {
            $input['id'] = $this->request->getVar('id');
            $mes = 'Updated';
        }
        $input['brand_name'] = $this->request->getVar('brand');
        // print_r($input);
        // exit;
        $this->brand->save($input);
        $info = [
            'status' => 'success',
            'message' => isset($mes) ? 'Successful ' . $mes : 'Successful Added'
        ];
        $this->session->setFlashData("info", $info);
        return redirect()->to('brandList');
    }

    public function brandList()
    {
        $data = [
            'page' => 'product/brandList',
            'title' => 'Product',
            'li_1' => 'Product',
            'li_2' => 'Brand',
            'info' => $this->session->getFlashData("info"),
            'result' => $this->brand->findAll()
        ];

        return view('partials/template', $data);
    }


    public function product_category($id = '')
    {
        $data = [
            'page' => 'product/category',
            'title' => 'Product',
            'li_1' => 'Product',
            'li_2' => 'Category',
            'result' => $this->category->find($id)
        ];
        return view('partials/template', $data);
    }
    public function addCategory()
    {
        $validate = $this->validate([
            'category'  => 'required',
        ]);
        if (!$validate) {
            $data['errors'] = $this->validator->getErrors();
            return redirect()->to('product-category');
        }
        if ($this->request->getVar('id')) {
            $input['id'] = $this->request->getVar('id');
            $mes = 'Updated';
        }
        $input['category_name'] = $this->request->getVar('category');
        // print_r($input);
        // exit;
        $this->category->save($input);
        $info = [
            'status' => 'success',
            'message' => isset($mes) ? 'Successful ' . $mes : 'Successful Added'
        ];
        $this->session->setFlashData("info", $info);
        return redirect()->to('categoryList');
    }
    public function categoryList()
    {
        $data = [
            'page' => 'product/categoryList',
            'title' => 'Product',
            'li_1' => 'Product',
            'li_2' => 'Category List',
            'info' => $this->session->getFlashData("info"),
            'result' => $this->category->findAll()
        ];

        return view('partials/template', $data);
    }
}
