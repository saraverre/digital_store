<x-layout>
    <x-navbar />
    <div class="container-fluid my-5">
        <div class="row">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @foreach ($products as $product)
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto">
                                <img src="{{ Storage::url($product->image) }}" class="img-fluid"
                                    alt="{{ $product->name }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text text-end"><small class="text-muted">Article
                                            n° {{ $product->article_number }}</small>
                                    </p>
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <div data-id="{{ $product->id }}" class="btn bg-acc-cs text-white price-btn">Show
                                        price</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
