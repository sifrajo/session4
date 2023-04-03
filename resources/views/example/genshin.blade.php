<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genshin Character</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
</head>

<body>
    <!-- isi bagian judul halaman -->
    <!-- cara penulisan isi section yang pendek -->

    {{-- INCLUDE() Header and NAV Here! --}}
    @include('layout.header')
    <h3 class="text-center mb-5">Loop Rendering Example</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 col-md-4 text-center">
            {{-- FOR --}}
            {{-- <h1>FOR LOOP</h1> --}}
            @for ($i = 0; $i < count($characters); $i++)
                {{-- CARD BOILER PLATE --}}
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/' . $characters[$i]['image']) }}"
                        alt="{{ $characters[$i]['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $characters[$i]['name'] }}</h5>
                        <p class="card-text">{{ $characters[$i]['element'] }}</p>
                    </div>
                </div>
                {{-- END BOILET PLATE --}}

            @endfor
            </div>
            {{-- WHILE --}}
            <div class="col-4 col-md-4 text-center">

            </div>
            {{-- FOREACH --}}
            {{-- <h1>FOREACH LOOP</h1> --}}
            <div class="col-4 col-md-4 text-center">
                @foreach ($characters as $chara)
                    {{-- CARD BOILER PLATE --}}
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/' . $chara['image']) }}"
                            alt="{{ $chara['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chara['name'] }}</h5>
                            <p class="card-text">{{ $chara['element'] }}</p>
                        </div>
                    </div>
                    {{-- END BOILET PLATE --}}
                @endforeach
            </div>
            {{-- FOR-ELSE --}}
            <div class="col-4 col-md-4 text-center">
                @forelse ($characters as $chara)
                    {{-- CARD BOILER PLATE --}}
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/' . $chara['image']) }}"
                            alt="{{ $chara['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chara['name'] }}</h5>
                            <p class="card-text">{{ $chara['element'] }}</p>
                        </div>
                    </div>
                    {{-- END BOILET PLATE --}}

                @empty
                <div class="col-md-4">
                    <p>No character found.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    {{-- @include Footer Here --}}
    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
