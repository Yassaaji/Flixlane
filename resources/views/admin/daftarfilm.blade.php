@extends('layout.side')

@section('side')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Daftar Film</title>
        <!-- Add references to CSS Bootstrap and Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <!-- Include SweetAlert CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            body {
                background-color: #333333;
                overflow: hidden;
            }

            .card {
                background-color: #000000;
                color: white;
            }

            .btn-purple {
                background-color: rgb(87, 45, 155);
                color: white;
            }




            .table th {

                color: white;
                text-align: center;
                vertical-align: middle;
                /* Center content vertically */
            }

            .table td {
                color: white;
                text-align: center;
                vertical-align: middle;
                /* Center content vertically */
            }

            .table th,
            .table td {
                padding: 1px;
                /* Adjust the padding as needed */
                font-size: 14px;
                /* Adjust the font size as needed */
            }

            .table-responsive {
                overflow-x: auto;
                max-width: 100%;
                /* Melebar sesuai dengan konten utama */
                margin: 0 auto;
                /* Tengahkan tabel */
            }

            /* Remove default Bootstrap table borders */
            .table {

                background-color: #000000;
                color: white;
                border: none;
                /* Menghapus border default */
            }

            /* Style table header */
            .table thead tr th {
                background-color: #010e1b;
                /* Dark background color for header */
                border: none;
                padding: 10px;
                /* Adjust the padding as needed */
                font-size: 14px;

            }

            /* Style table rows alternately */
            .table tbody tr td:nth-child(odd) {
                background-color: #767676;
                /* Darker background for odd rows */
                height: 30px;
            }

            /* Style buttons in table */
            .table .btn {
                color: white;
                border: none;
            }

            /* Style responsive table */
            .table-responsive {
                overflow-x: auto;
            }

            /* Style image previews */
            .gambar-preview {
                cursor: pointer;
                transition: transform 0.2s ease;
            }

            .gambar-preview:hover {
                transform: scale(1.1);
            }

            .gambar-preview.enlarged {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 9999;
                width: auto;
                height: auto;
                max-width: 90%;
                max-height: 90%;
            }

            .button {
                display: flex;
                justify-content: center;
                gap: 10px;
            }

            .button button {
                background-color: #06000f;
                color: #ffffff;
                border: none;
                padding: 5px 10px;
                cursor: pointer;
            }

            .button button:hover {
                background-color: #555;
            }

            .pagination {
                justify-content: center;
            }

            .pagination .page-item {
                margin: 0 5px;
                /* Jarak antara item pagination */
            }

            .pagination .page-item.active .page-link {
                background-color: #007BFF;
                /* Warna latar belakang item aktif */
                border-color: #007BFF;
                /* Warna border item aktif */
            }

            .pagination .page-link {
                color: #007BFF;
                /* Warna teks item pagination */
            }

            .ellipsis {
                text-overflow: ellipsis !important;
                overflow: hidden !important;
                -webkit-line-clamp: 5 !important;
                -webkit-box-orient: vertical !important;
                display: -webkit-box !important;
                word-break: break-word !important;
            }

            /* Tambahkan CSS untuk membuat tabel responsif */




            /* Jika ingin menghilangkan garis horizontal pada sel tabel pada tampilan seluler */
            @media screen and (max-width: 767px) {

                .table th,
                .table td {
                    border: none;
                }
            }

            /* CSS untuk efek hover */
            .btn-dark {
                background-color: #343a40;
                /* Warna latar belakang tombol */
                color: #ffffff;
                /* Warna teks tombol */
                transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                /* Bayangan awal */
            }

            .btn-dark:hover {
                background-color: #ffffff;
                /* Warna latar belakang saat dihover */
                color: #343a40;
                /* Warna teks saat dihover */
                transform: scale(1.1);
                /* Perubahan ukuran saat dihover */
                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                /* Bayangan saat dihover */
            }

            .btn-danger {
                background-color: #ff0000;
                /* Warna latar belakang tombol */
                color: #ffffff;
                /* Warna teks tombol */
                transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                /* Bayangan awal */
            }

            .btn-danger:hover {
                background-color: #ffffff;
                /* Warna latar belakang saat dihover */
                color: #343a40;
                /* Warna teks saat dihover */
                transform: scale(1.1);
                /* Perubahan ukuran saat dihover */
                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                /* Bayangan saat dihover */
            }

            .btn-primary {
                background-color: #070f3e;
                /* Warna latar belakang tombol */
                color: #ffffff;
                /* Warna teks tombol */
                transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                /* Bayangan awal */
            }

            .btn-primary:hover {
                background-color: #ffffff;
                /* Warna latar belakang saat dihover */
                color: #343a40;
                /* Warna teks saat dihover */
                transform: scale(1.1);
                /* Perubahan ukuran saat dihover */
                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                /* Bayangan saat dihover */
            }

            #myModal {
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 10%;
                left: 40%;
            }

            .btn-success {
                background-color: #0a771d;
                /* Warna latar belakang tombol */
                color: #ffffff;
                /* Warna teks tombol */
                transition: box-shadow 0.3s, transform 0.3s, color 0.3s;
                /* Efek transisi untuk bayangan, transformasi, dan warna teks */
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                /* Bayangan awal */
            }

            .btn-success:hover {
                background-color: #ffffff;
                /* Warna latar belakang saat dihover */
                color: #343a40;
                /* Warna teks saat dihover */
                transform: scale(1.1);
                /* Perubahan ukuran saat dihover */
                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                /* Bayangan saat dihover */
            }
        </style>

    <body>

        <div class="container">
            <div class="card " style="margin-left: 10px; width: 100%; ">
                <div class="card-body">
                    <a href="{{ route('tambahfilm') }}" class="btn btn-dark"><i class="fas fa-plus"></i> </a>

                    <div class="table-responsive mt-4">
                        <table class="table table-dark table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">VIDIO</th>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">TAYANG</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($films as $i=> $film)
                                    <tr>
                                        <td>{{ $i + 1 }} </td>
                                        <td>{{ $film->judul }}</td>
                                        <td>
                                            <video width="150" height="150" controls>
                                                <source src="{{ asset('storage/video/' . $film->vidio) }}" type="video/mp4">
                                                Vidio tidak tersedia.
                                            </video>
                                        </td>

                                        <td><img width="120" height="150" src="{{ asset('storage/tumnile/' . $film->thumbnile) }}"
                                                alt="{{ $film->judul }}" height="100px" width="100px"></td>
                                        <td>{{ $film->tayang }}</td>

                                        <td>
                                            <div class="btn-group d-flex align-items-center" role="group">
                                                <form class="d-flex " action="{{ route('film.destroy', $film->id) }}"
                                                    method="post" style="width: 125px;">
                                                    @csrf
                                                    <a href="{{ route('edit-film', $film->id) }}"
                                                        class="btn btn-dark btn-sm me-2"><i class="fas fa-pencil-alt"
                                                            style="margin-top: 8px"></i></a>
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm me-2"
                                                        onclick="confirmDelete(event)"><i class="fas fa-trash-alt"></i>
                                                    </button>



                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                    </div>
                </div>
                <!-- /.modal-content -->
                </form>
            </div>
            <!-- /.modal-dialog -->
        </div>

    @empty
        @endforelse
        </tbody>
        </table>

        </div>
        </div>
        </div>
        </div>
    </body>
    <script>
        function confirmDelete(event) {
            event.preventDefault(); // Prevent form submission
            Swal.fire({
                title: 'Apakah anda yakin ingin menghapus data?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, submit the form
                    event.target.closest('form').submit();
                }
            });
        }
    </script>


    <!-- The Modal -->



    </html>
@endsection
