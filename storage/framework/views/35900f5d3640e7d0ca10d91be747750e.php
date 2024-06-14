<!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand">
            <img src="<?php echo e(asset('image/logo_imam-removebg-preview.png')); ?>" alt="Logo" width="85" height="55" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  mx-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#Team">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#berita">Berita</a>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#foto">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#Contact">Kontak</a>
                </li>
            </ul>
            <a href="">
                <button type="button" class="btn btn-outline-success">Login</button>
            </a>
        </div>
        
    </div>
</nav>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const navbar = document.querySelector(".fixed-top");
    window.onscroll = () => {
        if(window.scrollY > 50) {
            navbar.classList.add("scroll-nav-active");
            navbar.classList.add("text-nav-active");
            navbar.classList.remove("navbar-dark");
        } else {
            navbar.classList.remove("scroll-nav-active");
            navbar.classList.add("navbar-dark");
        }
    };

    AOS.init();
</script>
<?php /**PATH D:\Semester_4\Laravel\UKMIMAM\resources\views/home/navbar.blade.php ENDPATH**/ ?>