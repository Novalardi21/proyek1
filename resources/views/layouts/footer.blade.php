<footer class="custom-footer mt-5">
    <div class="footer-inner container text-center">

        <!-- Logo -->
        <div class="footer-logo mb-4">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="logo-img">
        </div>

        <!-- Tagline -->
        <p class="footer-tagline mb-4">
            Solusi pencarian apotek online yang cepat, aman, dan terpercaya.
        </p>

        <!-- Menu -->
        <div class="footer-menu mb-4">
            <a href="/" class="footer-link">Homepage</a>
            <a href="{{ url('/#about-us') }}" class="footer-link">About Us</a>
            <a href="/kontak" class="footer-link">Contact Us</a>
        </div>

        <!-- Contact Info -->
        <div class="footer-info mb-4">
            <span><i class="fa-solid fa-envelope me-2"></i> support@medifinder.id</span>
            <span class="mx-3">•</span><a href="{{ url('/#about-us') }}" class="footer-link">About Us</a>

            <span><i class="fa-solid fa-phone me-2"></i> +62 812-3456-7890</span>
        </div>

        <!-- Social Icons -->
        <div class="footer-social d-flex justify-content-center gap-4 mb-4">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>

        <!-- Copyright -->
        <div class="footer-copy">
            © {{ date('Y') }} <strong>MediFinder</strong>. All rights reserved.
        </div>

    </div>
</footer>
