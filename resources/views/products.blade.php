<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                            <div class="card">
                                <img src="{{ asset('storage/'.$product->attachments) }}" alt="{{ $product->title }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p class="card-text">{{ $product->content }}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>

