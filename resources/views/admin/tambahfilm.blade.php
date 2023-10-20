@extends('layout.side')
@section('side')
<!DOCTYPE html>
<html>

<head>
    <title>Create Film</title>
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
                    <form action="{{ route('tambahfilm') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for=""></label>
                        <input type="text" id="judul" name="judul" class="input-text" placeholder="Judul" value="{{ old('judul') }}">
                        @error('judul')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        <input type="number" id="minimal_usia" name="minimal_usia" class="input-text"
                            placeholder="Minimal Usia" min="0" value="{{ old('minimal_usia') }}">
                            @error('minimal_usia')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        <select name="kategori" id="kategori" class="input-text" value="{{ old('kategori') }}">
                            <option value="" disabled selected>Kategori</option>
                            @foreach ($kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                    </div>
                </div>

                <div class="col-5">
                    <div class="border-form px-2 ml-2">
                        <input type="number" id="durasi" name="durasi" class="input-text" placeholder="Durasi" value="{{ old('durasi') }}" >
                        @error('durasi')
                        <p class="text-danger">{{ $message}}</p>
                    @enderror
                        <input type="date" id="tayang" name="tayang" class="input-text"
                            placeholder="Jadwal Tayang" value="{{ old('tayang') }}">
                            @error('tayang')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                        <textarea name="sinopsis" id="sinopsis" class="input-text" cols="30" rows="3"
                            placeholder="Sinopsis"value="{{ old('sinopsis') }}"></textarea>
                            @error('sinopsis')
                            <p class="text-danger">{{ $message}}</p>
                        @enderror
                    </div>
                </div>
            <center class="mt-5">
                <div class="container col-md-10 ">
                    <div class="row ">
                        <div class="col-md-6 text-center">
                            <label for="video" style="color: #ffffff">Pilih Video</label>
                            <input type="file" id="video" name="video" accept="video/*" class="input-file" required
                                style="width: 100%;" value="{{ old('vidio') }}">
                        </div>

                        <div class="col-md-6 text-center">
                            <label for="thumbnail" style="color: #ffffff;">Pilih Gambar Thumbnail</label>
                            <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="input-file" required
                                style="width: 100%;" value="{{ old('image') }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="input-submit mt-2" style="width: 81%;">Upload</button>
            </center>
        </form>
    </div>
</body>


</html>
@endsection
