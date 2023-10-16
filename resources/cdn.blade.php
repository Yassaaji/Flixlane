<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> `1
<style>
    .navbar {
        background-color: #343a40;
        /* Warna hitam untuk navbar */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Efek shadow pada navbar */
    }

    .navbar-brand {
        font-family: 'Arial', sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #fff;
        /* Warna merah untuk tulisan "SMEXA" */
        text-shadow: 2px 2px 3px rgba(0, 0, 0, 0);
        /* Efek shadow putih pada tulisan */
    }

    .navbar-light .navbar-nav .nav-link {
        color: #fff !important;
        /* Warna tulisan putih pada nav link */
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 15px 35px 15px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="">Data Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="{{ url('/guru') }}">Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/sekolah') }}">Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/mapel') }}">Mapel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/ekstra') }}">Ekstra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/siswa') }}">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/perpustakaan') }}">Perpustakaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/kantin') }}">Kantin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/sesi/logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
