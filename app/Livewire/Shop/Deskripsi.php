<?php

namespace App\Livewire\Shop;
use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Deskripsi extends Component
{
    use WithPagination;
    public $productId;
    public $product;

    public function mount($id)
    {
        $this->productId = $id;
        $this->product = Product::find($this->productId);
    }

    public function render()
    {
        return view('livewire.shop.deskripsi', [
            'products' => Product::latest()
        ]);
        
    }
    public function addToCart($productId){
        $product = Product::find($productId);
        Cart::add($product);
        $this->dispatch('addToCart');
    }
}
