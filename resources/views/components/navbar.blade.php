<nav class="navbar navbar-expand-lg navbar-light bg-sec-cs">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('home') }}">Digital Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link mx-3 text-white-50">Hello, {{ Auth::user()->name }}</a>
                    </li>
                    @if (Auth::user()->is_admin)
                        <a class="nav-link mx-3 text-white" href="{{ route('admin.new') }}">Add new product</a>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link mx-3 text-white" href="{{ route('products.list') }}">All products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                        <form method="POST" action="{{ route('logout') }}" id="form-logout">
                            @csrf
                        </form>
                    </li>

                @endauth


            </ul>
        </div>
    </div>
</nav>
