<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}" class="img-fluid" alt="Corona Finger Akrilik Polosan">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->title }}</h1>
            <h4>Description</h4>
            <p>{{ $product->description }}</p>
            <h5>RP{{ number_format($product->price,2,",",".") }}</h5><br>
            <div class="d-flex justify-content-between">
                <a href="{{ route('shop.index') }}" type="button" class="btn btn-sm btn-outline-secondary text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                    </svg> 
                    Kembali
                </a>
                <button wire:click="addToCart({{ $product->id }})" type="button" class="btn btn-sm btn-outline-info text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708"/>
                    </svg>
                    Add to cart
                </button>
            </div>
        </div>
    </div>
</div>