<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <x-gallery>
        @foreach ($products as $product)
        <div class="col mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src={{ $product->attachments}} class="card-img-top" alt="gambar">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </x-gallery>
</x-layout>

 {{-- <x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
     <div class="grid">
        <div class="">.g-col-3 .g-start-2</div>
        <div class="">.g-col-4 .g-start-6</div>
      </div>

      <div class="container px-4 text-center">
        <div class="row gx-5">
          <div class="col">
           <div class="p-3">Custom column padding</div>
          </div>
          <div class="col">
            <div class="p-3">Custom column padding</div>
          </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
          <div class="col">
            <div class="p-3">Row column</div>
          </div>
        </div>
      </div>
 </x-layout> --}}

