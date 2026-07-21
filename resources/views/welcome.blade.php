<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Frontend Mentor | Product list with cart</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="max-w-360 mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-[1fr_400px] gap-8 bg-rose-50 py-16">
    <main>
        <h1 class="text-5xl font-bold">Desserts</h1>

        <ul class="mt-8 grid sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach($products as $product)
                <x-product :product="$product"/>
            @endforeach

        </ul>
    </main>
    
    <aside class="bg-white p-6 h-80">Shopping Cart</aside>
</body>
</html>
