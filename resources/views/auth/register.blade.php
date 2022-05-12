<x-layout>
    <div class="container-fluid vh-100">
        <h4 class="mt-3">
            <a href="{{ route('home') }}" class="text-decoration-none text-white bg-sec-cs p-2 rounded-pill">Digital
                Store</a>
        </h4>
        <div class="row mx-auto justify-content-center h-100">
            <div class="col-12 col-md-6 p-4 card shadow rounded-3 my-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <div class="d-flex">
                            <i class="fa-solid fa-user px-2 my-auto"></i>
                            <input type="text" class="form-control" name="name" placeholder="Username">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <i class="fa-solid fa-envelope px-2 my-auto"></i>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <i class="fa-solid fa-key px-2 my-auto"></i>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <i class="fa-solid fa-key px-2 my-auto"></i>
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Repeat password">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-info text-white w-100 bg-sec-cs">Sign up</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
