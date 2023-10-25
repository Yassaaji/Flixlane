@extends('layout.app')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/vstream/season-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->

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

<body class="full-wrap" style="background: black">
    @section('content')
        <!-- slider wrapper -->
        <di class="slide-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2 style="color: white"></h2>
                    </div>
                </div>
                <div class="d-flex row">
                    @forelse ($films as $data)
                <div class="col-3">
                <div class="card">
                    <div class="card-body" style="padding: 0;margin:0">
                        <a class="slide-one" href="{{ url('/video/' . $data->id) }}" style="width: 100%;margin: 0;">
                            <div class="slide-image">
                                <img src="{{ asset('storage/tumnile/' . $data->thumbnile) }}" alt="image">
                            </div>
                            <div class="slide-content">
                                <h2>{{ $data->judul }}<i class="bi bi-heart-fill"
                                        style="font-size: 15px; margin-left: 100px; padding-left: 50px"></i>
                                    <span class="total-like" style="font-size: 15px; padding-left: 5px">250</span>
                                </h2>
                                <p>{{ $data->sinopsis }}</p>
                                <span class="tag">{{ $data->durasi }}</span>
                                <span class="tag">{{ $data->tayang }}</span>
                                <span class="tag"><b>{{ $data->kategori->kategori }}</b></span>
                                <span class="tag"><b>{{ $data->minimal_usia }}+</b></span>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
                @empty
                <div class="container-fluid py-5 px-5" style="text-align: center; position: relative;">
                    <h1>Data Kategori Kosong</h1>
                </div>
                @endforelse
                </div>
                {{-- <div>

                </div> --}}
            </div>
            <!-- slider wrapper -->
        </di>




        <script src="js/plugin.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    @endsection
</body>


<!-- Mirrored from uitheme.net/vstream/season-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->

</html>
