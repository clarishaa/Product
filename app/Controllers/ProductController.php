<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\ModelCategories;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $product;
    private $categ;

    public function __construct()
    {
        $this->product = new ProductModel();
        $this->categ = new ModelCategories();

    }

    public function index()
    {
        $data['table_category'] = $this->categ->findAll();
        return view('main', $data);
    }

    public function save()
{
    $id = $this->request->getVar('id');
    $productName = $this->request->getVar('ProductName');
    $productDescription = $this->request->getVar('ProductDescription');
    $productQuantity = $this->request->getVar('ProductQuantity');
    $productPrice = $this->request->getVar('ProductPrice');
    $productCategory = $this->request->getVar('ProductCategoryID');

    $data = [
        'ProductName' => $productName,
        'ProductDescription' => $productDescription,
        'ProductQuantity' => $productQuantity,
        'ProductPrice' => $productPrice,
        'ProductCategoryID' => $productCategory,
    ];

    if ($id != null) {
        $this->product->set($data)->where('id', $id)->update();
    } else {
        $this->product->insert($data);
    }

    return redirect()->to('/product');
    //var_dump($data);
}


    public function addcat()
    {
        return view('addcat');
    }

    public function addprod()
    {
$data = ['table_category' => $this->categ->findAll(),];
        return view('prod',$data);
    }

    public function saveCat()
    {
        $data = [
            'ProductCategory' => $this->request->getPost('ProductCategory'),
        ];
        $this->categ->save($data);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $product = $this->product->find($id);
        $category = $this->categ->find($product['ProductCategoryID']);

        $data = [
            'table_products' => $this->product->findAll(),
            'prd' => $product,
            'table_category' => $this->categ->findAll(),
            'cat' => $category,
        ];
        return view('edit', $data);
    }


    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }
    public function categories($id)
    {
        $category = $this->categ->find($id);
        $Products = $this->product->where('ProductCategoryID', $id)->findAll();
        $data = [
            'table_category' => $category,
            'table_products' => $Products,
        ];
        return view('categ', $data);
    }


}