@extends('layout.app')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/vstream/favorites.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:22 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Media Landing Page</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: black">
    @section('content')

        <!-- slider wrapper -->
        <div class="slide-wrapper search-wrap-slide mt-4">
            {{-- @foreach ($Notifikasi as $notifikasi) --}}
            <div class="container">
                    {{-- <div class="col-md-4 col-lg-3 mb-3"> --}}
                        <div class="d-flex row">
                            @foreach ($bookmark as $bm)
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body" style="padding: 0;margin:0">
                                        <a class="slide-one" href="{{ url('/video/' . $bm->film->id) }}" style="width: 100%;margin: 0;">
                                            <div class="slide-image">
                                                <img src="{{ asset('storage/thumbnail/' . $bm->film->thumbnile) }}" style="height: 300px;" alt="image">
                                            </div>
                                                <div class="slide-content">
                                                    <h2>{{$bm->film->judul}} </h2>
                                                    <p>{{$bm->film->sinopsis}}</p>
                                                    <span class="tag">{{ $bm->film->durasi }}</span>
                                                    <span class="tag">{{ date('d F Y', strtotime($bm->film->tayang)) }}</span>
                                                    <span class="tag"><b>{{ $bm->film->minimal_usia }}+</b></span>
                                                </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
            {{-- @endforeach --}}




    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    @endsection
</body>


<!-- Mirrored from uitheme.net/vstream/favorites.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:22 GMT -->
</html>
