@extends('layout.side')
@section('side')
<!DOCTYPE html>
<html>

<head>
    <title>EditFilm</title>
    <!-- Tambahkan referensi ke CSS Bootstrap dan CSS khusus Anda -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/admin/tambahfilm.css') }}">
    <style>
        body{
            background-color:rgb(0, 4, 15);
        }
    </style>
</head>

<body>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="border-form px-2 ">
                        <form action="/proseseditfilm/{{ $film->id }}" method="POST"           enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- <input type="hidden" name="id" > --}}
                            <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" required value="{{ old('judul') ?? $film->judul ?? '' }}">
                            @error('judul')
                                <p class="text-danger">{{ $message}}</p>
                            @enderror
                            <input type="number" id="minimal_usia" name="minimal_usia" class="input-text"
                                placeholder="Minimal Usia" min="0" required value="{{ old('minimal_usia') ?? $film->minimal_usia ?? '' }}">
                                @error('minimal_usia')
                                <p class="text-danger">{{ $message}}</p>
                            @enderror
                            <select name="kategori" id="kategori" class="input-text" value="{{ old('kategori') }}">
                                <option value="" disabled selected>Kategori</option>
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}" @if (old('kategori') === $data->kategori || $film->kategori->kategori === $data->kategori)
                                    selected
                                @endif>
                                {{ $data->kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        </div>
                    </div>


                    <div class="col-5">
                        <div class="border-form px-2 ml-2">
                            <input type="time" id="durasi" name="durasi" class="input-text" placeholder="Durasi" required value="{{ $film->durasi }}" >
                            @error('durasi')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                            <input type="date" id="tayang" name="tayang" class="input-text"
                                placeholder="Jadwal Tayang" required value="{{ old('tayang') ?? $film->tayang ?? '' }}">
                                @error('tayang')
                                <p class="text-danger">{{ $message}}</p>
                            @enderror
                            <textarea name="sinopsis" id="sinopsis" class="input-text" cols="30" rows="3"
                                placeholder="Sinopsis" required>{{ $film->sinopsis }}</textarea>
                                @error('sinopsis')
                                <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                    </div>
                <center class="mt-5">
                    <div class="center-container">
                        <img src="{{ asset('storage/tumnile/' . $film->thumbnile ) }}" alt="" height="100px" width="100px">
                        <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="input-file">
                        <button type="submit" class="input-submit mt-2">Upload</button>
                    </div>
                </center>
            </form>
    </div>
</body>


</html>
<script>
    document.getElementById('upload-form').addEventListener('submit', function(e) {
        const fileInput = document.getElementById('thumbnail');
        const allowedFormats = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];

        if (fileInput.files.length > 0) {
            const selectedFile = fileInput.files[0];

            if (allowedFormats.indexOf(selectedFile.type) === -1) {
                e.preventDefault(); // Mencegah pengiriman formulir jika format tidak sesuai
                alert('Hanya file PNG, JPG, JPEG, dan GIF yang diizinkan.');
            }
        }
    });
</script>
@endsection
