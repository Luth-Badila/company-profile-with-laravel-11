<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome to Products Page</h3>
    {{-- @foreach ($articles as $article)
        <h2>{{ $article->title }}</h2>
    @endforeach --}}

    @foreach ($products as $product)
    <h2>{{ $product->attachments}}</h2>
@endforeach
</x-layout>

