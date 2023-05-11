<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DiscountController extends Controller
{
    public function index() {
        Product::all();
        $products = Product::where('discount', 1)->get();
        foreach ($products as $product) {
            ?>
            <div class="product-item">
                <div class="title-wrap">
                    <div>
                    <?php
                    echo '<h2>' . $product->name . '</h2>';
                    echo '<p>' . $product->description . '</p>';
                    ?>
                    </div>
                    <?php
                    echo '<img src="' . $product->image . '" alt="">';
                    ?>
                </div>
                <?php
                echo '<span>Категория: ' . $product->category_id . '</span>';
                echo '<span>Цена: ' .$product->price . '</span>';
                if ($product->discount === 1) {
                    echo '<span>Цена по акции: ' . $product->discount_price . '</span>';
                }
                ?>
            </div>
            <?php
        }
    }
}
?>

<style>
    .product-item {
        width: 100%;
        max-width: 1440px;
        position: relative;
        padding: 10px;
        margin: 0 auto;
    }
    .product-item .title-wrap {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        align-items: center;
    }
    .title-wrap div {
        width: calc(100% - 350px);
    }
    .title-wrap img {
        width: 300px;
        height: 200px;
        overflow: hidden;
        object-fit: contain;
    }
</style>