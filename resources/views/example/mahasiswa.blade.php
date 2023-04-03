<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Halaman Mahasiswa</title>
</head>
<body>
    @include('layout.nav')
    <div class="container text-center mt-3 pt-3 bg-white">
        <div class="row">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
                {{$nama}}
            </h1>
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
                <?php echo $nilai ?>
            </h1>

            @if (($nilai > 0) and ($nilai < 50))
            <div class="alert alert-danger d-inline-block">
                Sorry {{ $nama }}, Please try again your score is {{ $nilai }}
            </div>

            @elseif (($nilai >= 50) and ($nilai <= 100))
            <div class="alert alert-danger d-inline-block">
                Congrats {{ $nama }}, you pass the exam with {{ $nilai }}
            </div>

            @endif
        </div>

        <div class="row">
            @switch($nilai)
            @case(0)
                <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
            @break
            @case(75)
                <div class="alert alert-success d-inline-block">Lumayan</div>
            @break
            @case(100)
                    <div class="alert alert-success d-inline-block">Sempurna</div>
            @break
            @default
                    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
            @endswitch
        </div>


    </div>
</body>
</html>
