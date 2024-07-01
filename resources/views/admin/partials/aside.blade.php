<aside>
    <div class="d-flex flex-column justify-content-between h-100">
        <nav>
            <ul>
                <li>

                    <a href="{{ route('admin.home') }}">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('admin.dishes.index') }}">
                        <i class="fa-solid fa-utensils"></i>
                        <span>Menu</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('admin.dishes.create') }}">
                        <i class="fa-solid fa-plus"></i>
                        <span>Aggiungi piatto</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('admin.orders.index') }}">
                        <i class="fa-solid fa-list-ul"></i>
                        <span>I tuoi ordini</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('admin.statistics.index') }}">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span>Statistiche</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="logo-box">
            <img src="{{ Vite::asset('resources/img/logo_1_def.png') }}">
        </div>

        <div class="chevron-box">
            <i class="fa-solid fa-circle-chevron-right"></i>
        </div>
    </div>

</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chevronBox = document.querySelector('.chevron-box');
        const aside = document.querySelector('aside');

        chevronBox.addEventListener('click', function() {
            aside.classList.toggle('expanded');
        });
    });
</script>
