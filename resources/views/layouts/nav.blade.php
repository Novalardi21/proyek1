<nav class="bg-hero py-3 fixed-top">
    <div class="container">

        <!-- PILL (HEADER BAR) -->
        <div class="nav-pill mx-auto px-3 py-2">
            <div class="d-flex align-items-center justify-content-between">

                <!-- Logo -->
                <a class="d-flex align-items-center gap-2 logo-link" href="{{ url('/') }}">
                    <img src="{{ asset('images/Logo_remove.png') }}" alt="Logo" class="logo-img">
                </a>

                <!-- Hamburger -->
                <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex flex-row align-items-center gap-3 mb-0">
                    <li class="nav-item"><a class="nav-link {{ $slug === 'home' ? 'active' : '' }}"
                            href="/">Kemitraan</a></li>
                    <li class="nav-item"><a class="nav-link {{ $slug === 'katalog' ? 'active' : '' }}"
                            href="/katalog">Katalog Produk</a></li>
                    <li class="nav-item"><a class="nav-link {{ $slug === 'artikel' ? 'active' : '' }}"
                            href="/artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link {{ $slug === 'kontak' ? 'active' : '' }}"
                            href="/kontak">Kontak Kami</a></li>
                </ul>

                <!-- Desktop Right -->
                <div class="d-none d-lg-flex align-items-center gap-3">
                    <a class="btn btn-pill-shop" href="/login">Daftarkan Apotek Anda</a>
                    <div class="lang-circle">
                        <img src="{{ asset('images/Group 2.png') }}" alt="ID" class="flag-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- 🔥 MOBILE MENU (DI LUAR PILL) -->
        <div class="collapse d-lg-none mt-3" id="mobileNav">
            <div class="mobile-nav-box">
                <ul class="navbar-nav text-center gap-2">
                    <li>
                        <a class="nav-link {{ $slug === 'home' ? 'active' : '' }}" href="/">Kemitraan</a>
                    </li>
                    <li>
                        <a class="nav-link {{ $slug === 'katalog' ? 'active' : '' }}" href="/katalog">Katalog Produk</a>
                    </li>
                    <li>
                        <a class="nav-link {{ $slug === 'artikel' ? 'active' : '' }}" href="/artikel">Artikel</a>
                    </li>
                    <li>
                        <a class="nav-link {{ $slug === 'kontak' ? 'active' : '' }}" href="/kontak">Kontak Kami</a>
                    </li>

                    <li class="mt-3">
                        <a class="btn btn-pill-shop w-100" href="/login">
                            Daftarkan Apotek Anda
                        </a>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</nav>
