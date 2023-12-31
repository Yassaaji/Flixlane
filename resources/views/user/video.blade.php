@extends('layout.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Video</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="icon" type="/image/png" sizes="16x16" href="/images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/video-player.css">
</head>

<body class="video-player" style="background-color: black">
    @section('content')
        <div class="container-fluid">
            <div class="video-details" style="background-color: rgb(255, 255, 255); margin-top: 0%;">
                <div class='player-container'>
                    <div class='player'>
                        <a href="{{ url('/home') }}" class="close-video-player"><i class="ti-close"></i></a>
                        <!-- Tombol Close -->
                        <video id="video" src="{{ asset('storage/video/' . $film->vidio) }}" playsinline></video>
                        <div class='play-btn-big'></div>
                        <div class='controls'>
                            <div class="time"><span class="time-current"></span><span class="time-total"></span></div>
                            <div class='progress'>
                                <div class='progress-filled'></div>
                            </div>
                            <div class='controls-main'>
                                <div class='controls-left'>
                                    <div class='volume'>
                                        <div class='volume-btn loud'>
                                            <!-- Tombol Volume -->
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.75497 17.6928H2C0.89543 17.6928 0 16.7973 0 15.6928V8.30611C0 7.20152 0.895431 6.30611 2 6.30611H6.75504L13.9555 0.237289C14.6058 -0.310807 15.6 0.151473 15.6 1.00191V22.997C15.6 23.8475 14.6058 24.3098 13.9555 23.7617L6.75497 17.6928Z"
                                                    transform="translate(0 0.000518799)" fill="white" />
                                                <path id="volume-low"
                                                    d="M0 9.87787C2.87188 9.87787 5.2 7.66663 5.2 4.93893C5.2 2.21124 2.87188 0 0 0V2C1.86563 2 3.2 3.41162 3.2 4.93893C3.2 6.46625 1.86563 7.87787 0 7.87787V9.87787Z"
                                                    transform="translate(17.3333 7.44955)" fill="white" />
                                                <path id="volume-high"
                                                    d="M0 16.4631C4.78647 16.4631 8.66667 12.7777 8.66667 8.23157C8.66667 3.68539 4.78647 0 0 0V2C3.78022 2 6.66667 4.88577 6.66667 8.23157C6.66667 11.5773 3.78022 14.4631 0 14.4631V16.4631Z"
                                                    transform="translate(17.3333 4.15689)" fill="white" />
                                                <path id="volume-off"
                                                    d="M1.22565 0L0 1.16412L3.06413 4.0744L0 6.98471L1.22565 8.14883L4.28978 5.23853L7.35391 8.14883L8.57956 6.98471L5.51544 4.07440L8.57956 1.16412L7.35391 0L4.28978 2.91031L1.22565 0Z"
                                                    transform="translate(17.3769 8.31403)" fill="white" />
                                            </svg>
                                        </div>
                                        <div class='volume-slider'>
                                            <div class='volume-filled'></div>
                                        </div>
                                    </div>
                                </div>
                                <div class='play-btn paused'></div>
                                <div class="controls-right">
                                    <div class='speed'>
                                        <ul class='speed-list'>
                                            <li class='speed-item' data-speed='0.5'>0.5x</li>
                                            <li class='speed-item' data-speed='0.75'>0.75x</li>
                                            <li class='speed-item active' data-speed='1'>1x</li>
                                            <li class='speed-item' data-speed='1.5'>1.5x</li>
                                            <li class='speed-item' data-speed='2'>2x</li>
                                        </ul>
                                    </div>
                                    <div class='fullscreen'>
                                        <!-- Tombol Fullscreen -->
                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                transform="translate(2 2)" fill="white" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="komentar-title mt-3 d-flex justify-content-between px-4 py-2">
                    <div class="left">
                        <div class="left-left">
                            <div class="detail-post">
                                <div class="caption">
                                    <p style="font-size: 35px;"><strong>{{ $film->judul }}</strong></p>
                                </div>
                            </div>
                            <div class="description" style="line-height: 10px; margin-top: 0px; padding-top: -5px">
                                <p class="description-title fw-bold"><strong> Description</strong></p>
                                <p class="description-text" id="description-content">{{ $film->sinopsis }}</p>
                                <!-- "Minimal Usia" and "Kategori" in a button-like appearance -->
                                <button class="btn btn-light tag-button"><b>{{ $film->minimal_usia }}+</< /b></button>
                                <button class="btn btn-light tag-button">{{ $film->kategori->kategori }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="komentar-content card py-4 px-4 mt-4 mb-3">
                {{-- Kirim Komentar --}}
                {{-- @dd($Komentar) --}}
                <form id="addKomentar" action="{{ route('komentar.create') }}" method="post">
                    @csrf
                    <input type="hidden" id="film_id" name="film_id" value="{{ $id }}">
                    <div class="card mb-3 p-2">
                        <div class="form-floating d-flex">
                            <input type="text" name="komentar" id="komentar" class="form-control me-2"
                                id="floatingInput" placeholder="Komentar">
                            <label for="floatingInput"></label>
                            <button type="submit" name="submit" class="btn btn-primary"><i
                                    class="bi bi-send-fill"></i></button>
                        </div>
                    </div>
                </form>
                {{-- Foreach molai dari sini! --}}
                <style>
                .lebarcart {
                    width: 325%; /* Atur lebar sesuai kebutuhan Anda */
                    max-width: 1100px;

                }

                </style>
                <div id="itemKomentar">
                    @foreach ($Komentar as $komentar)
                        <div class="card mb-4 comment-{{ $komentar->id }}">
                            <div class="chat px-4 pt-3 d-flex justify-content-between">
                                <div class="left d-flex">
                                    <div class="profile me-3">
                                        <div class="photo rounded-circle" style="margin-right: 10px">
                                            @if ($komentar->user->profile)
                                                <img src="{{ asset('storage/' . $komentar->user->profile) }}"
                                                    alt="Profile Image" width="45px" height="45px">
                                            @else
                                                <img src="{{ asset('images/profiledefault.jpg') }}"
                                                    alt="Default Profile Image">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="chat-column">
                                        <div class="username">
                                            <p>{{ $komentar->user->name }}</p>
                                        </div>
                                        <div class="text-chat">
                                            <p>{{ $komentar->komentar }}</p>
                                        </div>
                                        <div class="tanggal-chat">
                                            <p>{{ date('d F Y', strtotime($komentar->tanggal)) }}</p>
                                        </div>
                                        <button onclick="reply({{ $komentar->id }})"
                                            class="btn btn-light-warning font-medium text-warning px-4 rounded-pill"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseExample{{ $komentar->id }}" aria-expanded="true"
                                            aria-controls="collapseExample{{ $komentar->id }}">
                                            Lihat Komentar
                                        </button>
                                        <div class="collapse" id="{{ $komentar->id }}" style="">
                                            <div class="card card-body lebarcart" style="">
                                                {{-- Foreach Komentar --}}

                                                <form id="addKomentar" action="{{ route('reply.komen', $komentar->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <input type="hidden" id="film_id" name="film_id"
                                                        value="{{ $id }}">
                                                    <div class="card mb-3 p-2">
                                                        <div class="form-floating d-flex">
                                                            <input type="text" name="komentar" id="komentar"
                                                                class="form-control me-2" id="floatingInput"
                                                                placeholder="Komentar">
                                                            <label for="floatingInput"></label>
                                                            <button type="submit" name="submit"
                                                                class="btn btn-primary"><i
                                                                    class="bi bi-send-fill"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                @foreach ($komentar->reply($komentar->id, $film->id) as $item)
                                                    <div class="card mb-4 comment-{{ $item->id }}" >
                                                        <div class="chat px-4 pt-3 d-flex justify-content-between">
                                                            <div class="left d-flex">
                                                                <div class="profile me-3">
                                                                    <div class="photo rounded-circle"
                                                                        style="margin-right: 10px">
                                                                        @if ($item->user->profile)
                                                                            <img src="{{ asset('storage/' . $item->user->profile) }}"
                                                                                alt="Profile Image" width="45px"
                                                                                height="45px">
                                                                        @else
                                                                            <img src="{{ asset('images/profiledefault.jpg') }}"
                                                                                alt="Default Profile Image">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="chat-column">
                                                                    <div class="username">
                                                                        <p>{{ $item->user->name }}</p>
                                                                    </div>
                                                                    <div class="text-chat">
                                                                        <p>{{ $item->komentar }}</p>
                                                                    </div>
                                                                    <div class="tanggal-chat">
                                                                        <p>{{ date('d F Y', strtotime($item->tanggal)) }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                                {{-- Form --}}


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="action">
                                        @if (auth()->check() && $komentar->user_id == auth()->user()->id)
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">

                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <form action="{{ route('komentar.delete', $komentar->id) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit"
                                                                class="delete-comment-btn dropdown-item"
                                                                style="border: none; background: none; cursor: pointer;">
                                                                <i class="bi bi-trash"> Delete</i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        {{-- {{ $Komentar->links('pagination::bootstrap-5') }} --}}
                    </div>
                </div>
            </div>
        </div>
        </div>

        <script src="{{ asset('js/plugin.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/video-player.js') }}"></script>

        <script>
            function reply(id) {
                let btn = false;

                if (!btn) {
                    const reply = document.getElementById(id);
                    reply.classList.toggle('show');
                    btn = !btn
                }
            }

            function updateTitle(newTitle) {
                document.title = "Vstream - " + newTitle;
            }

            // Call the function with the film's title when the page loads
            updateTitle("{{ $film->judul }}");
        </script>
    @endsection
</body>

</html>
