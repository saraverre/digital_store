<x-layout>
    <x-navbar />
    <div class="container">
        <div class="row mx-auto">
            <div class="col-12 col-md-6 offset-md-3 mt-5">
                <h1>New Product</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label for="InputArticleNumber" class="form-label">Article Number</label>
                        <input type="text" class="form-control" id="InputArticleNumber" name="article_number"
                            value="{{ old('article_number') }}">
                    </div>
                    <div class="my-3">
                        <label for="InputTitle" class="form-label">Name</label>
                        <input type="text" class="form-control" id="InputName" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="InputDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="InputDescription">{{ old('description') }}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="InputPrice" class="form-label">Price in €</label>
                        <input class="form-control" type="number" name="price" id="InputPrice"
                            value="{{ old('price') }}">
                    </div>

                    <div class="mb-3">
                        <label for="InputImage" class="form-label">Upload a picture</label>
                        <input type="file" class="form-control" id="InputImage" name="image">
                    </div>
                    <button type="submit" class="btn btn-info bg-sec-cs text-white w-100 mb-4">Save</button>
                </form>

            </div>
        </div>
    </div>






</x-layout>
