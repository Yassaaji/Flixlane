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
    <link rel="stylesheet" href="css/video-player.css">

    <style>
        /* CSS untuk mengatur tata letak video dan ikon silang */
        .video-container {
            position: relative;
        }

        .close-video-player {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            z-index: 999;
        }

    </style>
</head>
<body class="video-player" style="background-color: black">
    @section('content')
    <div class="container">
        <div class="video-details" style="background-color: rgb(255, 255, 255); margin-top:0%">
            <div class='player-container'>
                <a href="{{ url('/home') }}" class="close-video-player"><i class="ti-close"></i></a>
                <div class='player'>
                    <video id="video" src="{{ asset('storage/video/' . $film->vidio) }}" playsinline=""></video>
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
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.75497 17.6928H2C0.89543 17.6928 0 16.7973 0 15.6928V8.30611C0 7.20152 0.895431 6.30611 2 6.30611H6.75504L13.9555 0.237289C14.6058 -0.310807 15.6 0.151473 15.6 1.00191V22.997C15.6 23.8475 14.6058 24.3098 13.9555 23.7617L6.75497 17.6928Z" transform="translate(0 0.000518799)" fill="white"/>
                                    <path id="volume-low" d="M0 9.87787C2.87188 9.87787 5.2 7.66663 5.2 4.93893C5.2 2.21124 2.87188 0 0 0V2C1.86563 2 3.2 3.41162 3.2 4.93893C3.2 6.46625 1.86563 7.87787 0 7.87787V9.87787Z" transform="translate(17.3333 7.44955)" fill="white"/>
                                    <path id="volume-high" d="M0 16.4631C4.78647 16.4631 8.66667 12.7777 8.66667 8.23157C8.66667 3.68539 4.78647 0 0 0V2C3.78022 2 6.66667 4.88577 6.66667 8.23157C6.66667 11.5773 3.78022 14.4631 0 14.4631V16.4631Z" transform="translate(17.3333 4.15689)" fill="white"/>
                                    <path id="volume-off" d="M1.22565 0L0 1.16412L3.06413 4.0744L0 6.98471L1.22565 8.14883L4.28978 5.23853L7.35391 8.14883L8.57956 6.98471L5.51544 4.07440L8.57956 1.16412L7.35391 0L4.28978 2.91031L1.22565 0Z" transform="translate(17.3769 8.31403)" fill="white"/>
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
                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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
              </div>
              <div class="description" style="line-height: 10px">
                <p class="description-title fw-bold"><strong> Description</strong></p>
                <p class="description-text" id="description-content">{{ $film->sinopsis }}</p>
                <button onclick="toggleDescription()" class="btn btn-sm mb-3" style="display: none" id="read-more-btn">Read More</button>
              </div>
            </div>
        </div>
    </div>
    <div class="komentar-content card py-4 px-4 mt-4 mb-3">
        {{-- Kirim Komentar --}}
        <form id="addKomentar">
          @csrf
          <input type="hidden" id="post_id" name="post_id" value="">
          <div class="card mb-3 p-2">
            <div class="form-floating d-flex">
              <input type="text" name="komentar" id="komentar" class="form-control me-2" id="floatingInput" placeholder="">
              <label for="floatingInput" style="margin-right: 100px; padding-top:10px; padding-right: 830px">Comments</label>
              <button type="submit" class="btn btn-primary" style="margin-right: 20px; padding-top:10px;"><i class="bi bi-send-fill"></i></button>
            </div>
          </div>
        </form>
        {{-- Foreach molai dari sini! --}}
        <div id="itemKomentar">
          {{-- @forelse ($Komentar as $komentar) --}}
            <div class="card mb-4 comment-">
              <div class="chat px-4 pt-3 d-flex justify-content-between">
                <div class="left d-flex">
                  <div class="profile me-3">
                    <div class="photo">
                      <img class="rounded-circle" width="45px" height="45px"
                        src="/asset/theK.jpg" alt="" style="margin-right: 10px;">
                    </div>
                  </div>
                  <div class="chat-column">
                    <div class="username">
                      <p>bjir</p>
                    </div>
                    <div class="text-chat">
                      <p>ok</p>
                    </div>
                    <div class="tanggal-chat">
                      <p>23 oktober 2023</p>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <div class="action">
                    {{-- @if ($komentar->user_id == $Auth->id) --}}
                      <button data-bs-toggle="dropdown" aria-expanded="false"><i
                          class="bi bi-three-dots-vertical"></i></button>
                      <ul class="dropdown-menu">
                        <li>
                          <button data-komentar-id="" class="delete-comment-btn dropdown-item"
                            style="border: none; background: none; cursor: pointer;">
                            <i class="bi bi-trash"> Delete</i>
                          </button>
                        </li>
                      </ul>
                    {{-- @endif --}}
                  </div>
                </div>
              </div>
            </div>
          {{-- @empty --}}
            {{-- <div class="empty-comment-div">
              <p class="message">Be the first one to comment</p>
            </div> --}}
          {{-- @endforelse --}}
          <div>
            {{-- {{ $Komentar->links('pagination::bootstrap-5') }} --}}
          </div>
        </div>
      </div>
    </div>
    </div>

    <script src="{{ asset('js/plugin.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="{{ asset('js/video-player.js') }}"></script>
    @endsection
</body>

</html>
