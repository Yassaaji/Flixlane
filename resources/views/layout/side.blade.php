<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard ADMIN</title>
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="/image/png" sizes="16x16" href="/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="{{ URL::asset('css/side.css') }}">
</head>

<body style="background-color: black">
    <div id="warraper">
        <div id="logo" style="background-color:rgb(6, 6, 54)"><span>ADM!N</span></div>
        <span id="show-label-menu">using only small screen</span>
        <div id="left-menu" style="background-color:rgb(6, 6, 54)">
            <ul>
                <li><a href="{{ route('admin') }}" class="nav-link text-white {{ request()->is('admin') ? 'active' : '' }}"><i class="fa fa-th"></i><span>Dashboard</span></a></li>
                <li><a href="{{ route('tambahfilm') }}"><i class="fa fa-fire"></i><span>Film</span></a></li>
                <li><a href="{{ route('daftarfilm') }}"><i class="fas fa-film"></i><span>DaftarFilm</span></a></li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="top-header" style="background-color:rgb(6, 6, 54)">
            <i id="toggle-menu" class="fas fa-bars float-left" style="color:#99abba"></i>
        </div>
        <div id="main-content">
            <main>
                <div class="d-flex px-5">
                    @yield('side')
                </div>
            </main>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- END SHOW ICONS -->
    </div>
    </div>
    <!-- /#wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $('#toggle-menu').click(function(){
  $('#warraper').toggleClass('small-menu');
});

$('body').on('mouseenter', '#warraper.small-menu #left-menu li a', function(){
  var label = $(this).find('span').text();
  var position = $(this).position();

  $('#show-label-menu').stop().fadeIn();
  $('#show-label-menu').text(label);
  $('#show-label-menu').css('top', position.top + 'px');
});

$('body').on('mouseleave', '#warraper.small-menu #left-menu li a', function(){
  $('#show-label-menu').stop().fadeOut();
});


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
