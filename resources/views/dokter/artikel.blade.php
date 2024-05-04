<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Konsultasi</title>
</head>

<body class="bg-primary">
    <header class="absolute inset-x-0 top-0 z-50">
        @include ('dokter.navbar')
    </header>
    <section class="h-full">
        <div class="bg-primary pt-20 mt-6 h-full pb-1">
            <div class="px-6 py-10 mx-auto h-full flex justify-center">
                <div class="container bg-secondary rounded-lg shadow-lg min-h-[80vh] p-12">
                    <div class="py-4 font-semibold text-3xl">Artikel</div>
                    <div class="grid grid-cols-3 gap-6">
                        {{-- Hero card --}}
                        <div class="relative flex flex-col gap-2 bg-gray-200 rounded-lg p-4 overflow-hidden max-h shadow-xl col-span-3 row-span-2 hero-card">
                            @if($latestArticle->gambar)
                                <img class="h-36 object-cover rounded-lg" src="/artikel/{{$latestArticle->gambar}}" alt="">
                            @endif
                            <div class="font-semibold text-lg h-8 overflow-hidden">{{$latestArticle->judul_artikel}}</div>
                            <div class="text-sm h-52 overflow-hidden">{!! $latestArticle->isi_artikel !!}</div>
                            <a class="absolute bottom-0 right-0 m-2 py-1 px-6 bg-white rounded-full shadow-md font-semibold" href="{{ route('dokter.lihatartikel', ['id' => $latestArticle->id]) }}">Lihat</a>
                        </div>
            
                        {{-- Artikel biasa --}}
                        @foreach($artikel as $artikel)
                            <div class="relative flex flex-col gap-2 bg-gray-200 rounded-lg p-4 overflow-hidden max-h shadow-xl col-span-1 row-span-1 regular-card">
                                @if($artikel->gambar)
                                    <img class="h-36 object-cover rounded-lg" src="/artikel/{{$artikel->gambar}}" alt="">                                <div class="font-semibold text-lg h-8 overflow-hidden">{{$artikel->judul_artikel}}</div>
                                    <div class="text-sm h-20 overflow-hidden">{!! $artikel->isi_artikel !!}</div>
                                    <a class="absolute bottom-0 right-0 m-2 py-1 px-6 bg-white rounded-full shadow-md font-semibold" href="{{ route('dokter.lihatartikel', ['id' => $artikel->id]) }}">Lihat</a>
                                @else
                                <div class="font-semibold text-lg h-16 overflow-hidden">{{$artikel->judul_artikel}}</div>
                                <div class="text-sm h-48 overflow-hidden">{!! $artikel->isi_artikel !!}</div>
                                <a class="absolute bottom-0 right-0 m-2 py-1 px-6 bg-white rounded-full shadow-md font-semibold" href="{{ route('dokter.lihatartikel', ['id' => $artikel->id]) }}">Lihat</a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // your script here
    </script>
</body>

</html>
