<x-layout>
    <x-navbar />
    <div class="container-fluid">
        <div class="row mx-auto mt-5">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <h1 class="text-center py-4">Check out our latest products</h1>
        </div>
        <div class="row mx-auto">
            @if (isset($products))
                @foreach ($products as $product)
                    <div class="col-12 col-sm-4">
                        <div class="card" style="width: 18rem; height: 20rem;">
                            <img src="{{ Storage::url($product->image) }}" class="card-img-top img-fluid"
                                style="height: 180px" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('products.list') }}" class="btn bg-acc-cs text-white w-100">See
                                    more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    @else
        <h5>There are no products yet,</h5>
        <h5>but make sure to check again later!</h5>
        @endif
    </div>


    </div>

</x-layout>
