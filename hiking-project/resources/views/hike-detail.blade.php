<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $hike->name }}</title>
</head>
<body>

    @include('partials/header')

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">

                        @foreach ($imagePaths as $index => $imagePath)
                        <figure class="figure m-0 w-100" style="height: 180px; overflow: hidden;">
                            <img class="figure-img img-fluid" src="{{ $hike->image_path }}" alt="{{ $hike->name }}" style="object-fit: cover; height: 100%; width: 100%;">
                        </figure>
                        @endforeach

                        <div class="card-body">
                            <h5 class="card-title">{{ $hike->name }}</h5>
                            <p class="card-text">{{ $hike->description }}</p>
                            <h4>Distance</h4>
                            <p class="testtest">{{ $hike->distance }}</p>
                            <h4>Duration</h4>
                            <p>{{ $hike->duration }}</p>
                            <h4>Elevation gain</h4>
                            <p>{{ $hike->elevation_gain }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Tags :
                                @foreach ($hike->tags as $tag)
                                    -  {{ $tag->name }}
                                @endforeach
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@include('partials/footer')

</body>
</html>




