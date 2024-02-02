<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Masjid Darul Ilmi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-background-img bg-cover bg-center bg-no-repeat bg-fixed font-mons overflow-x-hidden mx-auto">
        <div class="bg-slate-800 bg-opacity-50 py-7 mb-3 text-white text-center">
            <h1 class="text-5xl font-teko">Masjid Darul Ilmi</h1>
            <p class="text-lg">Jl. ABCDEF No. 10, Bogor</p>
        </div>
        {{-- MAIN --}}
        <div class="text-white mx-5 sm:mx-20">
            @livewire('prayer-times')
        </div>
        {{-- RUNNING TEXT --}}
        <div class="text-white mt-3">
            @livewire('running-text-component')
        </div>
        {{-- CUSTOM JS --}}
        <script>
            let currentIndex = 0;
            const cards = document.querySelectorAll('.card');
        
            function showCard(index) {
                cards.forEach((card, i) => {
                    if (i === index) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
        
            function nextCard() {
                currentIndex = (currentIndex + 1) % cards.length;
                showCard(currentIndex);
            }
        
            setInterval(nextCard, 1500);
            showCard(currentIndex);
        </script>
        
    </body>
</html>
