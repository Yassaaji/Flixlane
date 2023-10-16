<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <center><h1 class="card-title">Login</h1></center>
                        <form action="{{ route('sesi-login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{ Session::get('email')}}" name="email" class="form-control @error('email')is-invalid @enderror">
                            </div>
                            @error('email')
                            <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror">
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                            <div class="mb-3 d-grid">
                                <button name="submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="mb-3">
                                <p>Apakah anda tidak memiliki akun? Silahkan <a href="{{ route('sesi-register')}}">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan link ke Bootstrap JS (opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
