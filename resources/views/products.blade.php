{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Products Page</title>
</head>
<body>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <h1>My products Page</h1>
            @foreach ($articles as $article)
                <h2>{{ $article->title }}</h2>
            @endforeach
        </div>
    </main>

</body>
</html> --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome to Products Page</h3>
    @foreach ($articles as $article)
        <h2>{{ $article->title }}</h2>
    @endforeach
</x-layout>

