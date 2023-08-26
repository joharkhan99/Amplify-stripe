<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe;
use Stripe\Product;
use Stripe\Price;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function products()
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $products = Product::all();

        foreach ($products as $product) {
            if (!empty($product->default_price)) {
                $price = Price::retrieve($product->default_price, []);
                $product->formatted_price = '$' . ($price->unit_amount / 100);
            }
        }

        // only registered users can see the products they have purchased
        $purchased = [];
        if (Auth::check()) {
            $user_purchases = ProductModel::where('user_id', auth()->user()->id)->get();

            foreach ($user_purchases as $item) {

                $product = Product::retrieve($item->product_id);
                $price = Price::retrieve($item->price_id);

                // $item->image = $product->images[0];
                // $item->title = $product->name;
                // $item->price = '$' . ($price->unit_amount / 100);


                $purchased[] = [
                    'image' => $product->images[0],
                    'title' => $product->name,
                    'price' => '$' . ($price->unit_amount / 100)
                ];
            }
        }

        return view('pages.home', compact('products', 'purchased'));
    }

    public function createCheckoutSession($product_id, $price_id)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = Session::create([
            'payment_method_types' => ['card', 'alipay'],
            'line_items' => [[
                'price' => $price_id,
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('checkoutCompleted', ['product_id' => $product_id, 'price_id' => $price_id]),
            'cancel_url' => route('home'),
        ]);

        return redirect()->to($session->url);
    }

    public function checkoutCompleted($product_id, $price_id)
    {
        if (Auth::check()) {
            $product = ProductModel::create([
                'product_id' => $product_id,
                'price_id' => $price_id,
                'user_id' => auth()->user()->id
            ]);
        }

        return redirect()->to(route('home'));
    }
}