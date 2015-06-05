<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function index()
    {
        $products = $this->productModel->paginate(10);

        return View('products.index', compact('products'));
    }

    public function create(Category $category)
    {
        $categories = $category->lists('name', 'id');

        return view('products.create', compact('categories'));
    }

    public function edit($id, Category $category)
    {
        $product = $this->productModel->find($id);

        $categories = $category->lists('name', 'id');

        return view('products.edit', compact('product', 'categories'));
    }

    public function store(Requests\ProductRequest $request)
    {
        $input = $request->all();

        $product = $this->productModel->fill($input);
        $product->save();

        return redirect(route('products'));
    }

    public function update(Requests\ProductRequest $request, $id)
    {
        $this->productModel->find($id)->update($request->all());

        return redirect(route('products'));
    }

    public function destroy($id)
    {
        $this->productModel->find($id)->delete();

        return redirect(route('products'));
    }

}
