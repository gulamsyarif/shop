<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group">
                <input wire:model.live="search" type="text" class="form-control" placeholder="Search Product">
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 mb-4">
            <div class="card h-80" >
                <div style="position: relative; width: 415px; height: 200px;">
                    <img class="card-img-top img-fluid" src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                {{-- <img class="card-img-top img-fluid" src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}" alt=""> --}}
                <div class="card-body d-flex justify-content-between align-items-center" style="background-color: #0B357A;">
                    <div class="text-left mb-2">
                        <h5 class="text-white">
                            <strong>{{ $product->title }}</strong>
                        </h5>
                        <h6 class="text-white font-weight-normal">Rp{{ number_format($product->price,2,",",".") }}</h6>
                    </div>
                    {{-- <p class="text-white">
                        {{ $product->description }}
                    </p> --}}
                    <button wire:click="addToCart({{ $product->id }})" type="button" class="btn btn-sm btn-block btn-outline-secondary text-white">Add to cart</button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    {{ $products->links('vendor.pagination.bootstrap-5') }}
</div>