@extends('layout.app')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/vstream/home-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vstream - Media Landing Page</title>

  <link rel="stylesheet" href="/css/themify-icons.css">
  <!-- Favicon icon -->
  <link rel="icon" type="/image/png" sizes="16x16" href="/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="/css/style.css">
</head>

<body class="full-wrap" style="background-color: black;">
  @section('content')
    <!-- Tampilkan pesan sukses -->
    @if (session('flash_message'))
      <div class="alert alert-success">
        {{ session('flash_message') }}
      </div>
    @endif

    {{-- <div class="preloader"></div>
        <div class="toggle-div mt-4">
            <h4 class="d-inline">Dark Mode</h4>
            <div class="d-inline float-right">
                <label class="toggle toggle-init"><input type="checkbox"><span class="toggle-icon"></span></label>
            </div>
        </div>
    </div> --}}
    <!-- banenr wrapper -->
    <div class="banner-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-slider owl-carousel owl-theme">
              @foreach ($films as $fl)
                <div class="owl-items">
                  <div class="banner-wrap justify-content-between align-items-center">
                    <div class="left-wrap">
                      <h2>{{ $fl->judul }}</h2>
                      <span class="tag">{{ $fl->tayang }}</span>
                      <span class="tag"><b>{{ $fl->minimal_usia }}+</b></span>
                      <span class="tag">{{ $fl->durasi }}</span>
                      <span class="tag">{{ $fl->kategori->kategori }}</span>
                      <span class="tag"></span>
                      <p>{{ $fl->sinopsis }}</p>
                      <a href="{{ url('/video/' . $fl->id) }}" class="btn btn-lg"><img src="/images/play.png"
                          alt="icn">Watch now</a>
                    </div>
                    <div class="right-wrap"><img src="{{ asset('storage/thumbnail/' . $fl->thumbnile) }}" alt="">
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banenr wrapper -->
    <!-- slider wrapper -->
    <div class="slide-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 text-left mb-4 mt-4">
            <h2 style="color: white">Movie List</h2>
          </div>

        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="slide-slider-full owl-carousel owl-theme owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage"
                  style="transform: translate3d(-1248px, 0px, 0px); transition: all 0s ease 0s; width: 4994px;">
                  @foreach ($films as $fl)
                    <div class="owl-item cloned" style="width: 401.11px; margin-right: 15px;">
                      <div class="owl-items">
                        <span class="slide-one" onclick="vidio({{ $fl->id }})">
                          <div class="slide-image"><img src="{{ asset('storage/thumbnail/' . $fl->thumbnile) }}"
                              style="height: 300px;" alt="image"></div>
                          <div class="slide-content">
                            <div class="d-flex justify-content-between d-flex align-items-center">
                              <span class="fs-6">
                                <h2>{{ $fl->judul }}</h2>
                              </span>
                              <span onclick="bookmark({{ $fl->id }})">
                                <i class="fa-solid fa-plus"></i>
                              </span>
                            </div>
                            <p>{{ $fl->sinopsis }}</p>
                            <span class="tag">{{ $fl->durasi }}</span>
                            <span class="tag">{{ date('d F Y', strtotime($fl->tayang)) }}</span>
                            <span class="tag"><b>{{ $fl->minimal_usia }}+</b></span>
                            <span class="tag"><b>{{ $fl->kategori->kategori }}</b></span>
                          </div>
                        </span>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- slider wrapper -->

    <!-- slider wrapper -->
    </div>

    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/video-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
      function bookmark(id) {
        axios.get(`add-to-bookmarks/${id}`)
          .then(function(response) {
            window.location = `http://127.0.0.1:8000/add-to-bookmarks/${id}`;
          })
          .catch(function(error) {
            console.error(error);
          });
      }
    </script>
    <script>
      function vidio(id) {
        setTimeout(() => {
          axios.get(`video/${id}`)
            .then(function(response) {
              window.location = `http://127.0.0.1:8000/video/${id}`;
            })
            .catch(function(error) {
              console.error(error);
            });
        }, 2000);
      }
    </script>
  @endsection
</body>


<!-- Mirrored from uitheme.net/vstream/home-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->

</html>
