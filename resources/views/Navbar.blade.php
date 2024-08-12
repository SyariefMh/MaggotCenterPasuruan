{{-- Navbar --}}
<style>
    .navbar,
.navbar a {
    background-color: #003406;
    color: white;
    font-size: 18px;
    font-weight: bold;
    z-index: 4; /* Tingkatkan z-index */
}

.collapse {
    width: 1150px;
}

.container-fluid {
    margin-left: 15px;
}

.navbar-brand {
    display: flex;
    align-items: center;
}
</style>

<nav class="navbar navbar-expand-lg position-fixed">
    <div class="container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/Logo.png') }}" alt="" width="55" height="55" class="d-inline-block align-text-top me-2">
                Maggot Center Pasuruan
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex flex-row flex-wrap" style="width: 600px">
                <li class="nav-item me-3">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">Media & Galeri</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- End Navbar --}}