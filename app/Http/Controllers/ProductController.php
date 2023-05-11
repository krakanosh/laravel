<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        Product::all();
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create() {
        return view('product.create');
    }

    public function store() {
        $data = request()->validate([
            'name'=>'string',
            'description'=>'string',
            'category_id'=>'string',
            'price'=>'string',
            'image'=>'string',
            'image'=>'string',
            'discount'=>'string',
            'discount_price'=>'string'
        ]);
        Product::create($data);
        return redirect()->route('product.index');
    }
    public function show(Product $product) {
        return view('product.show', compact('product'));
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('product.index');
    }

    public function edit(Product $product) {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product) {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            "category_id" => 'string',
            "price" => 'string',
            'image' => 'string',
            'discount' => 'string',
            'discount_price' => 'string'
        ]);
        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }

    // public function delete() {
    //     $product = Product::find(12);
    //     $product->delete();
    //     echo 'Товар удален';
    // }

    // public function restore() {
    //     $product = Product::withTrashed()->find(9);
    //     $product->restore();
    //     echo 'Товар восстановлен';
    // }
    
    // public function firstOrCreate() {
    //     $product = Product::firstOrCreate([
    //         'name'=>'Корпус JONSBO MOD5 [MOD5Black] серый'
    //     ],[
    //         'name'=>'Корпус JONSBO MOD5 [MOD5Black] серый',
    //         'description'=>'Корпус JONSBO MOD5 невероятно эффектен. Модель имеет уникальный дизайн, который вряд ли можно будет забыть, однажды увидев. Разработчики корпуса не забыли и про его функциональность: вы сможете собрать как мощный универсальный компьютер, так и высокопроизводительную игровую систему. По естественным причинам эффективность теплообмена находится на очень высоком уровне.',
    //         'category_id'=> 12,
    //         'price'=> 36299,
    //         'image'=>'https://c.dns-shop.ru/thumb/st4/fit/500/500/7f82be46b75ce3e9b30e99a02ac4f2af/2480976e057723f7f6e54b5b33abd4aba448225606f7df4218a30cf73b77bb51.jpg.webp',
    //         'discount'=> '0',
    //         'discount_price'=> 0
    //     ]);
    //     echo $product->title;
    //     echo 'Товар создан';
    // }
}
?>