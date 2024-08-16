<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Sejarah, Visi dan Misi</title>
</head>

<body>
    @include('navbar')

    <section id="sejarah">
        <div class="container h-100">
            <!-- resources/views/sejarah.blade.php -->
<div class="row h-100">
    <div class="col-12 text-center">
        <h1 class="jdl-sejarah" style="font-weight: bolder">{{ $sejarah->Nama ?? 'Sejarah' }}</h1>
        <p>{{ $sejarah->Deskripsi ?? 'Deskripsi Sejarah tidak ditemukan.' }}</p>
        
        <h1 class="jdl-visi" style="font-weight: bolder">{{ $visi->Nama ?? 'Visi' }}</h1>
        <p>{{ $visi->Deskripsi ?? 'Deskripsi Visi tidak ditemukan.' }}</p>

        <h1 class="jdl-misi" style="font-weight: bolder">{{ $misi->Nama ?? 'Misi' }}</h1>
        <p>{{ $misi->Deskripsi ?? 'Deskripsi Misi tidak ditemukan.' }}</p>
    </div>
</div>

        </div>
    </section>
</body>

</html>
