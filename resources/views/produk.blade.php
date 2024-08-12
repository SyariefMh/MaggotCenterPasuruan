<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>

<body>
    @include('navbar')

    <section id="produkPage">
        <div class="container h-100 justify-content-center">
            <div class="row h-100">
                <div class="judul-page" style="margin-top: 100px; text-align: center">
                    <h1>Produk</h1>
                    <p>Produk olahan yang dihasilkan Maggot Center Pasuruan</p>
                </div>
                <div class="col-12">
                    <div class="isi">
                        <div class="semua row d-flex flex-wrap">
                            @foreach ($data as $item)
                                <div class="col-md-2 mb-2 p-1">
                                    <a href="{{ route('detailProduk', ['id' => $item->UID_Produk]) }}" class="text-decoration-none text-dark">
                                        <div class="card">
                                            <img src="{{ url('https://maggotapi.arriansoft.com/public/' . $item->Gambar) }}"
                                                alt="{{ $item->Nama }}" width="100">
                                            <h5 style="margin-top: 20px">{{ $item->Nama }}</h5>
                
                                            @php
                                                $words = explode(' ', $item->Deskripsi);
                                                $shortenedDescription =
                                                    count($words) > 5
                                                        ? implode(' ', array_slice($words, 0, 5)) . '...'
                                                        : $item->Deskripsi;
                                            @endphp
                                            <p>{{ $shortenedDescription }}</p>
                
                                            <h5>Rp. {{ number_format($item->Harga, 0, ',', '.') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
      

            {{-- <div class="col-md-2 mb-3 p-1">
                    <a href="{{ route('detailProduk', ['id' => $item->UID_Produk]) }}" class="text-decoration-none text-dark">
                        <div class="card" style="margin: 10px;">
                            <img src="{{ url('https://maggotapi.arriansoft.com/public/' . $item->Gambar) }}"
                                alt="{{ $item->Nama }}" width="100">
                            <h5 style="margin-top: 20px">{{ $item->Nama }}</h5>
                            
                            @php
                                $words = explode(' ', $item->Deskripsi);
                                $shortenedDescription =
                                    count($words) > 5
                                        ? implode(' ', array_slice($words, 0, 5)) . '...'
                                        : $item->Deskripsi;
                            @endphp
                            <p>{{ $shortenedDescription }}</p>
                            
                            <h5>Rp. {{ number_format($item->Harga, 0, ',', '.') }}</h5>
                        </div>
                    </a>
                </div> --}}


        </div>
        </div>
    </section>
</body>

</html>
