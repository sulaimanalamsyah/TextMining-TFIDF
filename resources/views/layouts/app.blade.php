<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek Text Mining</title>
    <!-- Include your CSS and JavaScript dependencies here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Your additional CSS styles -->
    <style>
        /* Gaya untuk judul navbar */
        .navbar-brand {
            font-weight: bold;
            color: #007bff; /* Warna biru yang menarik */
        }

        /* Gaya untuk active link pada navbar */
        .navbar-nav .nav-item.active .nav-link {
            color: #28a745 !important; /* Warna hijau yang menarik */
        }

        /* Gaya untuk container content */
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Projek</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dokumen*') ? 'active' : '' }}" href="{{ route('dokumen.index') }}">Teks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/tfidf') ? 'active' : '' }}" href="{{ url('/tfidf') }}">TFIDF</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('/vectormodel') ? 'active' : '' }}" href="{{ url('/vectormodel') }}">Vector Model</a>
                    </li> --}}
                    <!-- Add more navigation links as needed -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Include your JavaScript dependencies here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
