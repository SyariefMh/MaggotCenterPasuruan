<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media dan Berita</title>
</head>

<body>
    @include('navbar')

    <section id="berita">
        <div class="container h-100">
            <div class="row h-100">
                <div class="content">
                    <img src={{ url('https://maggotapi.arriansoft.com/' . $data->Gambar) }} alt="" srcset="">
                </div>
                <div class="jdl-content text-center">
                    <h1>{{ $data->Judul }}</h1>
                </div>
                <div class="container-isi">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <p style="text-align: justify">
                                {{ $data->Deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
