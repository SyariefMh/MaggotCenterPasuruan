<style>
    #footer {
        position: relative;
        z-index: 2;
        /* memastikan seluruh konten berada di atas background */
    }

    .background-image {
        position: absolute;
        top: 40%;
        left: 50%;
        width: 200vh;
        height: 150px;
        transform: translate(-50%, -50%);
        z-index: 1;
        /* memastikan background berada di belakang semua konten */
    }

    #footer .container {
        z-index: 2;
        margin-top: 150px;
        /* sesuaikan jika diperlukan */
    }

    #footer .col-md-4 {
        z-index: 3;
        color: white;
    }

    #footer .lokasi img {
        width: 49px;
        height: 49px;
        z-index: 4;
    }

    #footer .lokasi p {
        color: white;
        margin-left: 10px;
        z-index: 4;
    }

    #footer .whatsapp img {
        width: 49px;
        height: 49px;
        z-index: 4;
    }

    #footer .whatsapp p {
        color: white;
        margin-left: 10px;
        z-index: 4;
    }

    #footer .instagram img {
        width: 49px;
        height: 49px;
        z-index: 4;
    }

    #footer .instagram p {
        color: white;
        margin-left: 10px;
        z-index: 4;
    }
</style>

{{-- Section Footer Start --}}
<section id="footer" class="position-relative">
    <img src="img/Slice.png" alt="Background Image" class="background-image">
    <div class="container h-100">
        {{-- <div class="row">
            <div class="col-md-4 mb-4">
                <h5>Sejarah</h5>
                <p>
                    @php
                        $words = explode(' ', $data_foter[0]['Deskripsi']);
                        $shortenedDescription =
                            count($words) > 25 ? implode(' ', array_slice($words, 0, 25)) . '...' : $item->Deskripsi;
                    @endphp
                <p>{{ $shortenedDescription }}</p>
                
                </p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Visi</h5>
                <p>
                    @php
                        // Filter untuk mengambil hanya data dengan Nama 'visi'
                        $visiData = collect($data_foter)->firstWhere('Nama', 'visi');

                        // Jika data ditemukan, lanjutkan pemrosesan deskripsi
                        if ($visiData) {
                            $words = explode(' ', $visiData['Deskripsi']);
                            $shortenedDescriptionvisi =
                                count($words) > 25
                                    ? implode(' ', array_slice($words, 0, 25)) . '...'
                                    : $visiData['Deskripsi'];
                        } else {
                            $shortenedDescriptionvisi = 'Data visi tidak ditemukan.';
                        }
                    @endphp

                <p>{{ $shortenedDescriptionvisi }}</p>
                </p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Misi</h5>
                <p>
                    @php
                        // Filter untuk mengambil hanya data dengan Nama 'visi'
                        $misiData = collect($data_foter)->firstWhere('Nama', 'misi');

                        // Jika data ditemukan, lanjutkan pemrosesan deskripsi
                        if ($misiData) {
                            $words = explode(' ', $misiData['Deskripsi']);
                            $shortenedDescriptionvisi =
                                count($words) > 25
                                    ? implode(' ', array_slice($words, 0, 25)) . '...'
                                    : $misiData['Deskripsi'];
                        } else {
                            $shortenedDescriptionvisi = 'Data visi tidak ditemukan.';
                        }
                    @endphp

                <p>{{ $shortenedDescriptionvisi }}</p>

                </p>
            </div>
        </div> --}}
        <div class="container d-flex" style="margin-top: 0">
            <div class="col-12 d-flex justify-content-center">
                <div class="lokasi d-flex align-items-center me-3 mt-5">
                    <img src="img/ion_location.png" alt="Location Icon" style="width: 39px; height: 39px;">
                    <p class="mb-0" style="color: white; margin-left: 10px;">
                        {{ $data_foter->firstWhere('Nama', 'alamat')->Deskripsi ?? 'Alamat tidak ditemukan.' }}
                    </p>
                    
                </div>
                <div class="whatsapp d-flex align-items-center me-3 mt-5">
                    <img src="img/tdesign_call.png" alt="Location Icon" style="width: 39px; height: 39px;">
                    <p class="mb-0" style="color: white; margin-left: 10px;"><p class="mb-0" style="color: white; margin-left: 10px;">
                        {{ $data_foter->firstWhere('Nama', 'nomorwa')->Deskripsi ?? 'Alamat tidak ditemukan.' }}
                    </p>
                    </p>
                </div>
                <div class="instagram d-flex align-items-center mt-5">
                    <img src="img/mdi_instagram.png" alt="Location Icon" style="width: 39px; height: 39px;">
                    <p class="mb-0" style="color: white; margin-left: 10px;">
                        <p class="mb-0" style="color: white; margin-left: 10px;">
                            {{ $data_foter->firstWhere('Nama', 'instagram')->Deskripsi ?? 'Alamat tidak ditemukan.' }}
                        </p>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- Section Footer End --}}
