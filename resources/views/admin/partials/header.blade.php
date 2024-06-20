<header>
    <nav class="navbar-custom">
        <div class="container-fluid d-flex justify-content-between align-items-center h-100">

            {{-- Left-side --}}
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center ">
                    <i class="fa-solid fa-globe"></i>
                    <a class="ms-2" href="#" target="_blank">Vai al sito pubblico</a>
                </div>
            </div>

            {{-- Right-side --}}
            <div class="d-flex justify-content-between align-items-center px-2">
                <div class="mx-3"><i class="fa-solid fa-user-shield"></i> {{ Auth::user()->name }} |
                    {{ Auth::user()->restaurant->business_name }}</div>

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
