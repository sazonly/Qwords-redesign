<nav class="navbar navbar-expand-lg navbar-navbar-dark" style="width: 100%;">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img data-no-lazy="1" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp" alt="qwords.webp" width="140px" height="55px">
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto text-center justify-center">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#hero-section">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/featured-section') }}">Browse</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#featured-card">Offering</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#why-area">Why?</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_layanan">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#testimoni">Testimoni</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#customer-partner">Partner</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#contact-ft">Contact</a>
                </li>

            </ul>

            <div class="d-none d-lg-block">
                <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
            </div>
        </div>
    </div>
</nav>

<script>
$(document).ready(function() {
    var navbar = $('.navbar');

    $(document).mousemove(function() {
        // Show the navbar when the mouse is moved
        navbar.addClass('visible');

        // Set a timeout to hide the navbar after a certain time (e.g., 3 seconds)
        setTimeout(function() {
            navbar.removeClass('visible');
        }, 3000);
    });
});
</script>
