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
    <body>
        <div class="flex gap-4 p-8">
            <div class="size-24 rounded-lg bg-red"></div>
            <div class="size-24 rounded-lg bg-green"></div>
            <div class="size-24 rounded-lg bg-rose-50"></div>
            <div class="size-24 rounded-lg bg-rose-100"></div>
            <div class="size-24 rounded-lg bg-rose-300"></div>
            <div class="size-24 rounded-lg bg-rose-400"></div>
            <div class="size-24 rounded-lg bg-rose-500"></div>
            <div class="size-24 rounded-lg bg-rose-900"></div>
        </div>
        <p class="text-4xl">Testing the new font!</p>
    </body>
</html>
