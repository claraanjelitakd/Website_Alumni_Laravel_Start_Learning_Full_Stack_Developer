<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>.:Result Alumni:.</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 py-4 bg-info">
                <h2 class="text-white text-center">Hasil Pencarian Alumni</h2>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                @foreach ($data as $a)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            @if ($a->foto)
                                <img src="{{ asset('storage/' . $a->foto) }}" alt="{{ $a->namalengkap }}" class="card-img-top" height="200">
                            @else
                                <img src="https://media.istockphoto.com/id/1216251206/vector/no-image-available-icon.jpg?s=170667a&w=0&k=20&c=N-XIIeLlhUpm2ZO2uGls-pcVsZ2FTwTxZepwZe4DuE4=" alt="No Image" class="card-img-top" height="200">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $a->namalengkap }}</h5>
                                <p class="card-text">Job Title: {{ $a->job_title }}</p>
                                <p class="card-text">Company: {{ $a->company }}</p>
                                <p class="card-text">Linkedin: <a href="{{ $a->linkedin }}" target="_blank" class="text-decoration-none">
                                        <i class="bi bi-linkedin text-primary" style="font-size: 1.2rem;"></i>
                                        <span class="ml-1">Profil LinkedIn</span>
                                    </a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>
