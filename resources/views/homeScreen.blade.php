<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Tambahkan di <head> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>Maggot Center Pasuruan</title>
</head>

<body>
    @include('Navbar')


    <div id="wa-bubble" class="wa-bubble" style="position: fixed; z-index: 1000;bottom: 20px; left: 50px">
        <a href="https://wa.me/081906153376" target="_blank">
            <img src="img/Bubble WA.png" alt="WhatsApp" style="">
        </a>
    </div>


    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6">
                    <h1>MAGGOT CENTER<br>PASURUAN</h1>
                    <p>Edukasi, Inovasi, Integrasi, Sirkulasi, Solusi</p>
                </div>
            </div>
        </div>
        <img src="img/Background.png" alt="" class="position-absolute top-0 start-0">
    </section>
    <!-- End Hero Section -->

    {{-- Section Produk --}}
    <section id="produk">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 text-center">
                    <h1 class="jdl-produk" style="margin-top: -35px">PRODUK</h1>
                </div>
                <div class="col-12" style="margin-top: 10px;">
                    {{-- carausel --}}
                    {{-- <div class="swiper mySwiper" style="height: 500px; margin-bottom: 0">
                            <div class="swiper-wrapper">
                                @foreach ($data as $item)
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <img src="{{ url('https://maggotapi.arriansoft.com/public/' . $item->Gambar) }}"
                                                style="max-height: 100%; max-width: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> --}}
                    <div class="swiper mySwiper" style="height: 500px; margin-bottom: 0">
                        <div class="swiper-wrapper">
                            @foreach ($data_produk as $item)
                                <div class="swiper-slide">
                                    <div class="box">
                                        <a href="{{ route('produk.show', $item->UID_Produk) }}">
                                            <img src="{{ url('https://maggotapi.arriansoft.com/' . $item->Gambar) }}"
                                                style="max-height: 100%; max-width: 100%; object-fit: cover;">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="swiper-pagination" style="margin-top: 5px"></div> --}}
                    </div>

                    <div class="container-fluid full-height d-flex justify-content-center align-items-center">
                        <div class="col-12 text-center">
                            <a href="/produk" class="text-decoration-none">
                                <button type="button" class="btn">Lihat Detail Produk</button>
                            </a>
                        </div>
                    </div>


                    {{-- end carausel --}}
                </div>
            </div>
        </div>
    </section>
    {{-- Section Produk End --}}

    {{-- Section Media Start --}}
    <section id="media">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 text-center">
                    <h1 class="jdl-media" style="margin-top: 35px">MEDIA & BERITA</h1>
                </div>
                @foreach ($data_media->sortByDesc('Tanggal')->take(3) as $item)
                    <a href="{{ route('media.detail', $item->UID_Berita) }}" class="text-decoration-none">
                        <div class="col-12">
                            <div class="container h-100 d-flex">
                                <div class="gmbr col-5">
                                    <img src="{{ url('https://maggotapi.arriansoft.com/' . $item->Gambar) }}"
                                        alt="" class="dtlGmbr">
                                </div>
                                <div class="dtlBerita">
                                    <h2 class="jdlBerita">{{ $item->Judul }}</h2>
                                    <p class="dtl" style="text-align: justify">
                                        {{ $item->Deskripsi }}
                                    </p>
                                    <p>{{ $item->Tanggal }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

                <div class="container-fluid full-height d-flex justify-content-center align-items-center">
                    <div class="col-12 text-center" style="margin-top: 30px">
                        <a href="/mediaAll" class="text-decoration-none">
                            <button type="button" class="btn">Lihat Berita & Media</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/Background2.png" alt="" class="position-absolute">
    </section>
    {{-- Section Media End --}}

    {{-- Section Galeri Start --}}
    <section id="galeri">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 text-center">
                    <h1 class="jdl-media" style="margin-top: 30px">GALERI</h1>
                </div>
                <div class="col-12">
                    @foreach ($data_galeri as $item)
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000"
                                    data-description="Deskripsi untuk slide 1">
                                    <img src={{ url('https://maggotapi.arriansoft.com/' . $item->Gambar) }}
                                        class="d-block w-100 carousel-img" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="row justify-content-center align-items-center text-center mt-4">
                            <div class="col-auto">
                                <h1 id="gallery-description-title">{{ $item->Judul }}</h1>
                                <p id="gallery-description">{{ $item->Deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Section Galeri End --}}

    {{-- Footer --}}
    @include('footer')

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Tambahkan sebelum tag </body> -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5, // Menampilkan 5 slide sekaligus
            spaceBetween: 20, // Jarak antar slide
            centeredSlides: true, // Gambar aktif di tengah
            loop: true, // Melakukan looping
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            on: {
                slideChangeTransitionEnd: function() {
                    updateActiveSlide();
                }
            }
        });

        function updateActiveSlide() {
            document.querySelectorAll('.swiper-slide').forEach(function(slide) {
                slide.classList.remove('active-slide');
            });
            swiper.slides[swiper.activeIndex].classList.add('active-slide');
        }

        document.addEventListener('DOMContentLoaded', function() {
            updateActiveSlide();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var carouselElement = document.querySelector('#carouselExampleInterval');
            var descriptionElement = document.querySelector('#gallery-description');

            var carousel = new bootstrap.Carousel(carouselElement);

            carouselElement.addEventListener('slide.bs.carousel', function(event) {
                var activeItem = event.relatedTarget;
                var description = activeItem.getAttribute('data-description');
                descriptionElement.textContent = description;
            });
        });
    </script>


</body>

</html>
