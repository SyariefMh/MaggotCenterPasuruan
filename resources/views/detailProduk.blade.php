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
                        <img src="img/produk1.jpg" alt="" srcset="">
                    </div>
                    <div class="col-6 justify-content-start" style="margin-top: 150px;margin-left: 20px">
                        <h1 class="jdl-produk" style="font-weight: bold">Maggot 1</h1>
                        <h2 class="harga" style="margin-top: 50px">Rp. 100.000</h2>
                        <p class="dtlProduk" style="margin-top: 50px">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Itaque laudantium, in ipsam minus est saepe expedita reiciendis. Fugit
                            neque iste voluptatibus aliquid a itaque dolores quam in numquam? Exercitationem similique
                            mollitia praesentium, consequuntur vel et ipsum optio modi adipisci reprehenderit.</p>
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
