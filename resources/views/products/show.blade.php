<x-layout>
    <header class="container-fluid">

        <h1 class="mt-4">{{ $article->title }}</h1>
    </header>
    <main class="container-fluid">
        <div class="row mx-auto">

            <div class="col-12 col-md-5 border p-5 my-3">
                @if ($article->date)
                    <div class="row">
                        <div class="col-6">
                            <h5>Date:</h5>
                        </div>
                        <div class="col-6">
                            <p class="text-end">{{ $article->date }}</p>
                        </div>
                    </div>
                @endif
                <h5 class="mt-5">{{ $article->city }}, {{ $article->state }}</h5>
                <p>{{ $article->description }}</p>
            </div>
            <div class="col-12 col-md-5 offset-md-1 my-auto ">
                <img class="img-fluid" src="{{ Storage::url($article->img) }}" alt="{{ $article->city }}">
            </div>
            <hr class="mt-3">
        </div>

        <div class="row mx-auto mt-4">
            <div class="col-12 d-flex justify-content-end">
                <p>Not happy with your post?</p>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-info mx-3" href="{{ route('editArticle', compact('article')) }}">Modifica</a>
                <form method="POST" action="{{ route('deleteArticle', compact('article')) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-info ms-3">Elimina</button>
                </form>
            </div>
        </div>
    </main>
</x-layout>
