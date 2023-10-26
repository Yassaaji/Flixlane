@extends('layout.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Media Landing Page</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: black">
    @section('content')
        <div class="judul" style="color: rgb(181, 182, 185); font-size: 20px;"><strong> Bookmark </strong></div>
        <div class="slide-wrapper search-wrap-slide mt-4">
            <div class="container">
                <div class="d-flex row">
                    @foreach ($bookmark as $bm)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body" style="padding: 0; margin: 0;">
                                <div class="slide-one" style="width: 100%; margin: 0;">
                                    <div class="slide-image">
                                        <img src="{{ asset('storage/thumbnail/' . $bm->film->thumbnile) }}" style="height: 300px;" alt="image">
                                    </div>
                                    <div class="slide-content">
                                        <a href="{{ url('/video/' . $bm->film->id) }}">
                                            <h2>{{ $bm->film->judul }}</h2>
                                            <p>{{ $bm->film->sinopsis }}</p>
                                            <span class="tag">{{ $bm->film->durasi }}</span>
                                            <span class="tag">{{ date('d F Y', strtotime($bm->film->tayang)) }}</span>
                                            <span class="tag"><b>{{ $bm->film->minimal_usia }}+</b></span>
                                        </a>
                                        <a href="{{ route('bookmark.delete', $bm->id) }}" class="delete-icon" style="color: rgb(255, 255, 255);" onclick="event.preventDefault(); confirmDelete({{ $bm->id }});">
                                            <i class="fa-solid fa-trash" style="margin-right: 10px"></i>
                                        </a>
                                        <form id="delete-form{{ $bm->id }}" action="{{ route('bookmark.delete', $bm->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(bookmarkId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form' + bookmarkId).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            });
        }
    </script>
    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
