<?php

namespace App\Livewire\Shop;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = [
        ['search' => ['except' => '']]
    ];

    public function mount(){
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.shop.index', [
            'products' => $this->search === null ? 
                Product::latest()->paginate(9) : 
                Product::latest()->where('title', 'like', '%' . $this->search . '%')->paginate(9)
        ]);
    }

    public function addToCart($productId){
        $product = Product::find($productId);
        Cart::add($product);
        $this->dispatch('addToCart');
    }
}
