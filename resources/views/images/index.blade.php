<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Image Gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="images/create"> Upload New Image</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        @foreach ($images as $image)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset($image->path) }}" class="card-img-top" alt="{{ $image->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
