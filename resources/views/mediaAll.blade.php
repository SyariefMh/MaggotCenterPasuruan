<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Media dan Berita</title>
</head>

<body>
    @include('navbar')
    <section id="mediaAll">
        <div class="container h-100">
            <div class="row h-100">
                <div class="judul-page" style="margin-top: 100px; text-align: center">
                    <h1>MEDIA DAN BERITA</h1>
                </div>
                @foreach ($dataAllmedia as $item)
                    <div class="col-12" style="margin-bottom: 10px; margin-top: 15px">
                        <a href="{{ route('media.detail', ['uid' => $item->UID_Berita]) }}"
                            class="text-decoration-none text-dark">
                            <div class="container h-100 d-flex">
                                <div class="col-3">
                                    <img src={{ url('https://maggotapi.arriansoft.com/' . $item->Gambar) }}
                                        alt="" style="width: 90%; height: 270px; border-radius: 20px">
                                </div>
                                <div class="detail">
                                    <h2 style="margin-top: 10px">{{ $item->Judul }}</h2>
                                    <p style="margin-top: 40px">{{ $item->Deskripsi }}</p>
                                    <p style="margin-top: 50px">{{ $item->Tanggal }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
