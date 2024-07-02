<header>
    <nav class="navbar-custom">
        <div class="container-fluid d-flex justify-content-between align-items-center h-100">

            {{-- Left-side --}}
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center ">

                    <a href="{{ env('APP_FRONTEND_URL') }}">
                        <i class="fa-solid fa-globe"></i>
                        <span class="d-none d-md-inline ms-1">Vai al sito pubblico</span>
                    </a>
                </div>
            </div>

            {{-- Right-side --}}
            <div class="d-flex justify-content-between align-items-center px-2">
                <div class="mx-3"><i class="fa-solid fa-user-shield"></i> {{ Auth::user()->name }} |
                    {{ Auth::user()->restaurant->business_name }}</div>

                <form action="{{ route('profile.edit') }}" class="me-2">
                    <button type="submit" class="btn btn-custom-primary d-flex-center">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                </form>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-custom-primary">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>

        </div>
    </nav>
</header>
