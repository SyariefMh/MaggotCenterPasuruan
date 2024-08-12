<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
</head>

<body>
    @include('navbar')

    <section id="detailProduk">
        <div class="container h-100">
            <div class="row h-100">
                <div class="container d-flex justify-content-center">
                    <div class="col-5 d-flex" style="margin-top: 120px;">
                        <img src={{ url('https://maggotapi.arriansoft.com/public/' . $data->Gambar) }}>
                    </div>
                    <div class="col-6 justify-content-start" style="margin-top: 150px;margin-left: 20px">
                        <h1 class="jdl-produk" style="font-weight: bold">{{ $data->Nama }}</h1>
                        <h2 class="harga" style="margin-top: 50px">Rp. {{ number_format($data->Harga, 0, ',', '.') }}</h2>
                        <p class="dtlProduk" style="margin-top: 50px">{{ $data->Deskripsi }}</p>
                        <div class="container-fluid d-flex">
                            <div class="col-6" style="margin-top: 130px">
                                <button type="button" class="btn" style="border-radius: 0">Pesan Melalui
                                    WhatsApp</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="back">
                <p>Kembali</p>
            </div>
        </div>
    </section>
</body>

</html>
